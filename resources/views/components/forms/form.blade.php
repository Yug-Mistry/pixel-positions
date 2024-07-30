@props(['method' => 'get'])
<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-6']) }} method="{{$method}}">
    @if ($method !== 'get')
        @csrf
        @method($method)
    @endif
    {{ $slot }}
</form>
