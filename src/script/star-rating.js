let star1 = document.getElementById('1')
let radio = document.getElementsByName('rating_repas')

console.log(star1)


  star1.addEventListener('click', function() {
    console.log(star1[i])

    if(star1[i].classList === 'rating__star-off') {
      star1[i].classList.remove('rating__star-off');
      star1[i].classList.add('rating__star-on');

   }
  });