<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" id="favicon" href="{{asset('img/favicon.png')}}" type="image/gif" sizes="16x16">
    <title>TransitTrack</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="anonymous" />
    <style>
        #map {
            height: 300px;
            width: 600px;
            border-radius: 10px;
        }
    </style>
</head>

<x-navbar>
</x-navbar>

<body>
    <div class="trtr_hero_wrapper">
        <div class="trtr_hero_details container">
            <h1 class="h1"
                style="text-align: center; font-weight: 600;">
                {{ $company }}
            </h1>
            <div class="container">
                <div class="row">
                    <div class="col-4 border-end">
                        <h3 class="h3"
                            style="color: whitesmoke">
                            Stopages
                        </h3>
                        @foreach ($locations as $location)
                        <ul class="list-group pt-2">
                            <a href=""
                                class="rounded-3"
                                style="text-decoration-line: none;">
                                <li class="list-group-item"
                                    style="background-color: rgba(27, 28, 30, 0.3); color: whitesmoke">
                                    {{ ucfirst($location) }}
                                </li>
                            </a>
                        </ul>
                        @endforeach
                    </div>
                    <div class="col-8">
                        <h3 class="h3"
                            style="color: whitesmoke">
                            Location
                        </h3>
                        <!-- <p>This is something</p> -->
                        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                            crossorigin="">
                        </script>
                        <div id="map">
                            <script>
                                var map = L.map('map').setView([23.754742, 90.394057], 10);
                                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    maxZoom: 19,
                                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                }).addTo(map);
                                // var buses = JSON.parse('{{!! $buses !!}}');
                                var buses = @json($buses);
                                // console.log(buses);
                                buses.forEach(buses => {
                                    var lat = buses.latitude;
                                    var lon = buses.longitude;
                                    // console.log(lat);
                                    // console.log(lon);
                                    var marker = L.marker([lat, lon]).addTo(map);
                                });
                                var marker = L.marker([23.620399, 90.499992]).addTo(map);
                                marker.bindPopup("<b>Hello world!</b><br>I am a popup.");
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>