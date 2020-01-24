Bonjour,

Voici la commande que nous souhaiterions passer pour la prochaine livraison :

<ul>
    @foreach($order as $product)
        <li>{{ $product->quantity }} x {{ $product->product->name }}</li>
    @endforeach
</ul>
