@props([
    'label',
    'name'
])

<div>
    @if(isset($label))
        <x-forms.label :$label :$name />
    @endif
    <div {{ $attributes->merge(['class' => 'mt-1']) }}>
        {{ $slot }}
        <x-forms.error :error="$errors->first($name)" />
    </div>
</div>
