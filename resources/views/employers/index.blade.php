<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employers - {{ config('app.name', 'Laravel') }}</title>
    <meta
        description="Akazi kose company that is located in Kigali Rwanda. It helps in finding jobs,tenders,consultancy,training and internships.">
    <meta
        keywords="Employers,RRA,Rwanda Revenue Authority,Employment,Rwanda,Kigali,akazi kose,jobs,job,online job,online jobs,jobs online,consultancy,training,training online,internships">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css'])

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <x-menu-component />

        <div class="py-24">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <div role="list" class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
                    @foreach ($institutions as $institution)
                        <a href="{{ route('employers.show', $institution->slug) }}" class="flex flex-col items-center bg-white border border-blue-600 rounded-lg shadow md:flex-row md:max-w-xl">
                           
                            <img class="object-cover w-full rounded-t-lg h-86 md:h-auto md:w-40 md:rounded-none md:rounded-l-lg" src="/storage/{{ $institution->logo }}" alt="{{ $institution->name }}">
                            
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{ $institution->name }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
                {{ $institutions->links() }}
            </div>
        </div>
    </div>
    <x-footer-component />

</body>

</html>
