<x-layout>
    <x-page-header>
        Results
    </x-page-header>
    @if($jobs->isEmpty())
        <p class="text-center mt-8 text-2xl">No jobs found</p>
    @endif
    <div class="mt-2 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
