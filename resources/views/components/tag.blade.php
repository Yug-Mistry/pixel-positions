@props([
    'href' => '#',
    'size' => 'sm'
])

@php
    if ($size === '2xs') {
        $size = '[0.625rem]';
    }
    $sizeClass = 'text-' . $size;
@endphp
<a href="{{ $href }}" class="bg-white/10 hover:bg-white/25 rounded-xl py-1 px-3 {{ $sizeClass }} font-bold  transition-colors duration-300 text-center">
    {{ $slot }}
</a>
