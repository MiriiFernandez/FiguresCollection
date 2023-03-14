// CAROUSEL DE VISUALIZAR FIGURAS
const carouselItems = document.querySelectorAll(".carousel-item");
//se convierte en una array

const flechaIzquierda = document.querySelector(".carousel-arrow-left");
const flechaDerecha = document.querySelector(".carousel-arrow-right");

// --

// Que pasa cuando pulso la flecha de la derecha
flechaDerecha.addEventListener("click", () => {
  for (let i = 0; i < carouselItems.length; i++) {
    carouselItems[i].style.transform = "translateX(-300%)";
  }
});

// Que pasa cuando pulso la flecha de la izquierda
flechaIzquierda.addEventListener("click", () => {
  for (let i = 0; i < carouselItems.length; i++) {
    carouselItems[i].style.transform = "translateX(0%)";
  }
});


