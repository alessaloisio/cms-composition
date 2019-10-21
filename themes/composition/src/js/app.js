import mobileMenu from "./header/menuMobile";
import footer from "./footer/footer";
import sliderDiaporamaArchi from "./architecture/slider";
import frontPage from "./frontPage/frontPage";

// DOM READY
(() => {
  console.log("test");
  mobileMenu();
  footer();

  sliderDiaporamaArchi();
  frontPage();
})();
