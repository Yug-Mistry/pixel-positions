@props([
    'color' => 'white'
])

@php
    $bgColorClass = match($color) {
        'white' => 'bg-white',
        'black' => 'bg-black',
        default => 'bg-' . $color . '-700'
    };
@endphp

<span class="h-2 w-2 inline-block {{ $bgColorClass }}"></span>
