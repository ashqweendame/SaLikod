const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slider img");
const sliderNav = document.querySelectorAll(".slider-nav button");

sliderNav.forEach((button, index) => {
  button.addEventListener("click", () => {
    const currentPagePosition = window.scrollY;

    slider.scrollTo({
      left: index * slider.clientWidth,
      behavior: "smooth",
    });

    window.scrollTo({
      top: currentPagePosition,
      behavior: "instant",
    });
  });
});
