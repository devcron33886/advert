@foreach ($adverts as $advert)
    <div class="mt-16 space-y-6 lg:mt-20 lg:space-y-20">
        <article class="relative isolate flex flex-col gap-4 lg:flex-row ">
            <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                    alt="{{ $advert->title }}" class="absolute inset-0 h-full w-full rounded-md bg-gray-50 object-cover">

            </div>
            <div>

                <div class="group relative max-w-xl">
                    <h3 class="mt-3 text-lg font-medium leading-6 text-gray-900 group-hover:text-gray-600">
                        <a href="{{ route('adverts.show', $advert->slug) }}">
                            <span class="absolute inset-0"></span>
                            {{ $advert->title }}
                        </a>
                    </h3>
                    <p class="mt-5 text-sm leading-6 text-gray-600">{!! Str::limit($advert->body, 150) !!}</p>

                </div>
                <div class="mt-6 flex flex-col sm:flex-row border-t border-blue-600 pt-6">
                    <div class="sm:mr-4">
                        <p
                            class="flex items-center relative z-10 rounded-md bg-blue-800 px-3 py-1.5 font-sm text-sm text-white hover:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $advert->institution->name }}
                        </p>
                    </div>

                    <div class="sm:mr-4 mt-4 sm:mt-0">
                        <p
                            class="flex items-center relative z-10 rounded-md bg-green-800 px-3 py-1.5 font-sm text-sm text-white hover:bg-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                            {{ $advert->formatted_date }}
                        </p>
                    </div>

                    <div class="mt-4 sm:mt-0">
                        <p
                            class="flex items-center relative z-10 rounded-md bg-red-800 px-3 py-1.5 font-sm text-sm text-white hover:bg-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            {{ $advert->formatted_deadline }}
                        </p>
                    </div>
                </div>

            </div>
        </article>
    </div>
    <hr class="mt-5 my-8 h-px border-0 bg-blue-600" />
@endforeach
