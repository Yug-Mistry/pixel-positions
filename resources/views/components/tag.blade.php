@props([
    'href' => '#',
    'size' => 'sm'
])

@php
    $sizeClass = 'text-' . $size;
@endphp

<a href="{{ $href }}" class="bg-white/10 hover:bg-white/25 rounded-xl py-1 px-3 {{ $sizeClass }} transition-colors duration-300 text-center">
    {{ $slot }}
</a>
