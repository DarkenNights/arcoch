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
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($provider->products as $product)
                                            <tr id="{{ $product->id }}">
                                                <td class="productName"><strong>{{ $product->name }}</strong></td>
                                                <td><input type="number" name="stock" class="stock" value="{{ $product->stock }}" min=0></td>
                                                <td><input type="number" name="buffer" class="buffer" value="{{ $product->buffer }}" min=0></td>
                                                <td><button class="btn btn-success" onclick="saveNewStocks('{{ $product->id }}')">Valider le stock et le stock tampon</button></td>
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

        function saveNewStocks(productId) {
            const target = '#' + productId;
            const stock = $(target + ' .stock').val();
            const buffer = $(target + ' .buffer').val();
            $.ajax({
                type: "POST",
                url: "/nimda/saveNewStocks",
                data: "productId="+productId+"&stock="+stock+"&buffer="+buffer,
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
