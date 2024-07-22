@props([
    'companyName',
    'jobTitle',
    'duration',
    'salary',
    'tags',
    'companyLogo',
])
<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center">
    <div class="self-start text-sm">
        {{ $companyName }}
    </div>
    <div class="py-8 font-bold">
        <h4>{{ $jobTitle }}</h4>
        <p>{{ $duration . ' - ' . $salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex gap-2 ">
            @foreach ($tags as $tag)
                <x-tag size="3xs">{{ $tag }}</x-tag>
            @endforeach
        </div>
        <x-employer-logo src="{{ $companyLogo }}" alt="{{ $companyName }}" />
    </div>
</div>
