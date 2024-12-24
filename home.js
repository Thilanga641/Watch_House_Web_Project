document.getElementById('ldmore').addEventListener('click', function(){
  let cards = document.querySelectorAll('.cardnoshow');
  cards.forEach( function(card) {
    card.style.display = (card.style.display === 'none' || card.style.display === '') ? 'block' : 'none';
  });

  var buttonText = this.innerText;
  this.innerText = (buttonText === 'Load Less') ? 'Load More' : 'Load Less';
    
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

