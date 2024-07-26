<x-layout>
    <div class="space-y-6">
        <section class="flex flex-col justify-center text-center">
            <h1 class="text-4xl font-bold">Let's find your dream job</h1>
            <form action="" class="mt-6 relative max-w-4xl w-full mx-auto">
                <input type="text" placeholder="Search for jobs"
                    class="w-full py-4 px-5 rounded-xl bg-white/5 border-white/10 pr-16">
                <x-square class="absolute top-1/2 right-4 transform -translate-y-1/2" color="white" />
            </form>
        </section>
        <section>
            <x-section-header>
                Feaured Jobs
            </x-section-header>
            <div class="mt-2 grid md:grid-cols-3 gap-8 mx-auto">
                @foreach ( $featuredJobs as $job )
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-header>
                Tags
            </x-section-header>
            <div class="mt-2 flex flex-wrap gap-2">
                @foreach ( $tags as $tag )
                    <x-tag href="/tags/{{ $tag->name }}">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </section>
        <section>
            <x-section-header>
                Recent Jobs
            </x-section-header>
            <div class="mt-2 space-y-6">
                @foreach ( $jobs as $job )
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
