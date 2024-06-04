const startBtn = document.querySelector('#startBtn');
const startKiosk = document.querySelector('#startKiosk');
const main = document.querySelector('main');

let counter = 0;
let temps = 5;

startBtn.addEventListener('click', () => {
    startKiosk.style.display = 'none';
})
main.addEventListener('click', () => {
    console.log('click');
    temps = 5;
})
function diminuerTemps() {
    temps--;
    counter = temps
    console.log(counter);
    if(temps === 0){
        startKiosk.style.display = 'flex';
    }
  }
  setInterval(diminuerTemps, 1000)