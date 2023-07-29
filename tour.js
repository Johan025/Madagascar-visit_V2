const tour_imbrication=document.getElementById('tour_js');
const tour_sort=document.getElementById('tour_sort');

tour_sort.addEventListener ('click' , () =>{
    tour_imbrication.classList.toggle('ok')
    console.log('clické')
    alert('ok')
  })

  const tour=document.querySelector('.t');

  tour.addEventListener('click',() =>{
  
    tour_imbrication.classList.toggle('ok');
})

