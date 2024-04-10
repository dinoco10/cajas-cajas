<div id="map" class="h-64"></div>

@push('scripts')
<script type="text/javascript">
    window.initMap = function() {
        var position = { lat: -34.666203, lng: -58.403185 }
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: position
        });
        var marker = new google.maps.Marker({
            position: position,
            title: 'Cajas Más Cajas - Chile 1982, Valentín Alsina',
            icon: 'images/icon_maps.png'
        });
        marker.setMap(map);
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6He2hMksWJdCRG-tRsVQNfjz_OCTdVlU&callback=initMap"></script>
@endpush
