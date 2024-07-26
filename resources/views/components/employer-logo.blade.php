@props([
    'src',
    'alt' => 'Image'
])
<img src="{{ $src }}" alt="{{ $alt }} Logo" {{ $attributes->merge(['class' => 'max-h-28 max-w-28 rounded-xl']) }}>
