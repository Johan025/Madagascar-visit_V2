
  // Coordonnées de Madagascar Nord
  const latitude = -12.2800;
    const longitude =  49.2917;

    

  // Initialiser la carte
  const antananarivo = [-18.8792,47.5079 ];
const sainte_marie = [-17.0911, 49.8152];
const Tamatave = [-18.1498, 49.4029];
const andasibé= [-18.9150,48.4283];
const mahambo= [-16.3039,49.7661];
const Palmarium= [-16.0256,49.7661,49.6690];


const places= [
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
    name: 'mahambo',
    location: mahambo,
    description: 'Mahambo est une destination populaire pour les surfeurs et les voyageurs à la recherche de plages tranquilles et d"une ambiance détendue',
  }
  ,
  {
    name: 'Palmarium',
    location: Palmarium,
    description: 'île de sainte-Marie',
}
  
]

 






  // Initialiser la carte
  const map = L.map('map').setView(antananarivo, 7.4);

  // Ajouter la couche de carte
   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
  }).addTo(map);

map.scrollWheelZoom.disable();
map.touchZoom.disable();

// Gestionnaire d'événement pour la molette de la souris
map.on('mousewheel', function (e) {
    // Empêcher le zoom en annulant l'événement
    e.preventDefault();
    e.stopPropagation();
    
    // Vous pouvez également insérer ici votre propre logique
    // pour changer la position ou l'aspect de la carte en réponse à la molette
});





  // marqueur
  places.forEach(place => {
    const marker = L.marker(place.location).addTo(map);
    marker.bindPopup(`<b>${place.name}</b>`);
  });

  




    map.setZoomEnabled(false);