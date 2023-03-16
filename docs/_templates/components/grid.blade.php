@props(['type' => 'home'])
<nav class="grid grid--{{ $type }} gap-gutter grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-48">
    {{$slot}}
</nav>
