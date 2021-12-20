<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Title ======-->
    <title>Riandi code | Bank Jet</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <style>
        /* Variables */
        :root {
            --white: #fafafa;
            --violet: #e2d8fd;
            --dark-blue: #16044a;
            --gray1: #e1e1e1;
            --gray2: #6a6a6a;
        }

        .scene {
            width: 90%;
            max-width: 35rem;
            height: 20rem;
            margin: 0 auto;
            perspective: 600px;
        }

        .card {
            width: 100%;
            height: 100%;
            position: relative;
            transition: transform 1s;
            transform-style: preserve-3d;
            margin: 0 auto;
            border-radius: 20px;
            box-shadow: -15px 20px 20px rgba(22, 4, 74, 0.15);
            background: #16044a;
            ;
        }

        .card:hover {
            cursor: pointer;
        }

        .card__front,
        .card__back {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            transform-style: preserve-3d;
        }

        .card__front {
            padding: 0 2rem;
        }

        .card__logo {
            width: 7rem;
            height: 7rem;
            margin-top: 1rem;
        }

        .card__number {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .number-group,
        .card__holder__name,
        .card__expiration__date {
            font-family: "Courier New", Courier, monospace;
            font-size: 2.3rem;
            text-shadow: 0 1.2px var(--gray2);
            color: var(--white);
            letter-spacing: 1px;
        }

        .card__details {
            display: flex;
            justify-content: space-between;
        }

        .card__holder,
        .card__expiration {
            display: flex;
            flex-direction: column;
        }

        .card__holder__title,
        .card__expiration__title {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: var(--white);
            opacity: 0.7;
            font-size: 1.3rem;
            margin-bottom: 0.1rem;
        }

        .card__holder__name,
        .card__expiration__date {
            text-transform: uppercase;
            font-size: 1.8rem;
        }

        /* Card back */
        .card__back {
            padding-top: 4rem;
            transform: rotateY(180deg);
        }

        .card.is-flipped {
            transform: rotateY(180deg);
        }

        .card__stripe {
            height: 4rem;
            background: var(--gray1);
        }

        .card__signature {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 4.5rem;
            background: var(--white);
            margin: 2rem 6rem 0 2rem;
            padding-right: 1rem;
        }

        .card__cvv,
        .card__cvv-number,
        .card__info {
            font-family: "Open Sans", sans-serif;
            font-weight: 600;
        }

        .card__cvv,
        .card__cvv-number {
            color: #16044a;
            ;
        }

        .card__cvv {
            margin-right: 0.5rem;
        }

        .card__info {
            font-size: 0.7rem;
            padding: 1.5rem 2rem;
            color: var(--white);
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    
    @stack('modals')
    

    @livewireScripts
    @stack('js')
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
</body>

</html>
