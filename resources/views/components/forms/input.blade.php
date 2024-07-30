@props([
    'label',
    'name'
])

@php
$defaults = [
    'type' => 'text',
    'id' => $name,
    'name' => $name,
    'class' => 'w-full py-4 px-5 rounded-xl bg-white/5 border border-white/10',
    'placeholder' => '',
    'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
