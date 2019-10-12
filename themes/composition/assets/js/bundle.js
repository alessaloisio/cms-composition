(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

var _menuMobile = _interopRequireDefault(require("./header/menuMobile"));

var _footer = _interopRequireDefault(require("./footer/footer"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

// DOM READY
(function () {
  console.log("test");
  (0, _menuMobile["default"])();
  (0, _footer["default"])();
})();
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZha2VfYmJlZTA0YzAuanMiXSwibmFtZXMiOlsiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7QUFDQTs7OztBQUNBO0FBQ0EsQ0FBQyxZQUFNO0FBQ0xBLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE1BQVo7QUFDQTtBQUNBO0FBQ0QsQ0FKRCIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBtb2JpbGVNZW51IGZyb20gXCIuL2hlYWRlci9tZW51TW9iaWxlXCI7XG5pbXBvcnQgZm9vdGVyIGZyb20gXCIuL2Zvb3Rlci9mb290ZXJcIjtcbi8vIERPTSBSRUFEWVxuKCgpID0+IHtcbiAgY29uc29sZS5sb2coXCJ0ZXN0XCIpO1xuICBtb2JpbGVNZW51KCk7XG4gIGZvb3RlcigpO1xufSkoKTtcbiJdfQ==
},{"./footer/footer":2,"./header/menuMobile":3}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var footer = function footer() {
  var horaires = document.querySelector(".heures-container.tablet-off").innerHTML;
  document.querySelector(".heures-container.tablet-on").innerHTML = horaires;
};

var _default = footer;
exports["default"] = _default;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZvb3Rlci5qcyJdLCJuYW1lcyI6WyJmb290ZXIiLCJob3JhaXJlcyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImlubmVySFRNTCJdLCJtYXBwaW5ncyI6Ijs7Ozs7OztBQUFBLElBQU1BLE1BQU0sR0FBRyxTQUFUQSxNQUFTLEdBQU07QUFDbkIsTUFBTUMsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsOEJBQXZCLEVBQ2RDLFNBREg7QUFHQUYsRUFBQUEsUUFBUSxDQUFDQyxhQUFULENBQXVCLDZCQUF2QixFQUFzREMsU0FBdEQsR0FBa0VILFFBQWxFO0FBQ0QsQ0FMRDs7ZUFPZUQsTSIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IGZvb3RlciA9ICgpID0+IHtcbiAgY29uc3QgaG9yYWlyZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmhldXJlcy1jb250YWluZXIudGFibGV0LW9mZlwiKVxuICAgIC5pbm5lckhUTUw7XG5cbiAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5oZXVyZXMtY29udGFpbmVyLnRhYmxldC1vblwiKS5pbm5lckhUTUwgPSBob3JhaXJlcztcbn07XG5cbmV4cG9ydCBkZWZhdWx0IGZvb3RlcjtcbiJdfQ==
},{}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var menuMobile = function menuMobile() {
  console.log("import menu mobile working !");
  /**
   * Hydrate the mobile-menu with the items
   */

  var menuContainer = document.querySelector("#menu-mobile");
  var navContainer = document.querySelectorAll(".menu-item");
  var ul = document.createElement("ul");
  var html = "";
  var counter = 0;
  navContainer.forEach(function (el) {
    if (counter == 0) {
      var li = document.createElement("li");
      li.innerHTML = el.innerHTML;
      var span = document.createElement("span");
      span.setAttribute("class", "close-menu-mobile");
      span.addEventListener("click", function (e) {
        document.querySelector("#menu-mobile").className = "hidden";
      });
      var img = document.createElement("img");
      img.setAttribute("src", stylesheet_directory_uri + "/assets/svg/close-button.svg");
      img.setAttribute("width", "15");
      span.appendChild(img);
      li.appendChild(span);
      ul.appendChild(li);
    } else {
      var _li = document.createElement("li");

      _li.innerHTML = el.innerHTML;

      var _span = document.createElement("span");

      _span.setAttribute("class", "arrow-menu-mobile");

      var _img = document.createElement("img");

      _img.setAttribute("src", stylesheet_directory_uri + "/assets/svg/Group 1300.svg");

      _img.setAttribute("width", "15");

      _span.appendChild(_img);

      _li.appendChild(_span);

      ul.appendChild(_li);
    }

    counter++;
  });
  var wishList = document.querySelector(".wish-list");
  var wishListMobileMenu = wishList.cloneNode(true);
  ul.appendChild(wishListMobileMenu);
  menuContainer.appendChild(ul);
  var menuElement = document.querySelector(".menu");
  menuElement.addEventListener("click", function () {
    document.querySelector("#menu-mobile").className = "";
  }, true);

  function closeMenuMobileOnResize() {
    if (window.innerWidth >= 1230) {
      document.querySelector("#menu-mobile").className = "hidden";
    }
  }

  window.onresize = closeMenuMobileOnResize;

  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      document.querySelector(".container").style.padding = "0px 20px";
      document.querySelector(".mh-logo img").style.width = "80%";
    } else {
      document.querySelector(".container").style.padding = "20px";
      document.querySelector(".mh-logo img").style.width = "100%"; //document.getElementById("logo").style.fontSize = "35px";
    }
  }
};

