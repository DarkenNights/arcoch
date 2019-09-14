<li class="@if($active == "index") active @endif">
    <a href="{{ route('index') }}">Les évènements</a>
</li>
<li class="@if($active == "dinner") active @endif">
    <a href="{{ route('dinner') }}">Le restaurant</a>
</li>
<li class="@if($active == "rooms") active @endif">
    <a href="{{ route('rooms') }}">Les chambres</a>
</li>
{{--<li class="@if($active == "concierge") active @endif">--}}
{{--    <a href="{{ route('concierge') }}">La conciergerie</a>--}}
{{--</li>--}}
{{--<li class="@if($active == "contact") active @endif">--}}
{{--    <a href="{{ route('contact') }}">Contact</a>--}}
{{--</li>--}}
