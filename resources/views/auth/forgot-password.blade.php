<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 mt-4 text-sm text-gray-600">
            {{ __('¿Olvidaste la contraseña? Para poder recuperar la contraseña de la cuenta
            deberas dirigirte al banco mas cerca de tu distrito y te daran una nueva. :)') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        {{-- <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form> --}}
        <x-button onclick="location.href ='{{ route('login')}}'">
                    {{ __('Volver Atras') }}
        </x-button>
    </x-authentication-card>
</x-guest-layout>
