const toggleBars = document.querySelector('#toggle-bars');
const exitMenu = document.querySelector('#outside');
const toggleTimes = document.querySelector('#toggle-times');
const media = window.matchMedia("(max-width: 768px)");

toggleBars.addEventListener('click', openMenu);
toggleTimes.addEventListener('click', closeMenu);

function openMenu(){
    if(media.matches){
        var navMenu = document.querySelector('.nav-links');
        navMenu.style.display = 'block';
        toggleTimes.style.display = 'block';
        toggleBars.style.display = 'none';
    }
}
function closeMenu(){
        var navMenu = document.querySelector('.nav-links');
        toggleTimes.style.display = 'none';
        toggleBars.style.display = 'block';
        navMenu.style.display = 'flex';
 
        var navMenu = document.querySelector('.nav-links');
        navMenu.style.display = 'block';
    
}

