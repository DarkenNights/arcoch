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
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead style="background-color: {{ $provider->color }}; color: #FFFFFF">
                                        <tr class="d-flex">
                                            <th class="col-5">Produit</th>
                                            <th class="col-1">Quantité en stock</th>
                                            <th class="col-1">Stock tampon</th>
                                            <th class="col-1">Quantité nécessaire (à l'unité)</th>
                                            <th class="col-1">Quantité à commander (en carton)</th>
                                            <th class="col-3">Prix</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($provider->products as $product)
                                            <tr class="d-flex" id="{{ $product->id }}">
                                                @php
                                                    $quantity = $product->buffer - $product->stock;
                                                    $neededCarton = ceil($quantity / $product->conditioning_per_carton);
                                                    $price = round($product->price * $product->quantity_per_carton * $neededCarton,2);
                                                @endphp
                                                <td class="col-5">{{ $product->name }}</td>
                                                <input type="hidden" name="productId[]" class="productId" value="{{ $product->id }}">
                                                <td class="col-1"><input class="col-12 stock" type="number" name="stock" value="{{ $product->stock }}" min=0 disabled></td>
                                                <td class="col-1"><input class="col-12 buffer" type="number" name="buffer" value="{{ $product->buffer }}" min=0 disabled></td>
                                                <td class="col-1"><input class="col-12 quantityUnit" type="number" name="quantityUnit" onchange="modifyInfos('{{ $product->id }}', '{{ $product->conditioning_per_carton }}', '{{ $product->price }}', '{{ $product->quantity_per_carton }}')" value="@if($quantity <= 0){{ intval(0) }}@else{{ $quantity }}@endif" min=0></td>
                                                <td class="col-1"><input class="col-12 quantityCarton" type="number" name="quantityCarton[]" value="@if($quantity <= 0){{ intval(0) }}@else{{ $neededCarton }}@endif" min=0 disabled></td>
                                                <td class="col-3"><div class="col-12"><input class="col-12 price" type="number" name="price[]" min="0" value="@if($price > 0){{ $price }}@else{{ '0' }}@endif" disabled></div></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-lg-12" style="text-align: center">
                                            <button class="btn btn-success" style="margin-bottom: 25px; background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5" onclick="confirmOrder('{{ $provider->short_name }}', '{{ $provider->franco }}')">
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

        function confirmOrder(providerShortName, providerFranco) {
            let productIds = [];
            $('#' + providerShortName + ' input[name="productId[]"]').each( function() {
                productIds.push(this.value);
            });
            let quantitiesCarton = [];
            $('#' + providerShortName + ' input[name="quantityCarton[]"]').each( function() {
                quantitiesCarton.push(this.value);
            });
            let prices = [];
            let total = 0.00;
            $('#' + providerShortName + ' input[name="price[]"]').each( function() {
                prices.push(this.value);
                total = total + parseFloat(this.value);
            });
            let message = "";
            if(total < providerFranco) {
                message = "Le franco de " + providerFranco + " € n'est pas atteint. Envoyé tout de même la commande ?";
            }
            else {
                message = "Confirmez-vous l'envoie de la commande ?";
            }
            if(confirm(message)) {
                order(providerShortName, productIds, quantitiesCarton, prices);
            }
            else {
                alert("La commande n'a pas été envoyée !");
            }
        }

        function order(providerShortName, productIds, quantitiesCarton, prices) {

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
