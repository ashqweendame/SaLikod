const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slider img");
const sliderNav = document.querySelectorAll(".slider-nav button");

let currentIndex = 0;
let autoSlideInterval;
const slideDelay = 3500;

function goToSlide(index) {
  currentIndex = index;

  const currentPagePosition = window.scrollY;

  slider.scrollTo({
    left: index * slider.clientWidth,
    behavior: "smooth",
  });

  window.scrollTo({
    top: currentPagePosition,
    behavior: "instant",
  });
}

function nextSlide() {
  const nextIndex = (currentIndex + 1) % slides.length;
  goToSlide(nextIndex);
}

function startAutoSlide() {
  clearInterval(autoSlideInterval);
  autoSlideInterval = setInterval(nextSlide, slideDelay);
}

sliderNav.forEach((button, index) => {
  button.addEventListener("click", () => {
    goToSlide(index);
    startAutoSlide();
  });
});

startAutoSlide();

const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");

    const targetSection = document.querySelector(targetId);

    if (targetSection) {
      targetSection.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});
