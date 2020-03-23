"use-strict"
const containerCards = document.getElementById('containerLojas');

const localizacao = [
    {
        "cidade": "itapevi",
        "latitude": -23.54033,
        "longitude": -46.96644,
        "rua": "ROD. ENGENHEIRO RENÊ BENEDITO DA SILVA",
        "numero": "3338",
        "telefone": "(11)94002-8922",
    },
    {
        "cidade": "são paulo",
        "latitude": -23.602219,
        "longitude": -46.6941909,
        "rua": "AV. ENGENHEIRO LUÍS CARLOS BERRINI",
        "numero": "666",
        "telefone": "(11)94002-8922",
    },
];

const localizaInMap = (latitude, longitude) => {
    L.marker([latitude, longitude], {icon:iconeDoMarcador}).addTo(mapaDaPagina);
}

const makeCard = () => {
    localizacao.forEach(item => {
        
        containerCards.innerHTML += `
            <div class="cardLojas">
                <div class="card-rua-cidade">
                    ${(item.cidade).toUpperCase()}
                </div>
                <div class="card-rua-detalhada">
                    ${(item.rua).toUpperCase()} - ${(item.numero).toUpperCase()}
                </div>
                <div class="card-rua-contato">
                    Telefone: ${(item.telefone).toUpperCase()}
                </div>
                <div class="button-localizar" onclick="localizaInMap(${item.latitude},${item.longitude} );">
                    LOCALIZAR
                </div>
            </div>
        `;
        
    });
    
}

const chamaFuncoes = () =>{
    makeCard();
}

chamaFuncoes();