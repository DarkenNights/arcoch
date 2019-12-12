@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="accordion" id="myGroup">
                <div class="row" style="margin-bottom: 15px">
                    @foreach($providers as $provider)
                        <div class="col">
                            <a class="col-lg-12 btn btn-primary" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5" data-toggle="collapse" href="#{{ $provider->short_name }}" role="button" aria-expanded="@if($provider->id == 1)true@else false @endif" aria-controls="{{ $provider->short_name }}">
                                {{ $provider->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($providers as $provider)
                            <div class="collapse multi-collapse @if($provider->id == 1) show @endif" id="{{ $provider->short_name }}">
                                <div>
                                    <table class="table table-bordered">
                                        <thead style="background-color: {{ $provider->color }}; color: #FFFFFF">
                                        <tr>
                                            <th scope="col">Produit</th>
                                            <th scope="col">Quantité en stock</th>
                                            <th scope="col">Stock tampon</th>
                                            <th scope="col">Quantité nécessaire (à l'unité)</th>
                                            <th scope="col">Quantité à commander (en carton)</th>
                                            <th scope="col">Prix</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($provider->products as $product)
                                            <tr id="{{ $product->id }}">
                                                @php
                                                    $quantity = $product->buffer - $product->stock;
                                                    $neededCarton = ceil($quantity / $product->conditioning_per_carton);
                                                    $price = round($product->price * $product->quantity_per_carton * $neededCarton,2);
                                                @endphp
                                                <th scope="row">{{ $product->name }}</th>
                                                <input type="hidden" name="productId[]" class="productId" value="{{ $product->id }}">
                                                <td><input type="number" name="stock" class="stock" value="{{ $product->stock }}" min=0 disabled></td>
                                                <td><input type="number" name="buffer" class="buffer" value="{{ $product->buffer }}" min=0 disabled></td>
                                                <td><input type="number" name="quantityUnit" class="quantityUnit" onchange="modifyInfos('{{ $product->id }}', '{{ $product->conditioning_per_carton }}', '{{ $product->price }}', '{{ $product->quantity_per_carton }}')" value="@if($quantity <= 0){{ intval(0) }}@else{{ $quantity }}@endif" min=0></td>
                                                <td><input type="number" name="quantityCarton[]" class="quantityCarton" value="@if($quantity <= 0){{ intval(0) }}@else{{ $neededCarton }}@endif" min=0 disabled></td>
                                                <td class="price">@if($price > 0) {{ $price }} @else 0 @endif €</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-lg-12" style="text-align: center">
                                            <button class="btn btn-success" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5" onclick="order('{{ $provider->short_name }}')">
                                                Envoyer la commande pour {{ $provider->name }} en date du {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        const $myGroup = $('.accordion');
        $myGroup.on('show.bs.collapse','.collapse', function() {
            $myGroup.find('.collapse.show').collapse('hide');
        });

        function modifyInfos(productId, productConditioningPerCarton, productPrice, productQuantityPerCarton) {
            const target = '#' + productId;
            if($(target + ' .quantityUnit').val() <= 0){
                console.log('toto');
                $(target + ' .quantityCarton').val(0);
                $(target + ' .price').html(0 + ' €');
            }
            else {
                console.log('titi');
                console.log(Math.ceil($(target + ' .quantityUnit').val() / productConditioningPerCarton));
                $(target + ' .quantityCarton').val(Math.ceil($(target + ' .quantityUnit').val() / productConditioningPerCarton));
                $(target + ' .price').html(Math.round((productPrice * productQuantityPerCarton * Math.ceil($(target + ' .quantityUnit').val() / productConditioningPerCarton))*100) / 100 + ' €');
            }
        }

        function order(providerShortName) {
            let productId = [];
            $('#' + providerShortName + ' input[name="productId[]"]').each( function() {
                productId.push(this.value);
            });
            let quantityCarton = [];
            $('#' + providerShortName + ' input[name="quantityCarton[]"]').each( function() {
                quantityCarton.push(this.value);
            });
            console.log(productId);
            console.log(quantityCarton);
            $.ajax({
                type: "POST",
                url: "/nimda/addNewOrder",
                data: "providerShortName="+providerShortName+"&productId="+productId+"&quantityCarton="+quantityCarton,
                dataType: "json"
            }).done(function(data) {
                const productName = $(target + ' .productName').html();
                $(target + ' .productName').html(data);
                // $('#alertMsg').html(
                //     "<div class=\"alert alert-success\" role=\"alert\">" + data + "</div>"
                // );
            }).fail(function(data) {
                const productName = $(target + ' .productName').html();
                $(target + ' .productName').html('<strong>' + productName + '</strong> : Une erreur s\'est produite.');
                // $('#alertMsg').html(
                //     "<div class=\"alert alert-danger\" role=\"alert\">" + data + "</div>"
                // );
            });
        }
    </script>
@endsection
