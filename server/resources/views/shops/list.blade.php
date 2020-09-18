@extends('layouts/app')
@section('title', '店舗')
@section('content')
    <div id="content">
        <h1>カフェ</h1>
        <div id="map" class="map"></div>
        <style>
            #map{
                height: 600px;
            }
        </style>
        <script>
            function initMap(){

                var MyLatLng = new google.maps.LatLng(35.6811673, 139.7670516);
                var Options = {
                    zoom:15,
                    center: MyLatLng,
                    mapTypeId: 'roadmap'
                };
                var map = new google.maps.Map(document.getElementById('map'), Options);
            }
        </script>
            <script defer src="http://maps.google.com/maps/api/js?key={{env('GOOGLE_MAP_API')}}&callback=initMap"></script>
        <ul id="shop-list"></ul>
    </div>
    @endsection