@props([
    'type' => 'light',
    'space' => 'mb-6'
])

<div class="my-0 mx-auto {{ $space }} w-8 h-2" style="background: url('/images/sprite.png') {{ $type === 'dark' ? '0 -17px;' : '0 -6px;' }}"></div>
