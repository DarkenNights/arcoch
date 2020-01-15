@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="row" id="losses" style="margin-bottom: 20px">
                <form class="col-12" method="POST" action="{{ route('nimdaAddLoss') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-4">
                            <select class="form-control" name="product">
                                @foreach($providers as $provider)
                                    <option style="background-color: {{ $provider->color }}; color: #FFFFFF" name="{{ $provider->short_name }}" disabled>{{ $provider->name }}</option>
                                    @foreach($products as $product)
                                        @if($product->provider_id === $provider->id)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <input class="form-control" type="number" name="quantity" min="0" value="0">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-success">Enregistrer la perte</button>
                        </div>
                    </div>

                </form>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Fournisseur</th>
                    <th scope="col">Quantité perdue (à l'unité ou en kg)</th>
                    <th scope="col">Montant de la perte</th>
                </tr>
                </thead>
                <tbody>
                @foreach($losses as $loss)
                    <tr id="{{ $loss->product->id }}">
                        <td class="productName"><strong>{{ $loss->product->name }}</strong></td>
                        <td>{{ $loss->product->provider->name }}</td>
                        <td>{{ $loss->quantity }}</td>
                        <td>{{ $loss->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
