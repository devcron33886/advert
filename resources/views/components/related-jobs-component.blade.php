<li class="flex items-center justify-between gap-x-6 py-5">
    <div class="min-w-0">
        @foreach ($relatedAdverts as $advert)
            <div class="flex items-start gap-x-3 mt-5">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                    src="/storage/{{ $advert->institution->logo ?? '-' }}" alt="">
                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $advert->institution->name ?? '-' }}</p>
                <p
                    class="rounded-md whitespace-nowrap mt-0.5 px-1.5 py-0.5 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">
                    {{ $advert->category->name ?? '-' }}</p>
            </div>
            <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                <p class="whitespace-nowrap">Deadline on
                    <time
                        datetime="{{ $advert->formatted_deadline ?? '-' }}">{{ $advert->formatted_deadline ?? '-' }}</time>
                </p>.
                <p class="truncate"> {{ $advert->institution->name ?? '-' }}</p>
            </div>
        @endforeach

    </div>
</li>
