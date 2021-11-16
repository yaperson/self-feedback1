star = document.getElementsByClassName('rating__star-of')
radio = document.getElementsByName('rating_repas')

radio.addEventListener('click', toggleStar, false)

function toggleStar(){
  if(star.classList === 'rating__star-of') {
    star.classList.toggle('rating__star-on');
 }
}