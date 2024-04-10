<div class="bg-aqua w-full h-full fixed top-0 left-0 block z-50 transition-opacity duration-1000 ease-in-out" id="spinner">
    <div class="h-full flex items-center justify-center">
        <img src="{!! url('images/loading_web.gif?a='.rand()) !!}" alt="Cargando..." class="block" />
    </div>
</div>

@push('scripts')
<script>
    window.onload = function () {
        document.getElementById('spinner').style.opacity = 0;
        setTimeout(function () {
            document.getElementById('spinner').style.display = 'none';
        }, 500);
    }
</script>
@endpush
