Bonjour,
<br><br>
Voici la commande que nous souhaiterions passer pour la prochaine livraison :

<ul>
    @foreach($order as $product)
        <li>{{ $product->quantity }} x {{ $product->product->name }} @if(!empty($product->product->reference)) ( {{ $product->product->reference }} ) @endif</li>
    @endforeach
</ul>
<br><br>
Merci d'avance pour vos actions.
<br><br>
Cordialement,<br>
L'équipe de l'Arcoch - SAS Le Petit Canada
Tel: 09 54 11 54 16
Addresse : Route du lac de Payolle, 65710 Campan
<img src="{{ asset('index/img/logo_menu.png') }}">

