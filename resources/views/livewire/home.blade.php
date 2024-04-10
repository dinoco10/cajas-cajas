<div class="relative">
    <x-mobile-navbar />

    <x-bg-image-slider>
        <div class="container mx-auto">
            <x-desktop-navbar />

            <div class="h-screen flex flex-col justify-between pt-20 pb-28 md:h-auto md:block md:space-y-20 md:pt-4 md:pb-20">
                {{-- Logo --}}
                <img src="https://cajasmascajas.com.ar/images/fade_logo.png"
                    class="block w-4/5 mx-auto md:w-2/5 xl:w-1/4"
                    alt="Logo Cajas Más Cajas"
                />
                <h1 class="sr-only">Cajas Más Cajas – Envases de cartón corrugado</h1>

                {{--
                    Features
                    >> note: in tablet + desktop we display these in the "Company" section, so that the "Pedi Tu Presupuesto" button is above the fold. <<
                 --}}
                <div class="hidden space-y-10 md:px-4 md:flex md:items-start md:space-y-0 md:space-x-10 xl:space-x-20">
                    @foreach (config('cajas.features') as $title => $description)
                        <div class="md:flex-1">
                            <h3 class="text-mercury text-center text-2xl font-light">{{ $title }}</h3>
                            <x-wavy-underline />
                            <p class="text-mercury text-center">{{ $description }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- CTA & Logo --}}
                <div class="space-y-8">
                    <button
                        class="
                            bg-white text-tuatara px-8 py-4 w-3/4 mx-auto text-sm font-bold rounded-md border-b-4 border-mercury-dark flex space-x-2 items-center justify-center
                            hover:bg-mercury hover:border-mercury-darker
                            md:w-auto md:text-xl md:px-12
                        "
                        x-data
                        x-on:scroll-into-budget.window="document.getElementById('budget').scrollIntoView({ behavior: 'smooth' });"
                        wire:click="$emit('expandBudgetForm')"
                    >
                        <span>PEDI TU PRESUPUESTO</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                    </button>
                    <div>
                        <div class="w-6 h-8 my-0 mx-auto" style="background: url('/images/sprite.png') -51px -4px;"></div>
                        <p class="text-mercury text-center text-xs mt-1">Una marca de Río Cuarto S.A.</p>
                    </div>
                </div>
            </div>
        </div>
        <x-wave-divider/>
    </x-bg-image-slider>

    {{-- Company --}}
    <div id="company" class="md:px-4 bg-mercury">
        <div class="container mx-auto">
            <div class="bg-mercury py-10 md:pt-20">
                <h2 class="text-center text-tuatara text-3xl uppercase">Nosotros</h2>
                <h4 class="text-center text-tuatara text-lg font-light px-12">Atención Personalizada, Flexibilidad y Compromiso</p>
            </div>

            <div class="bg-white border-l-8 border-r-8 border-aqua px-8 py-10">
                <div>
                    <div class="space-y-10 md:hidden">
                        @foreach (config('cajas.features') as $title => $description)
                            <div class="md:flex-1">
                                <h3 class="text-tuatara text-center text-2xl font-light">{{ $title }}</h3>
                                <x-wavy-underline type="dark" />
                                <p class="text-tuatara font-light leading-relaxed text-center">{{ $description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="border-t border-mercury w-4/5 mx-auto my-10 md:hidden"></div>

                <p class="text-center text-base font-light leading-relaxed text-tuatara mb-4 xl:text-xl xl:mb-10">Fundada en 1967, nuestra empresa inicialmente se dedicó a la fabricación de rollos de corrugado simple faz, luego a la de planchas de doble faz, y desde 1983 a la fabricación de cajas de cartón corrugado, y todo tipo de complementos de este material.</p>
                <p class="text-center text-base font-light leading-relaxed text-tuatara xl:text-xl">En sus inicios, se ubicó en la Capital Federal, más precisamente en el barrio de Villa Luro, para luego trasladarse hacia el año 2002 a la planta actual en la localidad de Valentín Alsina, Provincia de Buenos Aires, donde se logró duplicar la superficie anteriormente ocupada, alcanzando los 4000 m2.</p>
            </div>
        </div>
    </div>

    {{-- Clients --}}
    <div class="bg-mercury py-10 xl:pt-20">
        <div class="container mx-auto">
            <h3 class="text-center font-light text-tuatara text-xl mb-1 md:text-2xl">Algunos de nuestros clientes:</h2>
            <x-wavy-underline type="dark" />
            <div class="md:flex md:flex-wrap xl:flex-no-wrap xl:space-x-16">
                @foreach (config('cajas.clients') as $client)
                    <div class="md:w-1/3 xl:w-1/6">
                        <img
                            src="{{ asset($client['image']) }}" alt="{{ $client['name'] }}"
                            class="block w-1/2 mx-auto xl:w-auto grayscale"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-wave-divider orientation="up" />

    {{-- Services --}}
    <div id="services">
       <div class="container mx-auto">
           <div class="py-10 md:pt-20">
               <h2 class="text-center text-tuatara text-3xl uppercase">Servicios</h2>
            </div>
            <div class="mb-20 lg:flex lg:justify-between">
                @foreach (config('cajas.services') as $service)
                    <div class="mb-16 px-12 md:flex md:items-center md:justify-center lg:block lg:flex-1 lg:px-6 lg:text-center lg:mb-0">
                        <div class="block mx-auto w-12 md:mx-0 md:mr-8 lg:inline-block lg:mr-0" style="height: 2.6rem; background: url('/images/sprite.png') {{ $service['icon_position']}} 0px;"></div>
                        <div class="md:w-2/3 lg:w-full">
                            <h5 class="font-bold text-center text-tuatara my-4 md:text-left lg:text-center">{{ $service['title'] }}</h5>
                            <p class="font-light text-center text-tuatara text-sm md:text-left lg:text-center">{{ $service['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
       </div>
    </div>

    {{-- Products --}}
    <div id="products" class="pb-20">
        <div class="container mx-auto border-t border-tautara pt-20">
            <div>
                <h2 class="text-center text-tuatara text-2xl uppercase px-8">Algunos de nuestros productos:</h2>
             </div>
             <div>
                 <x-carousel />
             </div>
        </div>
    </div>

    {{-- Contact --}}
    <x-wave-divider />
    <div id="contact" class="bg-mercury xl:pt-10">
        <div class="container mx-auto">
            <div class="py-10">
                <h2 class="text-center text-tuatara text-3xl uppercase">Contacto</h2>
            </div>
            <div class="px-4 pb-20 lg:px-10">
                <livewire:contact />
            </div>
        </div>
    </div>

    {{-- Budget --}}
    <livewire:budget />
    {{--
    NEW BUDGET
    <div class="bg-aqua py-20" id="budget">
        <div class="container mx-auto">
            @if ($thankYou)
                <p class="text-center text-2xl leading-loose text-mercury">
                    {{ $thankYou === 'contact' ? '¡Gracias por su mensaje!' : '¡Su solicitud ha sido recibida!' }}
                    <br>
                    En breve nos pondremos en contacto.
                </p>
            @else
                <h2 class="block text-center text-mercury text-2xl uppercase px-4 font-light mb-8">
                    Solicitá tu presupuesto
                </h2>
                <div class="px-4 lg:px-0 lg:w-1/2 lg:mx-auto" x-data="{ formToDisplay: null }">
                    <div class="flex space-x-4" :class="formToDisplay">
                        <button
                            type="button"
                            x-on:click="formToDisplay = 'budget'"
                            :class="formToDisplay === 'budget' && 'bg-aqua-dark flex items-center justify-center space-x-2'"
                            class="block text-mercury hover:bg-aqua-dark text-2xl border border-dashed border-mercury px-4 py-2 w-full"
                        >
                            <span>Ya sé qué caja quiero</span>
                            <x-icons.check x-show="formToDisplay === 'budget'" />
                        </button>
                        <button
                            type="button"
                            x-on:click="formToDisplay = 'message'"
                            :class="formToDisplay === 'message' && 'bg-aqua-dark flex items-center justify-center space-x-2'"
                            class="block text-mercury hover:bg-aqua-dark text-2xl border border-dashed border-mercury px-4 py-2 w-full"
                        >
                            <span>No sé qué caja quiero</span>
                            <x-icons.check x-show="formToDisplay === 'message'" />
                        </button>
                    </div>
                    <div x-show="formToDisplay" class="mt-8">
                        <x-wavy-underline space="my-8" />
                        <div x-show="formToDisplay === 'budget'">
                            <form wire:submit.prevent="saveBudget">
                                <x-input wire="fullName" placeholder="Nombre y Apellido" theme="light" />
                                <x-input wire="phone" placeholder="Teléfono" theme="light" />
                                <x-input wire="email" type="email"  placeholder="Email" theme="light" />
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
                                <x-input wire="material" placeholder="Material [lbs]" theme="light" />
                                <x-input wire="pattern" placeholder="Estampado / Grabado" theme="light" />
                                <x-input type="textarea" wire="other" placeholder="Otras consultas" theme="light" />
                                <button
                                    type="submit"
                                    class="px-4 py-2 bg-aqua hover:bg-aqua-dark border border-dashed border-mercury block w-full text-mercury placeholder-mercury font-bold text-xl"
                                >
                                    <span wire:loading wire:target="saveBudget">ENVIANDO...</span>
                                    <span wire:loading.remove wire:target="saveBudget">ENVIAR</span>
                                </button>
                            </form>
                        </div>
                        <div x-show="formToDisplay === 'message'">
                            <p class="text-white text-xl font-light text-center mb-4">Dejanos tu contacto y te asesoramos.</p>
                            <form wire:submit.prevent="saveMessage">
                                <x-input wire="fullName" placeholder="Nombre y Apellido" theme="light" />
                                <x-input wire="phone" placeholder="Teléfono" theme="light" />
                                <x-input wire="email" type="email"  placeholder="Email" theme="light" />
                                <x-input type="textarea" wire="message" placeholder="Consulta" theme="light" />
                                <button
                                    type="submit"
                                    class="px-4 py-2 bg-aqua hover:bg-aqua-dark border border-dashed border-mercury block w-full text-mercury placeholder-mercury font-bold text-xl"
                                >
                                    <span wire:loading wire:target="saveMessage">ENVIANDO...</span>
                                    <span wire:loading.remove wire:target="saveMessage">ENVIAR</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
     --}}

     {{-- Info / Phone Number / Facebook / Instagram --}}
    <div class="container mx-auto">
        <div class="py-20 space-y-16 lg:space-y-0 lg:flex lg:items-start lg:justify-between lg:px-10">
            <x-social-box icon="location-pin" href="https://goo.gl/maps/ereNfesnbbSGFKxM7">
                <span class="block text-sm">Chile 1982, Valentín Alsina</span>
                <span class="block text-sm">B1822FGW, Provincia de Buenos Aires</span>
            </x-social-box>
            <x-social-box icon="phone" href="tel:52630747">
                (11) 5263-0747
            </x-social-box>
            <x-social-box icon="facebook" href="https://facebook.com/cajasmascajas">
                /cajasmascajas
            </x-social-box>
            <x-social-box icon="instagram" href="https://instagram.com/riocuartosa">
                @riocuartosa
            </x-social-box>
        </div>
    </div>

    {{-- Google Maps --}}
    <x-maps />

    {{-- Footer --}}
    <footer class="bg-aqua">
        <div class="container mx-auto py-10 lg:px-10 lg:flex lg:items-center lg:justify-between">
            <p class="text-mercury mb-8 text-center lg:mb-0">© Copyright {{ date('Y') }} Cajas+Cajas S.A.<br>Todos los derechos reservados.</p>
            <p class="text-mercury text-center">
                Una marca de <span class="inline-block w-4 h-4 mx-1" style="background: url('/images/sprite.png') -84px -7px"></span>
                <span class="text-mercury font-bold">Río Cuarto S.A.</span>
            </p>
        </div>
    </footer>

    {{-- Loading Spinner --}}
    <x-spinner />

    <a href="https://wa.me/+5491135783100" class="fixed rounded-full p-4 bg-green shadow-outline" style="right: 20px; bottom: 20px;">
        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="text-white w-10 h-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path class="fill-current" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
        </svg>
    </a>

    @if ($thankYou)
        <div x-init="document.getElementById('budget').scrollIntoView({ behavior: 'smooth' });"></div>
    @endif
</div>
