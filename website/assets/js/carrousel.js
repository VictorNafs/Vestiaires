const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('click', () => {
    card.style.transform = 'translateY(-20px)';
    card.style.transition = '0.4s ease-out';
  });
});
