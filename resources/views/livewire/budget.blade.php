<div id="budget" class="bg-aqua py-20 lg:px-10">
    <div class="container mx-auto">
        @if ($thankYou)
            <div class="text-center text-2xl text-mercury">
                ¡Su solicitud ha sido recibida!
                <br>
                En breve nos pondremos en contacto
            </div>
        @else
            <div class="pb-5">
                <h2 class="block text-center text-mercury text-2xl px-4 font-light md:mb-4 lg:px-20 xl:px-64">
                    Para efectuar un pedido de presupuesto complete el siguiente formulario, nos comunicaremos con usted a la brevedad.
                </h2>
            </div>
            <div class="px-4 lg:px-0 lg:w-1/2 lg:mx-auto">
                @unless ($expandForm)
                    <button
                        wire:click="$set('expandForm', true)"
                        class="block text-mercury text-2xl border border-dashed border-mercury px-4 py-2 uppercase w-full"
                    >
                        Solicitar Presupuesto
                    </button>
                @else
                    <div>
                        <form
                            wire:submit.prevent="save"
                            @if (app()->isProduction())
                                x-data
                                x-on:budget-requested.window="gtag_report_conversion(); console.log('conversion pinged')"
                            @endif
                        >
                            <x-input wire="fullName" placeholder="Nombre y Apellido" theme="light" />
                            <x-input wire="phone" placeholder="Teléfono" theme="light" />
                            <x-input wire="address" placeholder="Dirección" theme="light" />
                            <x-input wire="provinceId" type="select" placeholder="Provincia" theme="light" :options="config('cajas.provinces')" />
                            <x-input wire="locality" placeholder="Localidad" theme="light" />
                            <x-input wire="email" type="email"  placeholder="Email" theme="light" />
                            <h4 class="block mt-8 text-mercury font-bold text-lg mb-2">Características</h4>
                            <x-input wire="long" placeholder="Largo [mm]" theme="light" />
                            <x-input wire="wide" placeholder="Ancho [mm]" theme="light" />
                            <x-input wire="high" placeholder="Alto [mm]" theme="light" />
                            <x-input wire="amount" placeholder="Cantidad (mínimo 1000 unidades)" theme="light" />
                            <x-input wire="industry" placeholder="Industria" theme="light" />
                            <x-input wire="contentWeight" placeholder="Peso del Contenido [kg]" theme="light" />
                            <x-input wire="compression" placeholder="Nivel de compresión [Peso de la estiba - kg]" theme="light" />
                            <x-input wire="bursting" placeholder="Reventamiento [lbs]" theme="light" />
                            <x-input wire="pattern" placeholder="Estampado / Grabado" theme="light" />
                            <x-input type="textarea" wire="other" placeholder="Otras consideraciones" theme="light" />
                            <button
                                type="submit"
                                class="px-4 py-2 bg-aqua border border-dashed border-mercury block w-full text-mercury placeholder-mercury font-bold text-xl"
                            >
                                <span wire:loading wire:target="save">ENVIANDO...</span>
                                <span wire:loading.remove wire:target="save">SOLICITAR PRESUPUESTO</span>
                            </button>
                        </form>
                    </div>
                @endunless
            </div>
        @endif
    </div>

    @if (request()->query('test'))
        <div x-data class="text-center my-10">
            <button x-on:click="gtag_report_conversion(); console.log('conversion pinged')" class="bg-mercury p-4">
                Click me!
            </button>
        </div>
    @endif
</div>
