<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Faqs - {{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Here is the list of all questions and answes you may ask yourself nad thier answers about Akazi kose company that is located in Kigali Rwanda">
    <meta name="keywords"
        content="Faqs,faq,help,ubufasha,questions,answers,adverts,jobs,tender,consultancy,internships,internship,job,Kigali, Rwanda">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <x-menu-component />

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="container mx-auto flex flex-wrap py-6">

                    <!-- Posts Section -->
                    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
                        <h1 class="py-4 text-pretty text-left font-bold text-3xl">
                            Top questions and answers below form our beloved customers and partners
                        </h1>

                        @foreach ($faqs as $faq)
                            <div class="mt-2">

                                <div class="block max-w-sm p-6 bg-white border border-blue-600 rounded-lg md:max-w-4xl">

                                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                        {{ $faq->title }}</h5>
                                    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $faq->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </section>

                    <!-- Sidebar Section -->
                    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-md font-semibold uppercase pb-5">
                                Subscribe to our Newsletter
                            </p>
                            @if (session()->has('success'))
                                <div class="space-x-6">

                                    <div class="rounded-md bg-green-50 p-4">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <h3 class="text-sm font-medium text-green-800">You have subscribed to
                                                    our newsletter
                                                </h3>
                                                <div class="mt-2 text-sm text-green-700">
                                                    <p>Thank you.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('subscriber') }}" method="POST" autocomplete="off">
                                @csrf
                                <div>
                                    <x-input-label class="required" for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="off" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label class="required" for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="off" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="flex items-center justify-end mt-4">


                                    <x-primary-button class="ms-3">
                                        {{ __('Subscribe') }}
                                    </x-primary-button>
                                </div>
                            </form>

                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <x-footer-component />
</body>

</html>
