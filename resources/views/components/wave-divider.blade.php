@props(['orientation' => 'down'])

<div
    class="w-full"
    @if ($orientation === 'up')
        style="height: 27px; background: url('/images/wave_up.png');"
    @else
        style="height: 34px; background: url('/images/wave_transparent.png');"
    @endif
></div>
