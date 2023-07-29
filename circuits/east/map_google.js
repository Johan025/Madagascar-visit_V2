
const antananarivo = { latitude: -18.8792, longitude: 47.5079 };
const andasibe = { latitude: -18.9147, longitude: 48.4157 };
const madagascarSud = { latitude: -23.2345, longitude: 45.4567 };

// Informations sur les endroits à marquer
const places = [
  {
    name: 'Antananarivo',
    location: antananarivo,
    description: 'Capitale de Madagascar',
  },
  {
    name: 'Andasibe',
    location: andasibe,
    description: 'Réserve spéciale d\'Analamazaotra',
  },
  {
    name: 'Madagascar Sud',
    location: madagascarSud,
    description: 'Région du Sud de Madagascar',
  }
]

  // Initialiser la carte
  const map = L.map('map').setView(antananarivo, 7);

  // Ajouter la couche de carte
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // marqueur
  places.forEach(place => {
    const marker = L.marker(place.location).addTo(map);
    marker.bindPopup(`<b>${place.name}</b><br>${place.description}`);
  });


