@if ($thankYou)
    <div class="lg:w-1/2 lg:mx-auto">
        <div class="text-center text-2xl">
            ¡Gracias por su mensaje!
            <br>
            En breve nos pondremos en contacto
        </div>
    </div>
@else
    <form wire:submit.prevent="save" class="lg:w-1/2 lg:mx-auto">
        <x-input wire="name" placeholder="Nombre" />
        <x-input wire="phone" placeholder="Teléfono" />
        <x-input wire="address" placeholder="Dirección" />
        <x-input type="email" wire="email" placeholder="Email" />
        <x-input type="textarea" wire="message" placeholder="Consulta" />
        <button
            type="submit"
            class="px-4 py-2 bg-mercury border border-dashed border-tuatara block w-full text-tuatara placeholder-tuatara font-bold text-xl"
        >
            <span wire:loading wire:target="save">ENVIANDO...</span>
            <span wire:loading.remove wire:target="save">ENVIAR</span>
        </button>
    </form>
@endif
