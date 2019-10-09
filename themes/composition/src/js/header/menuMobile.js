const menuMobile = () => {
  console.log("import menu mobile working !");

  /**
   * Hydrate the menu with the items
   */
  let menuContainer = document.querySelector("#menu-mobile");
  let navContainer = document.querySelector(".main-nav-list");

  let menuElement = document.querySelector(".menu");
  menuElement.addEventListener("click", () => {
    alert("Menu opened");
  });
};

export default menuMobile;
