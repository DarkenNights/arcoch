@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="row">
                <div class="col-lg-12" id="alertMsg">
                    @if (!empty(Session::get('error')))
                        <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                    @elseif (!empty(Session::get('success')))
                        <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
                    @endif
                </div>
            </div>
            <div class="row" id="getLosses" style="margin-bottom: 20px">
                <div class="col-3 form-group">
                    <label for="start">Date de début</label>
                    <input class="form-control" type="date" id="start" name="start">
                </div>
                <div class="col-3 form-group">
                    <label for="end">Date de fin</label>
                    <input class="form-control" type="date" id="end" name="end">
                </div>
                <div class="col-3">
                    <button style="margin-top: 32px" class="btn btn-success" onclick="getLosses($('#start').val(), $('#end').val())">Calculer les pertes</button>
                </div>
                <div style="margin-top: 32px" class="col-3" id="totalLosses"></div>
            </div>
            <div class="row" id="losses" style="margin-bottom: 20px">
                <form class="col-12" method="POST" action="{{ route('nimdaAddLoss') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="product">Produit</label>
                            <select class="form-control" name="product">
                                @foreach($providers as $provider)
                                    <optgroup style="background-color: {{ $provider->color }}; color: #FFFFFF;" label="{{ $provider->name }}" name="{{ $provider->short_name }}">
                                        @foreach($products as $product)
                                            @if($product->provider_id === $provider->id)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endif
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3 form-group">
                            <label for="quantity">Quantité à l'unité ou en kg</label>
                            <input class="form-control" type="number" name="quantity" min="0" step="0.01" value="0">
                        </div>
                        <div class="col-3">
                            <button style="margin-top: 32px" type="submit" class="btn btn-success">Enregistrer la perte</button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Produit</th>
                    <th scope="col">Fournisseur</th>
                    <th scope="col">Date de l'enregistrement</th>
                    <th scope="col">Quantité perdue (à l'unité ou en kg)</th>
                    <th scope="col">Montant de la perte</th>
                </tr>
                </thead>
                <tbody>
                @foreach($losses as $loss)
                    <tr id="{{ $loss->product->id }}">
                        <td class="productName"><strong>{{ $loss->product->name }}</strong></td>
                        <td style="color: #ffffff; background-color: {{ $loss->product->provider->color }}">{{ $loss->product->provider->name }}</td>
                        <td>{{ $loss->created_at->format('d/m/Y') }}</td>
                        <td>{{ $loss->quantity }}</td>
                        <td>{{ $loss->price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        function getLosses(start, end) {
            $.ajax({
                type: "POST",
                url: "/nimda/getLosses",
                data: "start="+start+"&end="+end,
                dataType: "json"
            }).done(function(data) {
                $('#totalLosses').html('Total des pertes pour la période donnée : ' + data);
            }).fail(function(data) {
                $(target + ' .productName').html('<strong>Une erreur s\'est produite.</strong>');
            });
        }
    </script>
@endsection
