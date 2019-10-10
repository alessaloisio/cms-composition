const menuMobile = () => {
  console.log("import menu mobile working !");

  /**
   * Hydrate the mobile-menu with the items
   */

  let menuContainer = document.querySelector("#menu-mobile");
  let navContainer = document.querySelectorAll(".menu-item");
  let ul = document.createElement("ul");
  let html = "";
  let counter = 0;
  navContainer.forEach(el => {
    if (counter == 0) {
      let li = document.createElement("li");
      li.innerHTML = el.innerHTML;
      let span = document.createElement("span");

      span.setAttribute("class", "close-menu-mobile");
      span.addEventListener("click", e => {
        document.querySelector("#menu-mobile").className = "hidden";
      });
      let img = document.createElement("img");
      img.setAttribute(
        "src",
        stylesheet_directory_uri + "/assets/svg/close-button.svg"
      );
      img.setAttribute("width", "15");
      span.appendChild(img);
      li.appendChild(span);
      ul.appendChild(li);
    } else {
      let li = document.createElement("li");
      li.innerHTML = el.innerHTML;
      let span = document.createElement("span");
      span.setAttribute("class", "arrow-menu-mobile");
      let img = document.createElement("img");
      img.setAttribute(
        "src",
        stylesheet_directory_uri + "/assets/svg/Group 1300.svg"
      );
      img.setAttribute("width", "15");
      span.appendChild(img);
      li.appendChild(span);
      ul.appendChild(li);
    }
    counter++;
  });
  let wishList = document.querySelector(".wish-list");
  let wishListMobileMenu = wishList.cloneNode(true);
  ul.appendChild(wishListMobileMenu);
  menuContainer.appendChild(ul);

  let menuElement = document.querySelector(".menu");
  menuElement.addEventListener(
    "click",
    () => {
      document.querySelector("#menu-mobile").className = "";
    },
    true
  );
  function closeMenuMobileOnResize() {
    if (window.innerWidth >= 1230) {
      document.querySelector("#menu-mobile").className = "hidden";
    }
  }
  window.onresize = closeMenuMobileOnResize;

  window.onscroll = function() {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 40 ||
      document.documentElement.scrollTop > 40
    ) {
      document.querySelector(".container").style.padding = "0px 20px";
      document.querySelector(".mh-logo img").style.width = "80%";
    } else {
      document.querySelector(".container").style.padding = "20px";
      document.querySelector(".mh-logo img").style.width = "100%";
      //document.getElementById("logo").style.fontSize = "35px";
    }
  }
};

export default menuMobile;
