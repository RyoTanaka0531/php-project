var map;
function initMap(){
    map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
    });
}

let a = navigator.geolocation.getCurrentPosition(get_pos);
function get_pos(position){
    let lat = position.coords.latitude;
    let lng = position.coords.longitude;
    let latLng = new google.maps.LatLang(lat, lng);
    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: {
            url: 'Octocat.png',
            scaledSize: new google.maps.Size(40, 40)
        }
    });
    map.setCenter(latLng);
}