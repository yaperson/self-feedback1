//Quand on clique sur l'étoile, on execute un programme qui va passer chaque
//étoile en sens inverse, voir laquelle est check, activer un flag qui va passer en "on"
//toutes les étoiles inférieures, et on sera bon. Faudra juste mettre un onhover quand ça marchera.

    var starRep = document.getElementsByName("rating_repas");
    var starEnv = document.getElementsByName("rating_env");
    var starRepLength = starRep.length-1;
    var starEnvLength = starEnv.length-1;
    for(i=0; i<starRep.length; i++) starRep[i].setAttribute("onclick","onRepClick()");
    for(i=0; i<starEnv.length; i++) starEnv[i].setAttribute("onclick","onEnvClick()");
    var stars = document.getElementsByClassName("rating__star-off");
function onRepClick() {
    var i=j=-1;
    
            for(i=0;i<4;i++) stars[i].setAttribute("class","rating__star-off");
            for(i=0; i<starRepLength; i++) {
                if(starRep[i].checked) {
                    console.log(i)
                    for(j=0; j<i; j++) {
                        stars[j].setAttribute("class","rating__star-on");
                    }
                    break;
                }
            }
}
function onEnvClick() {

}
function aled() {
    for(i=0; i>stars.length;i++) stars[i].setAttribute("class","rating__star-off");
}
