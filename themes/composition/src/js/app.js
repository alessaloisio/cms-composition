import mobileMenu from "./header/menuMobile";
import footer from "./footer/footer";
import sliderDiaporamaArchi from "./architecture/slider";
import frontPage from "./frontPage/frontPage";
import showContent from "./animations/showContent";
import slideContent from "./animations/slideContent";
// DOM READY
(() => {
  console.log("test");

  let adminBar = document.querySelector("#wpadminbar");
  console.log(adminBar);

  mobileMenu();
  footer();

  sliderDiaporamaArchi();
  frontPage();

  let elementsToSlide = document.querySelectorAll(
    ".slide-content-right, .slide-content-left"
  );
  let elementsToHide = document.querySelectorAll(".fade-content");
  showContent(elementsToHide);
  slideContent(elementsToSlide);
  window.addEventListener("scroll", () => {
    showContent(elementsToHide);
    slideContent(elementsToSlide);
  });
})();
