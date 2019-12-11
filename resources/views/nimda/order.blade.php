@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="accordion" id="myGroup">
                <div class="row" style="margin-bottom: 15px">
                    @foreach($providers as $provider)
                        <div class="col">
                            <a class="col-lg-12 btn btn-primary" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5" data-toggle="collapse" href="#{{ $provider->short_name }}" role="button" aria-expanded="false" aria-controls="{{ $provider->short_name }}">
                                {{ $provider->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($providers as $provider)
                            <div class="collapse multi-collapse" id="{{ $provider->short_name }}">
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
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
                                            <tr id="{{ $provider->short_name . '#' . $product->id }}">
                                                @php
                                                    $quantity = $product->buffer - $product->stock;
                                                    $neededCarton = ceil($quantity / $product->conditioning_per_carton);
                                                    $price = round($product->price * $product->quantity_per_carton * $neededCarton,2);
                                                @endphp
                                                <th scope="row">{{ $product->name }}</th>
                                                <td><input type="number" name="buffer" value="{{ $product->stock }}" min=0 disabled></td>
                                                <td><input type="number" name="buffer" value="{{ $product->buffer }}" min=0 disabled></td>
                                                <td><input type="number" name="buffer" value="@if($quantity <= 0){{ intval(0) }}@else{{ $quantity }}@endif" min=0></td>
                                                <td><input type="number" name="buffer" value="@if($quantity <= 0){{ intval(0) }}@else{{ $neededCarton }}@endif" min=0 disabled></td>
                                                <td>@if($price > 0) {{ $price }} @else 0 @endif €</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
    </script>
@endsection
