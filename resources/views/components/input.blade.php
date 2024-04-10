@props([
    'type' => 'text',
    'theme' => 'dark',
    'wire',
    'placeholder',
    'options' => [] // for type="select"
])

@php
    $themes = [
        'dark' => 'bg-mercury text-chicago placeholder-tuatara',
        'light' => 'bg-aqua border-mercury text-mercury placeholder-mercury'
    ];
    $class = "px-4 py-2 border font-light block w-full md:py-3 md:text-2xl lg:text-base " . $themes[$theme];
    $class .= $errors->has($wire) ? ' border border-red ' : (
        $theme === 'dark' ? ' border-tuatara ' : ' border-mercury '
    );
@endphp

<div class="mb-4">
    @if ($type === 'textarea')
        <textarea
            rows="5"
            class="{{ $class }}"
            wire:model.lazy="{{ $wire }}"
            placeholder="{{ $placeholder }}"
        ></textarea>
    @elseif ($type === 'select')
        <div class="relative">
            <select
                class="{{ $class }} rounded-none appearance-none focus:outline-none" {{-- weird chrome 5px border-radius --}}
                wire:model.lazy="{{ $wire }}"
            >
                @foreach ($options as $option)
                    <option value="{{ $option['id'] }}">{{ $option['label'] }}</option>
                @endforeach
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-mercury">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
    @else
        <input
            type="{{ $type }}"
            class="{{ $class }}"
            wire:model.lazy="{{ $wire }}"
            placeholder="{{ $placeholder }}"
        />
    @endif
    @error($wire) <span class="text-red text-sm md:text-base">{{ $message }}</span> @enderror
</div>
