<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $advert->title }} - {{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $advert->body }}">
    <meta name="keywords"
        content="{{ $advert->category->name }}, {{ $advert->education_level }}, {{ $advert->location }}, {{ $advert->title }},{{ $advert->sector }}">

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

                        <article class="flex flex-col shadow-sm my-4">
                            <div class="bg-white flex flex-col rounded-md justify-start p-6">

                                <h1 class="py-4 text-pretty text-left font-bold text-2xl">{{ $advert->title ?? '-' }}
                                </h1>
                                <p class="pb-6">{!! $advert->body !!}</p>

                            </div>
                        </article>
                    </section>

                    <!-- Sidebar Section -->
                    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-xl font-semibold capitalize pb-5">
                                {{ $advert->category->name ?? '-' }} Summary
                            </p>
                            <div class="overflow-hidden rounded-md bg-white shadow">
                                <ul role="list" class="divide-y divide-gray-200">
                                    <li class="px-6 py-4">
                                        Location: {{ $advert->location ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Sector: {{ $advert->sector ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Education level: {{ $advert->eductaion_level ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Experience: {{ $advert->desired_experience ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Email: {{ $advert->institution->email ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Contract Type: {{ $advert->contract_type ?? '-' }}
                                    </li>
                                    <li class="px-6 py-4">
                                        Available positions: {{ $advert->number_of_positions ?? '-' }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="w-full bg-white shadow-sm rounded-md flex flex-col my-4 p-6">
                            <p class="text-xl font-semibold pb-5 capitalize">
                                Related {{ $advert->category->name ?? '-' }}
                            </p>
                            <ul role="list" class="divide-y divide-gray-100">

                                <x-related-jobs-component :advertId="$advert->category_id" />

                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <x-footer-component />
</body>

</html>
