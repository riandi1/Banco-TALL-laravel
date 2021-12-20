<div class="px-4 py-8 sm:px-10">
    {{-- paso 1 --}}
    @if ($steps == 1)
        @if (session()->has('message'))
            <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300">
                <div
                    class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                    <span class="text-red-500">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
                <div class="alert-content ml-4">
                    <div class="alert-title font-semibold text-lg text-red-800">
                        Ups parece que algo salio mal.
                    </div>
                    <div class="alert-description text-sm text-red-600">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="relative ">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300">
                </div>
            </div>
            <div class="relative flex justify-center text-sm leading-5">
                <span class="px-2 text-gray-500 bg-white">
                    Transaccion
                </span>
            </div>
        </div>
        <div class="mt-6">
            <div class="w-full space-y-6">
                <div class="w-full">
                    <div class=" relative ">
                        <input autocomplete="off" type="number" wire:model="sald" id="search-form-price"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-700 focus:border-transparent"
                            placeholder="Valor a enviar" />
                        @error('sald') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="w-full">
                    <div class=" relative ">
                        <input autocomplete="off" type="text" wire:model="card" id="search-form-location"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-700 focus:border-transparent"
                            placeholder="Numero de tarjeta a enviar" />
                        @error('card') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="w-full">
                    <div class=" relative ">
                        <input autocomplete="off" type="text" wire:model="card_confirmation" id="search-form-name"
                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-700 focus:border-transparent"
                            placeholder="Confirmar Tarjeta" />
                        @error('card_confirmation') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <span class="block w-full rounded-md shadow-sm">
                        <x-button wire:click="crement()" class="w-full">
                            Enviar
                        </x-button>
                    </span>
                </div>
            </div>
        </div>
    @endif
    {{-- paso 2 Verificacion --}}
    @if ($steps == 2)
        @foreach ($usersent as $card)
            <div class="flex items-center justify-center">
                <div class="cursor-pointer rounded-md shadow-lg bg-white dark:bg-gray-800 relative">
                    <div class="py-2">
                        <h2 class="text-center">¿Estas seguro?</h2>
                        <div class="px-6">
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tarjeta</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                {{ $card->number }}
                            </p>
                        </div>
                        <div class="mt-5 px-6">
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Receptor</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                {{ $this->card }}</p>
                        </div>
                        <div class="mt-5 px-6">
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Dia</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                {{ Carbon\Carbon::now()->format('Y-m-d H:m') }}</p>
                        </div>
                        <div class="mt-5 px-6 flex items-center w-full">
                            <div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Monto</p>
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                    {{ $sald }}</p>
                            </div>
                        </div>
                        {{-- <div class="mt-5 px-6 flex items-center text-gray-700 dark:text-gray-400">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ticket_with_barcode-svg1.svg"
                                alt="icon" />
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ticket_with_barcode-svg1dark.svg"
                                alt="icon" />

                            <p tabindex="0"
                                class="focus:outline-none ml-2 text-xs leading-3 text-gray-600 dark:text-gray-400">
                                Veevents.com/cosutmeparty</p>
                            <p></p>
                            <img class="focus:outline-none ml-3.5 cursor-pointer "
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/ticket_with_barcode-svg2.svg"
                                alt="icon" />


                        </div> --}}
                        <div class="pt-6 flex justify-between relative items-center w-full">
                            <div class="w-3 h-5 dark:bg-gray-400 rounded-r-3xl"></div>
                            <div class="w-full border-b-2 border-dashed border-gray-100 dark:border-gray-400">
                            </div>
                            <div class="w-3 h-5 dark:bg-gray-400 rounded-l-3xl"></div>
                        </div>
                        <div class="mt-4 px-6 flex flex-col w-full justify-center items-center">
                            <img tabindex="0" class="focus:outline-none"
                                src="https://cdn.tuk.dev/assets/templates/virtual-event-management/barCode.png"
                                alt="barcode" />
                            <p tabindex="0"
                                class="focus:outline-none text-sm font-bold leading-none text-gray-700 dark:text-gray-400 mt-2">
                                253704938890287467</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center mt-2">
                <x-button-gray wire:click="decrement()">
                    atras
                </x-button-gray>
                <x-button class="ml-3" wire:click="$emit('modal',{{ $card->id }})">
                    Enviar
                </x-button>
            </div>
        @endforeach
    @endif
</div>
@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('modal', cardid => {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    cancelButton: 'px-4 mr-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition',
                    confirmButton: 'px-4 py-2 bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-200 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: '¿Esta seguro?',
                text: "Una vez enviado no podra redimir el dinero",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                        Livewire.emitTo('transacctionlivewire', 'transfer',);
                    swalWithBootstrapButtons.fire(
                        'Enviado!',
                        'El dinero se ha enviado a la tarjeta con exito :).',
                        'success'
                    )

                    Livewire.emitTo('transacctionlivewire', 'redi',);
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        });
    </script>
@endpush
