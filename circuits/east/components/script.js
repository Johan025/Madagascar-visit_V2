const head_east=document.querySelector('.header');
const button_menu=document.querySelector('.logoBurger');
const ul_east=document.querySelector("ul");

button_menu.addEventListener('click',() =>{
    head_east.classList.toggle('hideshow');
    ul_east.classList.toggle('hideshow2');
  })


  // Coordonnées de Madagascar Ouest
  //const latitude = -20.2833;
  //const longitude = 44.2833;
//   Latitude: -18.8792
// Longitude: 47.5079

const latitude = -18.8792;
  const longitude = 47.5079;

  function mapClassic (){
  const antananarivo = [-18.8792,47.5079 ];
const sainte_marie = [-17.0911, 49.8152];
const Tamatave = [-18.1498, 49.4029];
const andasibé= [-18.9150,48.4283];
const mahambo= [-16.3039,49.7661];


const places = [
  {
    name: 'Antananarivo',
    location: antananarivo,
    description: 'Capitale de Madagascar',
  },
  {
    name: 'Sainte-marie',
    location: sainte_marie,
    description: 'île de sainte-Marie',
  },
  {
    name: 'Tamatave',
    location: Tamatave,
    description: 'Toamasina est le plus grand port de Madagascar et joue un rôle vital dans l"économie du pays',
  },
  {
    name: 'andasibé',
    location: andasibé,
    description: 'Andasibe est réputée pour sa réserve spéciale d"Analamazaotra (Parc National de Mantadia',
  },

  {
    name: 'mahambo',
    location: mahambo,
    description: 'Mahambo est une destination populaire pour les surfeurs et les voyageurs à la recherche de plages tranquilles et d"une ambiance détendue',
  }


]


  // Initialiser la carte
  const map = L.map('map').setView(Tamatave, 7.4);

  // Ajouter la couche de carte
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // marqueur
  places.forEach(place => {
    const marker = L.marker(place.location).addTo(map);
    marker.bindPopup(`<b>${place.name}</b><br>${place.description}`);
  });

  addMarker(antananarivo, 'Antananarivo');
  addMarker(andasibé, 'Andasibe');
  addMarker(mahambo, 'Mahambo');
  addMarker(sainte_marie, 'Sainte-Marie');
  addMarker(Tamatave, 'Tamatave');
  const ant=[antananarivo,andasibé]

  L.polyline(ant, { color: 'blue' }).addTo(map);
    L.polyline([andasibe, mahambo], { color: 'green' }).addTo(map);
    L.polyline([mahambo, sainteMarie], { color: 'red' }).addTo(map);
  }

  

  mapClassic();



