const toggleBars = document.querySelector('#toggle-bars');
const exitMenu = document.querySelector('#outside');
const toggleTimes = document.querySelector('#toggle-times');
const media = window.matchMedia("(max-width: 768px)");

toggleBars.addEventListener('click', openMenu);


function openMenu(){
        var navMenu = document.querySelector('.nav-links');
        navMenu.style.display = 'block';
       $('#toggle-times').css("style", "display").show();
       $('#toggle-bars').hide();
        
}


if ($(window).width() < 768) {
        toggleTimes.addEventListener('click', closeMenu);
        function closeMenu(){
                $('.nav-links').hide();
                $('#toggle-times').hide();
                $('#toggle-bars').css("style", "display").show();
                
            
        }
         if ($(window).width() > 769){
                $('.nav-links').show();
                $('.nav-links').css("display", "flex");
        }
     }