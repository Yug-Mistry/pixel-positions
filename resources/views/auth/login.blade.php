<x-layout>
    <x-page-header>
        Login
    </x-page-header>
    <x-forms.form method="POST" action="{{ route('login') }}">
        <x-forms.input name="email" label="Email" type="email" />
        <x-forms.input name="password" label="Password" type="password" />
        <div class="flex items-center justify-between">
            <x-forms.button>
                Log In
            </x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
