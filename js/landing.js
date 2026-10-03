const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slider img");
const sliderNav = document.querySelectorAll(".slider-nav button");

sliderNav.forEach((button, index) => {
  button.addEventListener("click", () => {
    slider.scrollTo({
      left: slides[index].offsetLeft,
      behavior: "smooth",
    });
  });
});
