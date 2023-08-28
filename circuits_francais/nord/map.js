
  // Coordonnées de Madagascar Nord
  const latitude = -12.2800;
    const longitude =  49.2917;

    

  // Initialiser la carte
  const antananarivo = [-18.8792,47.5079 ];
  const Ankarafantsika = [-16.3000, 46.8000];
  const Ankarana = [-12.8333, 49.1667];
  const PortBerger = [-14.9500, 50.0167];
  const Antsohihy = [-14.8799, 47.9873];
  const Ambanja = [-13.6882, 48.4502];
  const MontagneAmbre = [-12.5105, 49.1720];
  const DiegoSuarez = [-12.2800, 49.2919];
  const NosyBe = [-13.3239, 48.2683];










const places = [
  {
    name: 'Antananarivo',
    location: antananarivo,
  },
  {
    name: 'Ankarafantsika',
    location: Ankarafantsika,
  },
  {
    name: 'Ankarana',
    location: Ankarana,
  },
  {
    name: 'Port Berger',
    location: PortBerger,
  },

  {
    name: 'Antsohihy',
    location: Antsohihy,
  },
  {
    name: 'Ambanja',
    location: Ambanja,
  },
  {
    name: 'Antsohihy',
    location: Antsohihy,
  },
  {
    name: 'Montagne d" Ambre',
    location: MontagneAmbre,
  },
  {
    name: 'Diego Suarez',
    location: DiegoSuarez,
  },
  {
    name: 'Nosy-Be',
    location: NosyBe,
  }


]


  // Initialiser la carte
  const map = L.map('map').setView(Ambanja, 7.4);

  // Ajouter la couche de carte
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
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

  


