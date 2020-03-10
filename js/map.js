"use-strict"

function iniciarMap(){
    let cord = {lat: -23.5283186,lng: -46.8979534};
    const map = new google.maps.Map(document.getElementById('map'),{
        zoom: 10,
        center: cord
    });
}