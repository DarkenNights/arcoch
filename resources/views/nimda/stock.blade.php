@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Produit</th>
                            <th scope="col">Quantité en stock</th>
                            <th scope="col">Stock tampon</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><button class="btn btn-success">Valider le stock et le stock tampon</button></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><button class="btn btn-success">Valider le stock et le stock tampon</button></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><input type="number" name="buffer" value="4" min=0></td>
                            <td><button class="btn btn-success">Valider le stock et le stock tampon</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
