@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="row" id="costs" style="margin-bottom: 20px">
                <div class="col-12">
                    <div class="row" id="form-cost">
                        @for ($i = 0; $i < 11; $i++)
                            <div class="col-6 form-group">
                                <label for="product">Produit {{ $i + 1 }}</label>
                                <select class="form-control" name="product[]" onchange="cost_calcul()">
                                    @foreach($providers as $provider)
                                        <option value="null">Aucun</option>
                                        <optgroup style="background-color: {{ $provider->color }}; color: #FFFFFF;" label="{{ $provider->name }}" name="{{ $provider->short_name }}">
                                            @foreach($products as $product)
                                                @if($product->provider_id === $provider->id)
                                                    <option value="{{ $product->price_kg }}">{{ $product->name }}</option>
                                                @endif
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3 form-group">
                                <label for="quantity">Quantité à l'unité, en kg ou en L</label>
                                <input class="form-control" type="number" name="quantity[]" min="0" step="0.01" value="0" onchange="cost_calcul()">
                            </div>
                            @if($i == 0)
                                <div class="col-3">
                                    <div class="col-12 form-group">
                                        <label for="quantity">Prix de vente public</label>
                                        <input class="form-control" type="number" name="price" min="0" step="0.1" value="0" onchange="cost_calcul()">
                                    </div>
                                </div>
                            @elseif($i == 1)
                                <div class="col-3">
                                    <div style="padding-top: 40px; padding-left: 20px" id="marge">
                                        Marge : 0 €
                                    </div>
                                </div>
                            @elseif($i == 2)
                                <div class="col-3">
                                    <div style="padding-top: 40px; padding-left: 20px" id="coeff">
                                        Coeff : 0
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        function cost_calcul() {
            let productPrices = [];
            $('#form-cost select[name="product[]"]').each( function() {
                productPrices.push(this.value);
            });
            let productQuantity = [];
            $('#form-cost input[name="quantity[]"]').each( function() {
                productQuantity.push(this.value);
            });
            let public_price = $('#form-cost input[name="price"]').val();
            console.log(productPrices);
            console.log(productQuantity);
            console.log(public_price);
            let total = 0.00;
            for (let i = 0; i < 11; i++) {
                if(productPrices[i] !== "null") {
                    total = total + (productPrices[i] * productQuantity[i]);
                }
            }
            console.log(total);
            $('#marge').html('Marge : ' + (public_price - total).toFixed(2) + ' €');
            $('#coeff').html('Coeff : ' + (public_price / total).toFixed(2));
        }
    </script>
@endsection
