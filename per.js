const per = document.getElementById('per');

let posX = 500;
let posY = 500;
const velocidade = 10;
dicas = document.getElementById('dicas');
spawn = document.getElementById('Spawn');
let mexeu = false;

document.addEventListener('keydown', (e) => {

    if (!mexeu){
        dicas.classList.add('sumir'); // animação de esmaecer
        spawn.classList.add('sumir'); ;
        mexeu = true;
    }

  if (e.key === 'ArrowUp' || e.key === 'w') {
    posY -= velocidade;
  } else if (e.key === 'ArrowDown' || e.key === 's') {
    posY += velocidade;
  } else if (e.key === 'ArrowLeft' || e.key === 'a') {
    posX -= velocidade;
  } else if (e.key === 'ArrowRight' || e.key === 'd') {
    posX += velocidade;
  }

  per.style.top = `${posY}px`;
  per.style.left = `${posX}px`;
});
