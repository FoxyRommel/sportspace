<a href="{{ filter_url(null, ['filters[brands][' . $item->id . ']' => $item->id]) }}" class="p-6 rounded-xl bg-card hover:bg-card/60">
    <div class="h-75 md:h-10">
        <img src="{{ $item->thumbnail }}" class="object-contain w-full h-full" alt="{{ $item->title }}">
    </div>
    <div class="mt-8 text-xs sm:text-sm lg:text-md font-semibold text-center">{{ $item->title }}</div>
</a>
