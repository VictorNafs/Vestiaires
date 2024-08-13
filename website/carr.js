
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');
const carousel = document.querySelector('.carousel');

let rotation = 0;

prevButton.addEventListener('click', () => {
  rotation += 30;
  carousel.style.transform = `rotateY(${rotation}deg)`;
});

nextButton.addEventListener('click', () => {
  rotation -= 30;
  carousel.style.transform = `rotateY(${rotation}deg)`;
});
