//Quand on clique sur l'étoile, on execute un programme qui va passer chaque
//étoile en sens inverse, voir laquelle est check, activer un flag qui va passer en "on"
//toutes les étoiles inférieures, et on sera bon. Faudra juste mettre un onhover quand ça marchera.

function init() {
    var starRep = document.getElementsByName("rating_repas");
    var stars = document.getElementsByClassName("rating__star-off");
}
function onRepClick() {
    
            for(i=starRep.length; i<0; i--) {
                if(starRep[i].checked) {
                    for(j=i; j<0; j--) stars[j].setAttribute("class","rating__star-on");
                    break;
                }
            }
}
function onEnvClick() {

}
function itWorks() {
    window.alert("it works!");
}
