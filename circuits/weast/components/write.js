
let i=0;
let j=0;
const txt=["Madagascar Visit the weast of Madagascar "," Discover The tsingy Bemaraha"];
const texDisplay=document.querySelector('.texte');
let finish=false;
let currentPhrase=[];

function loop(){
  texDisplay.innerHTML=currentPhrase.join('');

  if (i < txt.length){

     if(!finish && j<=txt[i].length){
      currentPhrase.push(txt[i][j])
       j++;
     }

     if (finish && j<=txt[i].length){
      currentPhrase.pop(txt[i][j])
      j--;
     }

     if (j==txt[i].length){
      finish=true;
     }

     if (j==0){
      currentPhrase=[];
       finish=false;
       i++;
         
        if (i==txt.length){
          i=0;
        }
     }
   
  } 
  
  const speedUp=Math.random()+ (100-40);
  setTimeout(loop, speedUp);
}
loop();



