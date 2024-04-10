<div x-data="{
    open: false,
    scrollInto(target) {
        document.getElementById(target).scrollIntoView({ behavior: 'smooth' });
    }
}" class="xl:hidden">
    <div class="bg-shark">
        <button @click="open = !open" class="px-2 py-2" id="burger-btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 text-mercury md:w-10 md:h-10">
                <path class="fill-current" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
            </svg>
        </button>
    </div>
    <div x-show="open" class="flex flex-col justify-between absolute inset-0 h-screen bg-shark">
        <button @click="open = !open">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 h-10 text-mercury md:w-16 md:h-16">
                <path class="fill-current" fill-rule="evenodd" d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z"/>
            </svg>
        </button>
        <ul class="flex-1 flex flex-col justify-center pl-8">
            <li>
                <button class="text-mercury block mb-16 text-2xl" @click="open = false; scrollInto('company');">
                    <span class="border-b border-dashed pb-2">EMPRESA</span>
                </button>
            </li>
            <li>
                <button class="text-mercury block mb-16 text-2xl" @click="open = false; scrollInto('services');">
                    <span class="border-b border-dashed pb-2">SERVICIOS</span>
                </button>
            </li>
            <li>
                <button class="text-mercury block mb-16 text-2xl" @click="open = false; scrollInto('products');">
                    <span class="border-b border-dashed pb-2">PRODUCTOS</span>
                </button>
            </li>
            <li>
                <button class="text-mercury block mb-16 text-2xl" @click="open = false; scrollInto('contact');">
                    <span class="border-b border-dashed pb-2">CONTACTO</span>
                </button>
            </li>
        </ul>
    </div>
</div>
