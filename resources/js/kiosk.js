const startBtn = document.querySelector('#startBtn');
const startKiosk = document.querySelector('#startKiosk');
const modalAsk = document.querySelector('#modalAsk');
const modalAskYes = document.querySelector('#modalAskYes');
const modalAskNo = document.querySelector('#modalAskNo');
const main = document.querySelector('main');

let counter = 0;
let temps = 5;
let showStart = true;


startBtn.addEventListener('click', () => {
    startKiosk.style.display = 'none';
    localStorage.setItem('status', 'start');
});

main.addEventListener('click', () => {
    console.log('click');
    temps = 5;
});

function diminuerTemps() {
    const status = localStorage.getItem('status');

    if(status !== 'start'){
        return null;
    }else{
        temps--;
        console.log(temps);
        if(temps === 0){
            modalAsk.style.display = 'flex';
    
            modalAskYes.addEventListener('click', () => {
                modalAsk.style.display = 'none';
            })
    
            modalAskNo.addEventListener('click', () => {
                showStart = true;
                temps = 0;
                modalAsk.style.display = 'none';
                startKiosk.style.display = 'flex';
                localStorage.clear();
                let currentUrl = window.location.href;
                let parts = currentUrl.split('/');
                let newUrl = `${parts[0]}//${parts[2]}/kiosk/${parts[4]}`;
                window.location.href = newUrl;
                
            })
    
        }
    }
  }

setInterval(diminuerTemps, 1000)