var _default = menuMobile;
exports["default"] = _default;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1lbnVNb2JpbGUuanMiXSwibmFtZXMiOlsibWVudU1vYmlsZSIsImNvbnNvbGUiLCJsb2ciLCJtZW51Q29udGFpbmVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibmF2Q29udGFpbmVyIiwicXVlcnlTZWxlY3RvckFsbCIsInVsIiwiY3JlYXRlRWxlbWVudCIsImh0bWwiLCJjb3VudGVyIiwiZm9yRWFjaCIsImVsIiwibGkiLCJpbm5lckhUTUwiLCJzcGFuIiwic2V0QXR0cmlidXRlIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJjbGFzc05hbWUiLCJpbWciLCJzdHlsZXNoZWV0X2RpcmVjdG9yeV91cmkiLCJhcHBlbmRDaGlsZCIsIndpc2hMaXN0Iiwid2lzaExpc3RNb2JpbGVNZW51IiwiY2xvbmVOb2RlIiwibWVudUVsZW1lbnQiLCJjbG9zZU1lbnVNb2JpbGVPblJlc2l6ZSIsIndpbmRvdyIsImlubmVyV2lkdGgiLCJvbnJlc2l6ZSIsIm9uc2Nyb2xsIiwic2Nyb2xsRnVuY3Rpb24iLCJib2R5Iiwic2Nyb2xsVG9wIiwiZG9jdW1lbnRFbGVtZW50Iiwic3R5bGUiLCJwYWRkaW5nIiwid2lkdGgiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7QUFBQSxJQUFNQSxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFNO0FBQ3ZCQyxFQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWSw4QkFBWjtBQUVBOzs7O0FBSUEsTUFBSUMsYUFBYSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsQ0FBcEI7QUFDQSxNQUFJQyxZQUFZLEdBQUdGLFFBQVEsQ0FBQ0csZ0JBQVQsQ0FBMEIsWUFBMUIsQ0FBbkI7QUFDQSxNQUFJQyxFQUFFLEdBQUdKLFFBQVEsQ0FBQ0ssYUFBVCxDQUF1QixJQUF2QixDQUFUO0FBQ0EsTUFBSUMsSUFBSSxHQUFHLEVBQVg7QUFDQSxNQUFJQyxPQUFPLEdBQUcsQ0FBZDtBQUNBTCxFQUFBQSxZQUFZLENBQUNNLE9BQWIsQ0FBcUIsVUFB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LEVBQUFBLE1BQU0sQ0FBQ0UsUUFBUCxHQUFrQkgsdUJBQWxCOztBQUVBQyxFQUFBQSxNQUFNLENBQUNHLFFBQVAsR0FBa0IsWUFBVztBQUMzQkMsSUFBQUEsY0FBYztBQUNmLEdBRkQ7O0FBSUEsV0FBU0EsY0FBVCxHQUEwQjtBQUN4QixRQUNFN0IsUUFBUSxDQUFDOEIsSUFBVCxDQUFjQyxTQUFkLEdBQTBCLEVBQTFCLElBQ0EvQixRQUFRLENBQUNnQyxlQUFULENBQXlCRCxTQUF6QixHQUFxQyxFQUZ2QyxFQUdFO0FBQ0EvQixNQUFBQSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsRUFBcUNnQyxLQUFyQyxDQUEyQ0MsT0FBM0MsR0FBcUQsVUFBckQ7QUFDQWxDLE1BQUFBLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixFQUF1Q2dDLEtBQXZDLENBQTZDRSxLQUE3QyxHQUFxRCxLQUFyRDtBQUNELEtBTkQsTUFNTztBQUNMbkMsTUFBQUEsUUFBUSxDQUFDQyxhQUFULENBQXVCLFlBQXZCLEVBQXFDZ0MsS0FBckMsQ0FBMkNDLE9BQTNDLEdBQXFELE1BQXJEO0FBQ0FsQyxNQUFBQSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsRUFBdUNnQyxLQUF2QyxDQUE2Q0UsS0FBN0MsR0FBcUQsTUFBckQsQ0FGSyxDQUdMO0FBQ0Q7QUFDRjtBQUNGLENBckZEOztlQXVGZXZDLFUiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBtZW51TW9iaWxlID0gKCkgPT4ge1xuICBjb25zb2xlLmxvZyhcImltcG9ydCBtZW51IG1vYmlsZSB3b3JraW5nICFcIik7XG5cbiAgLyoqXG4gICAqIEh5ZHJhdGUgdGhlIG1vYmlsZS1tZW51IHdpdGggdGhlIGl0ZW1zXG4gICAqL1xuXG4gIGxldCBtZW51Q29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNtZW51LW1vYmlsZVwiKTtcbiAgbGV0IG5hdkNvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIubWVudS1pdGVtXCIpO1xuICBsZXQgdWwgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwidWxcIik7XG4gIGxldCBodG1sID0gXCJcIjtcbiAgbGV0IGNvdW50ZXIgPSAwO1xuICBuYXZDb250YWluZXIuZm9yRWFjaChlbCA9PiB7XG4gICAgaWYgKGNvdW50ZXIgPT0gMCkge1xuICAgICAgbGV0IGxpID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImxpXCIpO1xuICAgICAgbGkuaW5uZXJIVE1MID0gZWwuaW5uZXJIVE1MO1xuICAgICAgbGV0IHNwYW4gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwic3BhblwiKTtcblxuICAgICAgc3Bhbi5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLCBcImNsb3NlLW1lbnUtbW9iaWxlXCIpO1xuICAgICAgc3Bhbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZSA9PiB7XG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbWVudS1tb2JpbGVcIikuY2xhc3NOYW1lID0gXCJoaWRkZW5cIjtcbiAgICAgIH0pO1xuICAgICAgbGV0IGltZyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJpbWdcIik7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFxuICAgICAgICBcInNyY1wiLFxuICAgICAgICBzdHlsZXNoZWV0X2RpcmVjdG9yeV91cmkgKyBcIi9hc3NldHMvc3ZnL2Nsb3NlLWJ1dHRvbi5zdmdcIlxuICAgICAgKTtcbiAgICAgIGltZy5zZXRBdHRyaWJ1dGUoXCJ3aWR0aFwiLCBcIjE1XCIpO1xuICAgICAgc3Bhbi5hcHBlbmRDaGlsZChpbWcpO1xuICAgICAgbGkuYXBwZW5kQ2hpbGQoc3Bhbik7XG4gICAgICB1bC5hcHBlbmRDaGlsZChsaSk7XG4gICAgfSBlbHNlIHtcbiAgICAgIGxldCBsaSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJsaVwiKTtcbiAgICAgIGxpLmlubmVySFRNTCA9IGVsLmlubmVySFRNTDtcbiAgICAgIGxldCBzcGFuID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcInNwYW5cIik7XG4gICAgICBzcGFuLnNldEF0dHJpYnV0ZShcImNsYXNzXCIsIFwiYXJyb3ctbWVudS1tb2JpbGVcIik7XG4gICAgICBsZXQgaW1nID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImltZ1wiKTtcbiAgICAgIGltZy5zZXRBdHRyaWJ1dGUoXG4gICAgICAgIFwic3JjXCIsXG4gICAgICAgIHN0eWxlc2hlZXRfZGlyZWN0b3J5X3VyaSArIFwiL2Fzc2V0cy9zdmcvR3JvdXAgMTMwMC5zdmdcIlxuICAgICAgKTtcbiAgICAgIGltZy5zZXRBdHRyaWJ1dGUoXCJ3aWR0aFwiLCBcIjE1XCIpO1xuICAgICAgc3Bhbi5hcHBlbmRDaGlsZChpbWcpO1xuICAgICAgbGkuYXBwZW5kQ2hpbGQoc3Bhbik7XG4gICAgICB1bC5hcHBlbmRDaGlsZChsaSk7XG4gICAgfVxuICAgIGNvdW50ZXIrKztcbiAgfSk7XG4gIGxldCB3aXNoTGlzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIud2lzaC1saXN0XCIpO1xuICBsZXQgd2lzaExpc3RNb2JpbGVNZW51ID0gd2lzaExpc3QuY2xvbmVOb2RlKHRydWUpO1xuICB1bC5hcHBlbmRDaGlsZCh3aXNoTGlzdE1vYmlsZU1lbnUpO1xuICBtZW51Q29udGFpbmVyLmFwcGVuZENoaWxkKHVsKTtcblxuICBsZXQgbWVudUVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1lbnVcIik7XG4gIG1lbnVFbGVtZW50LmFkZEV2ZW50TGlzdGVuZXIoXG4gICAgXCJjbGlja1wiLFxuICAgICgpID0+IHtcbiAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbWVudS1tb2JpbGVcIikuY2xhc3NOYW1lID0gXCJcIjtcbiAgICB9LFxuICAgIHRydWVcbiAgKTtcbiAgZnVuY3Rpb24gY2xvc2VNZW51TW9iaWxlT25SZXNpemUoKSB7XG4gICAgaWYgKHdpbmRvdy5pbm5lcldpZHRoID49IDEyMzApIHtcbiAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbWVudS1tb2JpbGVcIikuY2xhc3NOYW1lID0gXCJoaWRkZW5cIjtcbiAgICB9XG4gIH1cbiAgd2luZG93Lm9ucmVzaXplID0gY2xvc2VNZW51TW9iaWxlT25SZXNpemU7XG5cbiAgd2luZG93Lm9uc2Nyb2xsID0gZnVuY3Rpb24oKSB7XG4gICAgc2Nyb2xsRnVuY3Rpb24oKTtcbiAgfTtcblxuICBmdW5jdGlvbiBzY3JvbGxGdW5jdGlvbigpIHtcbiAgICBpZiAoXG4gICAgICBkb2N1bWVudC5ib2R5LnNjcm9sbFRvcCA+IDQwIHx8XG4gICAgICBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuc2Nyb2xsVG9wID4gNDBcbiAgICApIHtcbiAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuY29udGFpbmVyXCIpLnN0eWxlLnBhZGRpbmcgPSBcIjBweCAyMHB4XCI7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1oLWxvZ28gaW1nXCIpLnN0eWxlLndpZHRoID0gXCI4MCVcIjtcbiAgICB9IGVsc2Uge1xuICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5jb250YWluZXJcIikuc3R5bGUucGFkZGluZyA9IFwiMjBweFwiO1xuICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5taC1sb2dvIGltZ1wiKS5zdHlsZS53aWR0aCA9IFwiMTAwJVwiO1xuICAgICAgLy9kb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImxvZ29cIikuc3R5bGUuZm9udFNpemUgPSBcIjM1cHhcIjtcbiAgICB9XG4gIH1cbn07XG5cbmV4cG9ydCBkZWZhdWx0IG1lbnVNb2JpbGU7XG4iXX0=
},{}]},{},[1])