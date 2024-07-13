<div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
    <div class="flex items-center px-6 py-4 md:mx-auto lg:mx-0 lg:max-w-none xl:px-0">
        <div class="w-full">
            <label for="search" class="sr-only">Search</label>
            <div class="relative " x-data="{
                searchJobs(event) {
                    document.getElementById('searchInput').focus();
                    event.preventDefault();
                }
            
            }">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model.live="search" id="searchInput" @keydown.slash.window="searchJobs"
                    class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-blue-900 ring-1 ring-inset ring-blue-500 placeholder:text-blue-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6"
                    placeholder="Start typing" type="search" autocomplete="off">
                <div class="absolute mt-2 w-full overflow-hidden">

                    <ul role="list"
                        class="divide-y divide-gray-100 overflow-hidden bg-white shadow-sm ring-1 ring-blue-600 sm:rounded-xl">
                        @foreach ($results as $result)
                            <li class="relative flex justify-between gap-x-6 px-4 py-5 bg-blue-600 sm:px-6">
                                <div class="flex gap-x-4">
                                    <img class="h-12 w-12 flex-none rounded-full bg-blue-600"
                                        src="/storage/{{ $result->institution->logo }}" alt="">
                                    <div class="min-w-0 flex-auto">
                                        <p class="text-sm font-semibold leading-6 text-white">
                                            <a href="{{ route('adverts.show', $result->slug) }}">
                                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                                {{ $result->title }}
                                            </a>
                                        </p>
                                        <p class="mt-1 flex text-xs leading-5 text-white">
                                            <a href="mailto:{{ $result->institution->email }}"
                                                class="relative truncate hover:underline">{{ $result->institution->email }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                        <p class="text-sm leading-6 text-white"> {{ $result->institution->name }}</p>
                                    </div>
                                    <svg class="h-5 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
