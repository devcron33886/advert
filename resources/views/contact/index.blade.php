<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact us - {{ config('app.name', 'Laravel') }}</title>
    <meta
        description="Akazi kose company that is located in Kigali Rwanda. It helps in finding jobs,tenders,consultancy,training and internships.">
    <meta
        keywords="Conact us,Rwanda,Kigali,akazi kose,jobs,job,online job,online jobs,jobs online,consultancy,training,training online,internships,contact us,contact,support">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=be-vietnam-pro:400,500,600,700" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
    <div class="relative isolate bg-gray-100">
        <x-menu-component />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid  grid-cols-1 lg:grid-cols-2">

                <div class="relative px-6 pb-20 pt-10 sm:pt-12 lg:static lg:px-8 lg:py-20">
                    <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                        <div
                            class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-blue-100 ring-1 ring-blue-900/10 lg:w-1/2">
                            <svg class="absolute inset-0 h-full w-full stroke-blue-400 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                                aria-hidden="true">
                                <defs>
                                    <pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200"
                                        x="100%" y="-1" patternUnits="userSpaceOnUse">
                                        <path d="M130 200V.5M.5 .5H200" fill="none" />
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" stroke-width="0" fill="white" />
                                <svg x="100%" y="-1" class="overflow-visible fill-blue-50">
                                    <path d="M-470.5 0h201v201h-201Z" stroke-width="0" />
                                </svg>
                                <rect width="100%" height="100%" stroke-width="0"
                                    fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900">Get in touch</h2>
                        <p class="mt-6 text-lg leading-8 text-gray-900">We are here to help you our team is ready to
                            handle all your inqueries and help you. We would be happy to hear from you. Plus it is free
                            of charge.</p>
                        <dl class="mt-10 space-y-4 text-base leading-7 text-gray-900">
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Address</span>
                                    <svg class="h-7 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                    </svg>
                                </dt>
                                <dd>{{ $settings->address }}</dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Telephone</span>
                                    <svg class="h-7 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </dt>
                                <dd><a class="hover:text-gray-900"
                                        href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></dd>
                            </div>
                            <div class="flex gap-x-4">
                                <dt class="flex-none">
                                    <span class="sr-only">Email</span>
                                    <svg class="h-7 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </dt>
                                <dd><a class="hover:text-gray-900"
                                        href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <form action="{{ route('contact.store') }}" method="POST"
                    class="px-6 pb-12 pt-12 sm:pb-32 lg:px-8 lg:py-20">
                    @csrf
                    @if (session()->has('success'))
                        <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">

                            <div class="rounded-md bg-green-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-green-800">Your message is well received
                                        </h3>
                                        <div class="mt-2 text-sm text-green-700">
                                            <p>Thank you.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg mt-16">
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <label for="email"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                                <div class="mt-2.5">
                                    <x-text-input id="email" class="block mt-1 w-full" type="email"
                                        name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phone"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Phone
                                    number</label>
                                <div class="mt-2.5">
                                    <input type="text" name="phone" id="phone" :value="old('phone')"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message"
                                    class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4"
                                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                        {{ old('message') }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-end">
                            <button type="submit"
                                class="rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Send
                                message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <x-footer-component />

</body>

</html>
