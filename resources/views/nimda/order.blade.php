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
                    <div class="col-lg-12" id="alertMsg"></div>
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
                                                <td><input type="number" name="price[]" class="price" min="0" value="@if($price > 0){{ $price }}@else{{ '0' }}@endif" disabled> €</td>
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
                $(target + ' .quantityCarton').val(0);
                $(target + ' .price').val(0);
            }
            else {
                $(target + ' .quantityCarton').val(Math.ceil($(target + ' .quantityUnit').val() / productConditioningPerCarton));
                $(target + ' .price').val(Math.round((productPrice * productQuantityPerCarton * Math.ceil($(target + ' .quantityUnit').val() / productConditioningPerCarton))*100) / 100);
            }
        }

        function order(providerShortName) {
            let productIds = [];
            $('#' + providerShortName + ' input[name="productId[]"]').each( function() {
                productIds.push(this.value);
            });
            let quantitiesCarton = [];
            $('#' + providerShortName + ' input[name="quantityCarton[]"]').each( function() {
                quantitiesCarton.push(this.value);
            });
            let prices = [];
            $('#' + providerShortName + ' input[name="price[]"]').each( function() {
                prices.push(this.value);
            });
            $.ajax({
                type: "POST",
                url: "/nimda/addNewOrder",
                data: "providerShortName="+providerShortName+"&productIds="+productIds+"&quantitiesCarton="+quantitiesCarton+"&prices="+prices,
                dataType: "json"
            }).done(function(data) {
                if(data == 'save_ok') {
                    $('#alertMsg').html(
                        "<div class=\"alert alert-success\" role=\"alert\">La commande a été envoyée avec succès.</div>"
                    );
                    $('html,body').animate({scrollTop: 0}, 'slow');
                }
                else {
                    $('#alertMsg').html(
                        "<div class=\"alert alert-danger\" role=\"alert\">La commande n'a pas pu être envoyé. Demander à Thomas.</div>"
                    );
                    $('html,body').animate({scrollTop: 0}, 'slow');
                }
            }).fail(function(data) {
                console.log(data.responseText);
            });
        }
    </script>
@endsection
