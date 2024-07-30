<x-layout>
    <x-page-header>
        Create a Job
    </x-page-header>
    <x-forms.form method="POST" action="{{ url('/jobs') }}">
        <x-forms.input name="title" label="Title" placeholder="Software Engineer" />
        <x-forms.select name="type" label="Type">
            <option value="Remote" selected class=" bg-black ">Remote</option>
            <option value="On Site" class=" bg-black ">On Site</option>
        </x-forms.select>
    
        <x-forms.input name="location" label="Location" placeholder="New York, NY" />
        <x-forms.select name="schedule" label="Schedule">
            <option value="Full Time" selected class=" bg-black ">Full Time</option>
            <option value="Part Time" class=" bg-black ">Part Time</option>
        </x-forms.select>
        <x-forms.input name="salary" label="Salary" placeholder="$100,000" />
        <x-forms.input name="company" label="Company" placeholder="Google" />
        <x-forms.select name="tags[]" label="Tags" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </x-forms.select>
        <x-forms.divider />
        <x-forms.checkbox name="featured" label="Is Featured?" />
        <div class="flex items center justify-between">
            <x-forms.button>
                Create Job
            </x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
