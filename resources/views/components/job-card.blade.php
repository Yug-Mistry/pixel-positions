@props([
    'job'
])
<x-card class="flex-col text-center">
    <div class="self-start text-sm ">
        {{ $job->employer->name }}
    </div>
    <div class="py-8 ">
        <h4 class="group-hover:text-blue-600 text-xl font-bold group transition-colors duration-300">{{ $job->title }}</h4>
        <p class="text-sm mt-4">{{ $job->location }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex gap-2 ">
            @foreach ($job->tags as $tag)
                <x-tag size="2xs" href="{{url('tags/'.$tag->name)}}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
        <x-employer-logo src="{{ $job->employer->logo }}" alt="{{ $job->employer->name }}" />
    </div>
</x-card>
