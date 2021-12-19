<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-4 overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font pb-5">
                    <div class="container px-5  mx-auto">
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <a href="{{route('banco.transaccion',$id)}}">
                                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                                        </svg>
                                        <h2 class="title-font font-medium text-2xl text-gray-900">NUEVA TRANSACCION</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                                    <p class="leading-relaxed">Users</p>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                        <path
                                            d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
                                        </path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                                    <p class="leading-relaxed">Files</p>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    </svg>
                                    <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                                    <p class="leading-relaxed">Places</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- more --}}
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto flex flex-wrap ">
                        <div class="shadow-lg rounded-2xl w-full h-full p-4 bg-gray-900 w-64 m-auto relative">
                            <div class="w-full h-full text-center">
                                <div class="flex h-full flex-col justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="mt-4 w-20 h-20 m-auto text-white dark:text-white"
                                        viewBox="0 0 2048 1792">
                                        <path
                                            d="M1920 768q53 0 90.5 37.5t37.5 90.5-37.5 90.5-90.5 37.5h-15l-115 662q-8 46-44 76t-82 30h-1280q-46 0-82-30t-44-76l-115-662h-15q-53 0-90.5-37.5t-37.5-90.5 37.5-90.5 90.5-37.5h1792zm-1435 800q26-2 43.5-22.5t15.5-46.5l-32-416q-2-26-22.5-43.5t-46.5-15.5-43.5 22.5-15.5 46.5l32 416q2 25 20.5 42t43.5 17h5zm411-64v-416q0-26-19-45t-45-19-45 19-19 45v416q0 26 19 45t45 19 45-19 19-45zm384 0v-416q0-26-19-45t-45-19-45 19-19 45v416q0 26 19 45t45 19 45-19 19-45zm352 5l32-416q2-26-15.5-46.5t-43.5-22.5-46.5 15.5-22.5 43.5l-32 416q-2 26 15.5 46.5t43.5 22.5h5q25 0 43.5-17t20.5-42zm-1156-1217l-93 412h-132l101-441q19-88 89-143.5t160-55.5h167q0-26 19-45t45-19h384q26 0 45 19t19 45h167q90 0 160 55.5t89 143.5l101 441h-132l-93-412q-11-44-45.5-72t-79.5-28h-167q0 26-19 45t-45 19h-384q-26 0-45-19t-19-45h-167q-45 0-79.5 28t-45.5 72z">
                                        </path>
                                    </svg>
                                    <p class="absolute text-sm italic text-white top-2 right-2">
                                        {{ Carbon\Carbon::now() }}
                                    </p>
                                    <p class="text-white text-lg mt-4">
                                        SALDO TOTAL
                                    </p>
                                    <p class="text-white text-lg mt-4">
                                        $ 1'000.000 PESOS
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container mx-auto px-4 sm:px-8 ">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                        colspan="4"
                                            class="px-5 text-center py-3 bg-white  border-b border-gray-200 text-gray-800  text-sm uppercase font-normal">
                                            Ultimas Transacciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">                                       
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Admin
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                12/09/2020
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden="true"
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">
                                                    active
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                <div class="flex items-center">
                                    <button type="button"
                                        class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                        <svg width="9" fill="currentColor" height="8" class=""
                                            viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                        1
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                        2
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                        3
                                    </button>
                                    <button type="button"
                                        class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                        4
                                    </button>
                                    <button type="button"
                                        class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                        <svg width="9" fill="currentColor" height="8" class=""
                                            viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- table transacciones --}}
                {{-- <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                    <div class="py-8">
                        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                            <h2 class="text-2xl leading-tight">
                                Users
                            </h2>
                            <div class="text-end">
                                <form
                                    class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                                    <div class=" relative ">
                                        <input type="text" id="&quot;form-subscribe-Filter"
                                            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                            placeholder="name" />
                                    </div>
                                    <button
                                        class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                                        type="submit">
                                        Filter
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                User
                                            </th>
                                            <th scope="col"
                                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                Role
                                            </th>
                                            <th scope="col"
                                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                Created at
                                            </th>
                                            <th scope="col"
                                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                status
                                            </th>
                                            <th scope="col"
                                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="block relative">
                                                            <img alt="profil" src="/images/person/8.jpg"
                                                                class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                        </a>
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Jean marc
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Admin
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    12/09/2020
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden="true"
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        active
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="block relative">
                                                            <img alt="profil" src="/images/person/9.jpg"
                                                                class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                        </a>
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Marcus coco
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Designer
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    01/10/2012
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden="true"
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        active
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="block relative">
                                                            <img alt="profil" src="/images/person/10.jpg"
                                                                class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                        </a>
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Ecric marc
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Developer
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    02/10/2018
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden="true"
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        active
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <a href="#" class="block relative">
                                                            <img alt="profil" src="/images/person/6.jpg"
                                                                class="mx-auto object-cover rounded-full h-10 w-10 " />
                                                        </a>
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            Julien Huger
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    User
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    23/09/2010
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                    <span aria-hidden="true"
                                                        class="absolute inset-0 bg-green-200 opacity-50 rounded-full">
                                                    </span>
                                                    <span class="relative">
                                                        active
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div
                                    class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                                    <div class="flex items-center">
                                        <button type="button"
                                            class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                                            <svg width="9" fill="currentColor" height="8" class=""
                                                viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                            1
                                        </button>
                                        <button type="button"
                                            class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                            2
                                        </button>
                                        <button type="button"
                                            class="w-full px-4 py-2 border-t border-b text-base text-gray-600 bg-white hover:bg-gray-100">
                                            3
                                        </button>
                                        <button type="button"
                                            class="w-full px-4 py-2 border text-base text-gray-600 bg-white hover:bg-gray-100">
                                            4
                                        </button>
                                        <button type="button"
                                            class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                                            <svg width="9" fill="currentColor" height="8" class=""
                                                viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- recibo --}}
                {{-- <div class="flex items-center justify-center py-8">
                    <div class="cursor-pointer rounded-md shadow-lg bg-white dark:bg-gray-800 relative">
                        <div class="py-5">
                            <div class="px-6">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Event</p>
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                    New Year Costume Party</p>
                            </div>
                            <div class="mt-5 px-6">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Day</p>
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                    Tuesday, 9:00pm - 11:00pm</p>
                            </div>
                            <div class="mt-5 px-6">
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Date</p>
                                <p tabindex="0"
                                    class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                    14th September 2020</p>
                            </div>
                            <div class="mt-5 px-6 flex items-center w-full">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tickets Sold</p>
                                    <p tabindex="0"
                                        class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                        857</p>
                                </div>
                                <div class="ml-14">
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Revenue Earned</p>
                                    <p tabindex="0"
                                        class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-gray-100 mt-1">
                                        $7698</p>
                                </div>
                            </div>
                            <div class="mt-5 px-6 flex items-center text-gray-700 dark:text-gray-400">
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


                            </div>
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
                </div> --}}
                {{-- felicidades --}}
                {{-- <div class="max-w-sm rounded shadow bg-white dark:bg-gray-800">
                    <div class="flex">
                        <div class="px-6 py-5">
                            <p tabindex="0"
                                class="focus:outline-none text-base font-medium leading-none text-gray-800 dark:text-gray-100">
                                Congratulations 🎉 Bruce!</p>
                            <p tabindex="0"
                                class="focus:outline-none text-xs leading-3 text-gray-500 dark:text-gray-400 pt-2">You
                                have won gold medal</p>
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-semibold leading-tight text-indigo-700 dark:text-gray-100 sm:pt-6 pt-3">
                                $48.9k</p>
                            <div class="pt-4">
                                <button
                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 py-2 px-4 text-xs font-semibold leading-3 bg-indigo-700 rounded hover:bg-indigo-600 focus:outline-none text-white">View
                                    Sales</button>
                            </div>
                        </div>
                        <div class="px-3">
                            <img tabindex="0" class="focus:outline-none" src="https://i.ibb.co/34gPtCT/bg.png"
                                alt="medal" />
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
