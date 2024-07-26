@props([
    'color' => 'white'
])

@php
    $class = 'h-2 w-2 inline-block mx-1 ';
    $colors = [
        'white' => 'bg-white',
        'black' => 'bg-black',
        'red' => 'bg-red-500',
        'green' => 'bg-green-500',
        'blue' => 'bg-blue-500',
        'yellow' => 'bg-yellow-500',
        'indigo' => 'bg-indigo-500',
        'purple' => 'bg-purple-500',
        'pink' => 'bg-pink-500',
    ];

    $class .= $colors[$color??'white'];

@endphp

<span {{ $attributes->merge(['class' => $class]) }}></span>
