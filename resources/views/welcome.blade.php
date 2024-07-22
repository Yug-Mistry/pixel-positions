<x-layout>
    <div class="space-y-1">

        <section>
            <x-section-header>
            Feaured Jobs
        </x-section-header>
        <div class="mt-6 grid md:grid-cols-3 gap-8 mx-auto">
            <x-job-card companyName="Company 1" jobTitle="Job Title 1" duration="Full-time" salary="1000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="http://placehold.it/42/42" />
            <x-job-card companyName="Company 2" jobTitle="Job Title 2" duration="Part-time" salary="2000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="http://placehold.it/42/42" />
            <x-job-card companyName="Company 3" jobTitle="Job Title 3" duration="Full-time" salary="3000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="http://placehold.it/42/42" />
        </div>
    </section>
    <section>
        <x-section-header>
            Tags
        </x-section-header>
        <div class="mt-6 flex flex-wrap gap-2">
            <x-tag size="base">Frontend</x-tag>
            <x-tag size="base">Backend</x-tag>
            <x-tag size="base">Fullstack</x-tag>
            <x-tag size="base">DevOps</x-tag>
            <x-tag size="base">Frontend</x-tag>
            <x-tag size="base">Backend</x-tag>
            <x-tag size="base">Fullstack</x-tag>
            <x-tag size="base">DevOps</x-tag>
            <x-tag size="base">DevOps</x-tag>
            <x-tag size="base">Frontend</x-tag>
            <x-tag size="base">Backend</x-tag>
            <x-tag size="base">Fullstack</x-tag>
            <x-tag size="base">DevOps</x-tag>
            <x-tag size="base">Frontend</x-tag>
            <x-tag size="base">Backend</x-tag>
            <x-tag size="base">Fullstack</x-tag>
            <x-tag size="base">DevOps</x-tag>
            <x-tag size="base">Frontend</x-tag>
            <x-tag size="base">Backend</x-tag>
            <x-tag size="base">Fullstack</x-tag>
        </div>
    </section>
    <section>
        <x-section-header>
            Recent Jobs
        </x-section-header>
        <div class="mt-6 space-y-6">
            <x-job-card-wide companyName="Company 1" jobTitle="Job Title 1" duration="Full-time" salary="1000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="https://picsum.photos/90/90" />
            <x-job-card-wide companyName="Company 2" jobTitle="Job Title 2" duration="Part-time" salary="2000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="https://picsum.photos/90/90" />
            <x-job-card-wide companyName="Company 3" jobTitle="Job Title 3" duration="Full-time" salary="3000" :tags="['tag1', 'tag2', 'tag3']" companyLogo="https://picsum.photos/90/90" />
        </div>
    </section>
</div>
</x-layout>
