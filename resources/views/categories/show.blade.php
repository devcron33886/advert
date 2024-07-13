<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home-{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900">
        <x-menu-component />
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-1/2">
                    <livewire:search />
                </div>
                <div class="py-6 w-full max-w-screen-xl mx-auto">
                    <div class="overflow-hidden rounded-md border border-blue-500 bg-blue-500 p-1">
                        <ul class="flex items-center gap-2 text-sm font-medium">
                            @foreach ($categories as $category)
                                <li class="py-1 px-1">
                                    <a href="{{ route('category.show', $category->slug) }}"
                                        class="inline-flex text-blue-400 bg-gray-100 cursor-pointer items-center gap-2 rounded-lg px-3 py-2 hover:bg-white hover:text-black hover:shadow"
                                        wire:navigate>
                                        {{ $category->name }} <span
                                            class="rounded-full bg-green-300 px-2 py-0.5 text-xs font-semibold ">
                                            {{ $category->adverts->count() }}
                                        </span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @foreach ($adverts as $advert)
                        <div class="mt-4">
                             <a href="{{ route('adverts.show', $advert->slug) }}" target="__blank" class="flex items-center bg-white p-4 rounded-lg shadow-none border border-blue-500">
                            <div class="mr-4">
                               
                                <img src="/storage/{{ $advert->institution->logo }}" alt="{{ $advert->institution->name}}" class="w-full h-20 object-cover">
                                
                            </div>
                            <div>
                                <h5 class="mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white">
                                    {{ $advert->title ?? '-' }}</h5>
                                <blockquote class="text-md sm:text-sm text-gray-900 hidden md:block">
                                        {{ $advert->institution->name ?? '-' }}| Location: {{ $advert->location ?? '-' }}|
                                        Published on: {{ $advert->formatted_date ?? '-' }}| Deadline:
                                            {{ $advert->formatted_deadline ?? '-' }}| Experience:
                                            {{ $advert->desired_experience ?? 'Not specified' }}  
                                </blockquote>
                                <div class="mt-2 text-gray-600">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-semibold text-white bg-blue-500 rounded">{{ $advert->category->name }}</span>
                                </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-footer-component />
</body>

</html>
