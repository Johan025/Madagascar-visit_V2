
  
//   // Coordonnées de Madagascar Nord
//   const latitude = -12.2800;
//     const longitude =  49.2917;

    

//   // Initialiser la carte
//   const Antananarivo = [-18.8792,47.5079 ];
// const Antsirabé= [-19.8691, 47.0328 ];
// const Ambositra = [-20.5151, 47.2522];
// const Ranomafana = [-21.2569, 47.4109];
// const Fianarantsoa = [-21.4414, 47.0844];
// const Ambalavao = [-21.9129, 46.9395];


// const places = [
//   {
//     name: 'Antananarivo',
//     location: Antananarivo,
//   },
//   {
//     name: 'Antsirabé',
//     location: Antsirabé,
//   },
//   {
//     name: 'Ambositra',
//     location: Ambositra,
//   },
//   {
//     name: 'Ranomafana',
//     location: Ranomafana,
//   },

//   {
//     name: 'Fianarantsoa',
//     location: Fianarantsoa,
//   },
//   {
//     name: 'Ambalavao',
//     location: Ambalavao,
//   }


// ]


//   // Initialiser la carte
//   const map = L.map('map').setView(antananarivo, 7.4);

 

//   map.scrollWheelZoom.disable();
//   map.touchZoom.disable();
  
//   // Gestionnaire d'événement pour la molette de la souris
//   map.on('mousewheel', function (e) {
//       // Empêcher le zoom en annulant l'événement
//       e.preventDefault();
//       e.stopPropagation();
      
//   });


//   places.forEach(place => {
//     const marker = L.marker(place.location).addTo(map);
//     marker.bindPopup(`<b>${place.name}</b>`);
//   });


   
    
  



  
  
  
  
  
  // Coordonnées de Madagascar Nord
  const latitude = -12.2800;
    const longitude =  49.2917;

    

  // Initialiser la carte
  const Antananarivo = [-18.8792,47.5079 ];
  const Antsirabé= [-19.8691, 47.0328 ];
  const Ambositra = [-20.5151, 47.2522];
  const Ranomafana = [-21.2569, 47.4109];
   const Fianarantsoa = [-21.4414, 47.0844];
   const Ambalavao = [-21.9129, 46.9395];

const places = [
  {
    name: 'Antananarivo',
    location: Antananarivo,
  },
  {
    name: 'Antsirabé',
    location: Antsirabé,
  },
  {
    name: 'Ambositra',
    location: Ambositra,
  },
  {
    name: 'Ranomafana',
    location: Ranomafana,
  },

  {
    name: 'Fianarantsoa',
    location:Fianarantsoa,
  },

  {
    name: 'Ambalavao',
    location:Ambalavao,
  }


]


  // Initialiser la carte
  const map = L.map('map').setView(Antananarivo, 7.4);

  // Ajouter la couche de carte
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  // marqueur
  places.forEach(place => {
    const marker = L.marker(place.location).addTo(map);
    marker.bindPopup(`<b>${place.name}</b>`);
  });


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

  


