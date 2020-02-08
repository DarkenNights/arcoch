@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div id="accordion">
                <div class="row" style="margin-bottom: 15px">
                    @foreach($providers as $provider)
                        <div class="col">
                            <a class="col-lg-12 btn btn-primary" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5; color: #ffffff" data-toggle="collapse" data-target="#collapse{{$provider->short_name}}" aria-expanded="@if($provider->id == 1)true@else false @endif" aria-controls="collapse{{$provider->short_name}}">
                                {{ $provider->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($providers as $provider)
                            <div id="collapse{{$provider->short_name}}" class="collapse" aria-labelledby="heading{{$provider->short_name}}">
                                <div id="accordion">
                                    @if(!empty($orders[$provider->id]))
                                        @foreach($orders[$provider->id] as $orderNumber => $order)
                                            <div class="card" style="margin-bottom: 15px">
                                                <div class="card-header" id="heading{{$orderNumber}}" style="border-radius: 5px; background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5">
                                                    <h5 class="mb-0" style="color: #000000">
                                                        <button class="btn btn-link" style="color: #ffffff" data-toggle="collapse" data-target="#collapse{{$orderNumber}}" aria-expanded="false" aria-controls="collapse{{$orderNumber}}">
                                                            {{ $provider->name }} - Commande numéro {{ $orderNumber }} du {{ $order[0]->created_at->format('d/m/Y à H\hi') }}
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapse{{$orderNumber}}" class="collapse" aria-labelledby="heading{{$orderNumber}}" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Bonjour,
                                                        <br><br>
                                                        Voici la commande que nous souhaiterions passer pour la prochaine livraison :

                                                        <ul>
                                                            @foreach($order as $product)
                                                                <li>{{ $product->quantity }} x {{ $product->product->name }} @if(!empty($product->product->reference)) ( ref: {{ $product->product->reference }} ) @endif</li>
                                                            @endforeach
                                                        </ul>

                                                        @if(!empty($product->product->provider->order_message))
                                                            {{ $product->product->provider->order_message }}
                                                            <br><br>
                                                        @endif

                                                        Merci d'avance pour vos actions.
                                                        <br><br>
                                                        Cordialement,<br>
                                                        L'équipe de l'Arcoch - SAS Le Petit Canada <br>
                                                        Tel: 09 54 11 54 16 <br>
                                                        Addresse : Route du lac de Payolle, 65710 Campan<br>
                                                        <img src="{{ asset('index/img/logo_mail.png') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
