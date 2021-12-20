<div class="container mx-auto px-4 sm:px-8 w-full">
    <div class="py-3">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            <h2 class="text-2xl leading-tight">
                Historial de Transacciones
            </h2>
            <div class="text-end">
                <x-button wire:click="enviados()">
                    Enviados
                </x-button>
                <x-button-gray  wire:click="recibidos()">
                    Recibidos
                </x-button-gray>
            </div>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5"
                                class="text-center px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-sm uppercase font-normal">
                                Todas Las Transacciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transf as $totalTran)
                            <tr class="text-center">
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $totalTran->number }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $totalTran->created_at }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $totalTran->mont }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    @if ($totalTran->card_sent == $id2)
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                            <span aria-hidden="true"
                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full">
                                            </span>
                                            <span class="relative">
                                                Enviado
                                            </span>
                                        </span>
                                    @else
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden="true"
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                            </span>
                                            <span class="relative">
                                                Recibido
                                            </span>
                                        </span>
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-blue-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-blue-200 opacity-50 rounded-full">
                                        </span>
                                        <span class="relative">
                                            Factura
                                        </span>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                    <div class="flex items-center">
                        {{ $transf->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
