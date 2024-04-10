@props([
    'icon',
    'href',
])

<a class="text-aqua text-center group flex flex-col justify-center" href="{{ $href }}" target="_blank">
    <span class="flex w-full justify-center items-center">
        @if ($icon === 'location-pin')
            <x-icons.location-pin class="w-8 h-8 text-aqua mr-1" />
        @elseif ($icon === 'phone')
            <x-icons.phone class="w-8 h-8 text-aqua mr-1" />
        @elseif ($icon === 'facebook')
            <x-icons.facebook class="w-8 h-8 text-aqua mr-2" />
        @elseif ($icon === 'instagram')
            <x-icons.instagram class="text-aqua mr-2 w-10 h-10" />
        @endif
    </span>
    <span class="inline-block md:border-b-2 md:border-transparent group-hover:border-aqua-light {{ $icon === 'instagram' ? 'mt-3' : 'mt-5' }}">{{ $slot }}</span>
</a>
