<x-layout>
    <x-page-header>
        Register
    </x-page-header>
    <x-forms.form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        <x-forms.input name="name" label="Name" />
        <x-forms.input name="email" label="Email" type="email"/>
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password" />

        <x-forms.divider  />

        <x-forms.input name="employer_name" label="Employer Name" />
        <x-forms.input name="logo" label="Employer Logo" type="file" />

        <div class="flex items-center justify-between">
            <x-forms.button>
                Create Account
            </x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
