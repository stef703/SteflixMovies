const modal = document.querySelector('#modal');
const modalBtn = document.querySelector('#sign-in-modal');
const signShadow = document.querySelector('#sign-button');
const background = document.querySelector('#showcase-content');


// Events
modalBtn.addEventListener('click', openModal);
window.addEventListener('click', outsideClick);

function outsideClick(event){
    if(event.target == modal){
        modal.style.display = 'none';
        setTimeout(addBackground,10)
    }
}

// Open 
function openModal() {
    modal.style.display = 'flex';
    background.style.display = 'none';
    }

    function addBackground(){
        background.style.display = 'block';
    }
    
    function openSignup(){
        modal.style.display = 'none';
        background.style.display = 'block';
    }
    function animateButton(){
        signShadow.style.background = '#2196f3';
        signShadow.style.boxShadow = '0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3';
        signShadow.style.transitionDelay = '1s';
        
    }
    
    