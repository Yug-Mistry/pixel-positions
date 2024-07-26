@props([
    'job',
])
<x-card class="flex gap-x-6 items-center ">
    <div>
        <x-employer-logo src="{{ $job->employer->logo }}" alt="{{ $job->employer->name }}" />
    </div>
    <div class="flex-1 flex flex-col mx-2">
        <div class="flex justify-between text-xs">
            <div class=" text-gray-400">{{ $job->employer->name }}</div>
            <div class=" font-bold flex gap-1">
                <div class="border border-gray-400 rounded-xl px-2 py-1">{{ $job->location }}</div>
                <div class="border border-gray-400 rounded-xl px-2 py-1">
                    {{ $job->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
        <div class="font-bold text-xl mt-1">
            <p class="group-hover:text-blue-600 text-xl font-bold group transition-colors duration-300">
                {{ $job->title }}</p>
        </div>
        <div class="flex justify-between mt-5">
            <div>
                <p class="text-sm text-gray-400">{{ $job->salary }}</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex gap-2 ">
                    @foreach ($job->tags as $tag)
                        <x-tag>{{ $tag->name }}</x-tag>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-card>
