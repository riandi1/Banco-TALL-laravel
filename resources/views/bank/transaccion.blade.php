<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative  h-10 w-10">
                <div class="absolute left-0 top-0 h-16 w-16 ...">
                    <x-button>
                        Volver
                    </x-button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                @livewire('transacctionlivewire', ['user' => $id])
            </div>
        </div>
    </div>
</x-app-layout>
