<div
    id="bg-image-slider"
    x-data="{
        images: [
            '/images/fade_1.png',
            '/images/fade_2.png',
            '/images/fade_3.png'
        ],
        index: 0,
        current: '/images/fade_1.png',
    }"
    x-init="
        setInterval(function () {
            index === 2 ? index = 0 : index++;
    }, 5000);"
    :style="`background-image: url('${images[index]}')`"
    class="transition-all bg-cover duration-1000 ease-linear md:pt-10  xl:pt-0"
>
    {{ $slot }}
</div>

{{-- @push('scripts')
<script>
    var images = [
        '/images/fade_1.png',
        '/images/fade_2.png',
        '/images/fade_3.png'
    ];
    var index = 0;
    setInterval(function () {
        index++;
        index = index === 3 ? 0 : index;
        document.getElementById('bg-image-slider').style.backgroundImage = "url("+images[index]+")";
    }, 5000);
</script>
@endpush --}}
