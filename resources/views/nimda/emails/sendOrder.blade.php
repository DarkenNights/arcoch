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

