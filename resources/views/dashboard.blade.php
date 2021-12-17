<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="text-center text-4xl mb-4"> @if (count($creditcards)>1) Tarjetas @else Tarjeta @endif de Credito</h2>
                @foreach ($creditcards as $card)
                    <div class="scene">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card front -->
                            <div class="card__front">
                                <img src="{{ asset('assets/images/visa-logo.svg') }}" class="card__logo" />
                                <div class="card__number number">
                                    <div class="number-group number-group--0">{{$array[0]}}</div>
                                    <div class="number-group number-group--1">{{$array[1]}}</div>
                                    <div class="number-group number-group--2">{{$array[2]}}</div>
                                    <div class="number-group number-group--3">{{$array[3]}}</div>
                                </div>
                                <div class="card__details">
                                    <div class="card__holder">
                                        <span class="card__holder__title">Dueño de la Tarjeta</span>
                                        <span class="card__holder__name">{{ $card->user->name }}</span>
                                    </div>
                                    <div class="card__expiration">
                                        <span class="card__expiration__title">Expira</span>
                                        <span class="card__expiration__date">{{$fecha}}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card back -->
                            <div class="card__back">
                                <div class="card__stripe"></div>
                                <div class="card__signature">
                                    <span class="card__cvv">CVV</span>
                                    <span class="card__cvv-number">{{$card->cvv}}</span>
                                </div>
                                <p class="card__info">
                                    Uso de esta tarjeta para comprar bienes y servicios siempre que vea
                                    el símbolo VISA. Su uso de esta tarjeta es la aceptación de su
                                    los arreglos del emisor, incluidas las enmiendas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-4">
                        <x-button onclick="location.href ='{{ route('banco.inicio',$card->id)}}'">
                            Ingresar
                        </x-button>
                    </div>   
                @endforeach
            </div>
        </div>
    </div>
    <script>
        const card = document.querySelector(".card");
        card.addEventListener("click", () => {
            card.classList.toggle("is-flipped");
        });
    </script>
</x-app-layout>
