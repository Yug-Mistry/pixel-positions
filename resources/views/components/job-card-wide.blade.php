@props([
    'companyName',
    'jobTitle',
    'duration',
    'salary',
    'tags',
    'companyLogo',
])
<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 items-center">
    <div >
        <x-employer-logo src="{{ $companyLogo }}" alt="{{ $companyName }}" />
    </div>
    <div class="flex-1 flex flex-col mx-2">
        <div class="flex justify-between text-xs">
            <div class=" text-gray-400">{{ $companyName }} </div>
            <div class=" font-bold flex gap-1">
                <div class="border border-gray-400 rounded-xl px-2 py-1">Remote</div>
                <div class="border border-gray-400 rounded-xl px-2 py-1">22h</div>

            </div>
        </div>
        <div class="font-bold text-xl my-4">
            <h3>{{ $jobTitle }}</h3>
        </div>
        <div class="flex justify-between">
            <div>
                <p>{{ $duration . ' - ' . $salary }}</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex gap-2 ">
                    @foreach ($tags as $tag)
                    <x-tag>{{ $tag }}</x-tag>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
