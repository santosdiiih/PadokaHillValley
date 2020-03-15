//Variavel que contem o visual do mapa
const provedorDoMapa = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';

//Variavel que criei para guardar as coordenadas da minha residência
const cordenadaInicial = [-23.54033, -46.96644];

//Variável onde alocamos o mapa e definimos as coordenadas iniciais e seu zoom
let mapaDaPagina = L.map('myMap').setView(cordenadaInicial, 13);

//aidiconando a imagem do mapa no mapa
L.tileLayer(provedorDoMapa, {
    maxZoom: 18,
}).addTo(mapaDaPagina);

let iconeDoMarcador = L.icon({
    iconUrl: 'img/pin.png',
    iconSize: [60, 60],
    iconAnchor: [30, 60],
});

//Removendo o efeito de adicionar zoom ao dar Double CLick no mapa
mapaDaPagina.doubleClickZoom.disable();

//adicionando um evento que ao dar double click o mapa se redireciona para determinada coordenada
mapaDaPagina.addEventListener('dblclick', e => {
    let coordenada = mapaDaPagina.mouseEventToLatLng(e.originalEvent);
    L.marker([coordenada.lat, coordenada.lng], {icon: iconeDoMarcador}).addTo(mapaDaPagina);
    //exibindo no console a coordenada
    console.log(coordenada);
});


//função que recebe a localização do navegador
navigator.geolocation.getCurrentPosition(
    (pos) => {
        const { coords } = pos;
        console.log(coords);
        L.marker([coords.latitude, coords.longitude]).addTo(mapaDaPagina);
    },
    (err) => {
        console.log(err);
    },
    {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0,
    }
)
