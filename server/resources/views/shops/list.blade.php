@extends('layouts/app')
@section('title', '店舗')
@section('content')
    <div id="content">
        <h1>カフェ</h1>
        <div class="row">
            <div class="col-md-6">
                <ul id="shop-list"></ul>
            </div>
            <div class="col-md-6">
                <div id="map" class="map">
                </div>
            </div>
        </div>
        <style>
            #map{
                height: 600px;
            }
        </style>
        <script src="{{asset('/js/list.js')}}">
            // function initMap(){
            //     var MyLatLng = new google.maps.LatLng(35.465700, 139.622138); //経度と緯度を指定
            //     var Options = {
            //         zoom:16,
            //         center: MyLatLng,
            //         mapTypeId: 'roadmap'
            //     };
            //     var map = new google.maps.Map(document.getElementById('map'), Options);
            //     var markerOptions = {
            //         map:map, //マーカーを生成したいマップを指定
            //         position: MyLatLng, //どこにマーカーを生成するのか
            //     };
            //     //マーカーを生成するMarkerクラス
            //     var marker = new google.maps.Marker(markerOptions);
            //     $.ajax({
            //     //type,url,dataTypeはリクエスト
            //     type : "get",
            //     url: "https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid={{env('GURUNAVI_API')}}&latitude=35.465700&longitude=139.622138&range=3&category_l=RSFST18000&hit_per_page=100",
            //     dataType : 'json',
            //     //success,errorはレスポンス
            //     success: function(json){
            //     let num_shop = json.rest.length;
            //     for( let i = 0; i < num_shop; i++){
            //         console.log(json.rest[i].url);
            //         let latLng = new google.maps.LatLng(json.rest[i].latitude, json.rest[i].longitude);
            //         var marker = new google.maps.Marker({
            //         position: latLng,
            //         map: map,
            //         label: {
            //             text: String(i+1),
            //             color: "#fff",
            //             fontWeight: 'bold',
            //             fontSize: '14px'
            //             },
            //             url: json.rest[i].url,
            //         });
            //         google.maps.event.addListener(marker, 'click', (function(url){
            //             return function(){ location.href = url; };
            //         })(json.rest[i].url));
            //         $('<li class="each-shop"><i class="fas fa-map-marker fa-3x"></i><span class="icon">'+ String(i+1) + '</span><a href="' + json.rest[i].url + '"><img class="shop-img" src=' + json.rest[i].image_url.shop_image1 + '><span class="shop-content"><span class="shop-name">' + String(i+1) + " " + json.rest[i].name + '</span><span class="time">営業時間：' + json.rest[i].opentime + '</span></span></a></li>').appendTo('#shop-list');
            //         }
            //     },
            //     error: function(json){
            //         console.log("error")
            //     }
            //     });
            // }
            </script>
            <script defer src="http://maps.google.com/maps/api/js?key={{env('GOOGLE_MAP_API')}}&callback=initMap"></script>
    </div>
    @endsection