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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZha2VfMzg0ZjM5ZDQuanMiXSwibmFtZXMiOlsiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7QUFDQTs7OztBQUNBO0FBQ0EsQ0FBQyxZQUFNO0FBQ0xBLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE1BQVo7QUFDQTtBQUNBO0FBQ0QsQ0FKRCIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBtb2JpbGVNZW51IGZyb20gXCIuL2hlYWRlci9tZW51TW9iaWxlXCI7XG5pbXBvcnQgZm9vdGVyIGZyb20gXCIuL2Zvb3Rlci9mb290ZXJcIjtcbi8vIERPTSBSRUFEWVxuKCgpID0+IHtcbiAgY29uc29sZS5sb2coXCJ0ZXN0XCIpO1xuICBtb2JpbGVNZW51KCk7XG4gIGZvb3RlcigpO1xufSkoKTtcbiJdfQ==
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1lbnVNb2JpbGUuanMiXSwibmFtZXMiOlsibWVudU1vYmlsZSIsImNvbnNvbGUiLCJsb2ciLCJtZW51Q29udGFpbmVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibmF2Q29udGFpbmVyIiwicXVlcnlTZWxlY3RvckFsbCIsInVsIiwiY3JlYXRlRWxlbWVudCIsImNvdW50ZXIiLCJmb3JFYWNoIiwiZWwiLCJsaSIsImlubmVySFRNTCIsInNwYW4iLCJzZXRBdHRyaWJ1dGUiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsImNsYXNzTmFtZSIsImltZyIsInN0eWxlc2hlZXRfZGlyZWN0b3J5X3VyaSIsImFwcGVuZENoaWxkIiwid2lzaExpc3QiLCJ3aXNoTGlzdE1vYmlsZU1lbnUiLCJjbG9uZU5vZGUiLCJtZW51RWxlbWVudCIsImNsb3NlTWVudU1vYmlsZU9uUmVzaXplIiwid2luZG93IiwiaW5uZXJXaWR0aCIsIm9ucmVzaXplIiwib25zY3JvbGwiLCJzY3JvbGxGdW5jdGlvbiIsImJvZHkiLCJzY3JvbGxUb3AiLCJkb2N1bWVudEVsZW1lbnQiLCJzdHlsZSIsInBhZGRpbmciLCJ3aWR0aCJdLCJtYXBwaW5ncyI6Ijs7Ozs7OztBQUFBLElBQU1BLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQU07QUFDdkJDLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLDhCQUFaO0FBRUE7Ozs7QUFJQSxNQUFJQyxhQUFhLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixDQUFwQjtBQUNBLE1BQUlDLFlBQVksR0FBR0YsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixZQUExQixDQUFuQjtBQUNBLE1BQUlDLEVBQUUsR0FBR0osUUFBUSxDQUFDSyxhQUFULENBQXVCLElBQXZCLENBQVQ7QUFDQSxNQUFJQyxPQUFPLEdBQUcsQ0FBZDtBQUNBSixFQUFBQSxZQUFZLENBQUNLLE9BQWIsQ0FBcUIsVUFBQUMsRUFBRSxFQUFJO0FBQ3pCLFFBQUlGLE9BQU8sSUFB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QWxCOztBQUVBQyxFQUFBQSxNQUFNLENBQUNHLFFBQVAsR0FBa0IsWUFBVztBQUMzQkMsSUFBQUEsY0FBYztBQUNmLEdBRkQ7O0FBSUEsV0FBU0EsY0FBVCxHQUEwQjtBQUN4QixRQUNFNUIsUUFBUSxDQUFDNkIsSUFBVCxDQUFjQyxTQUFkLEdBQTBCLEVBQTFCLElBQ0E5QixRQUFRLENBQUMrQixlQUFULENBQXlCRCxTQUF6QixHQUFxQyxFQUZ2QyxFQUdFO0FBQ0E5QixNQUFBQSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsRUFBcUMrQixLQUFyQyxDQUEyQ0MsT0FBM0MsR0FBcUQsVUFBckQ7QUFDQWpDLE1BQUFBLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixFQUF1QytCLEtBQXZDLENBQTZDRSxLQUE3QyxHQUFxRCxLQUFyRDtBQUNELEtBTkQsTUFNTztBQUNMbEMsTUFBQUEsUUFBUSxDQUFDQyxhQUFULENBQXVCLFlBQXZCLEVBQXFDK0IsS0FBckMsQ0FBMkNDLE9BQTNDLEdBQXFELE1BQXJEO0FBQ0FqQyxNQUFBQSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsRUFBdUMrQixLQUF2QyxDQUE2Q0UsS0FBN0MsR0FBcUQsTUFBckQsQ0FGSyxDQUdMO0FBQ0Q7QUFDRjtBQUNGLENBcEZEOztlQXNGZXRDLFUiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBtZW51TW9iaWxlID0gKCkgPT4ge1xuICBjb25zb2xlLmxvZyhcImltcG9ydCBtZW51IG1vYmlsZSB3b3JraW5nICFcIik7XG5cbiAgLyoqXG4gICAqIEh5ZHJhdGUgdGhlIG1vYmlsZS1tZW51IHdpdGggdGhlIGl0ZW1zXG4gICAqL1xuXG4gIGxldCBtZW51Q29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNtZW51LW1vYmlsZVwiKTtcbiAgbGV0IG5hdkNvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIubWVudS1pdGVtXCIpO1xuICBsZXQgdWwgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwidWxcIik7XG4gIGxldCBjb3VudGVyID0gMDtcbiAgbmF2Q29udGFpbmVyLmZvckVhY2goZWwgPT4ge1xuICAgIGlmIChjb3VudGVyID09IDApIHtcbiAgICAgIGxldCBsaSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJsaVwiKTtcbiAgICAgIGxpLmlubmVySFRNTCA9IGVsLmlubmVySFRNTDtcbiAgICAgIGxldCBzcGFuID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcInNwYW5cIik7XG5cbiAgICAgIHNwYW4uc2V0QXR0cmlidXRlKFwiY2xhc3NcIiwgXCJjbG9zZS1tZW51LW1vYmlsZVwiKTtcbiAgICAgIHNwYW4uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGUgPT4ge1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiaGlkZGVuXCI7XG4gICAgICB9KTtcbiAgICAgIGxldCBpbWcgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiaW1nXCIpO1xuICAgICAgaW1nLnNldEF0dHJpYnV0ZShcbiAgICAgICAgXCJzcmNcIixcbiAgICAgICAgc3R5bGVzaGVldF9kaXJlY3RvcnlfdXJpICsgXCIvYXNzZXRzL3N2Zy9jbG9zZS1idXR0b24uc3ZnXCJcbiAgICAgICk7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFwid2lkdGhcIiwgXCIxNVwiKTtcbiAgICAgIHNwYW4uYXBwZW5kQ2hpbGQoaW1nKTtcbiAgICAgIGxpLmFwcGVuZENoaWxkKHNwYW4pO1xuICAgICAgdWwuYXBwZW5kQ2hpbGQobGkpO1xuICAgIH0gZWxzZSB7XG4gICAgICBsZXQgbGkgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwibGlcIik7XG4gICAgICBsaS5pbm5lckhUTUwgPSBlbC5pbm5lckhUTUw7XG4gICAgICBsZXQgc3BhbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJzcGFuXCIpO1xuICAgICAgc3Bhbi5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLCBcImFycm93LW1lbnUtbW9iaWxlXCIpO1xuICAgICAgbGV0IGltZyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJpbWdcIik7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFxuICAgICAgICBcInNyY1wiLFxuICAgICAgICBzdHlsZXNoZWV0X2RpcmVjdG9yeV91cmkgKyBcIi9hc3NldHMvc3ZnL0dyb3VwIDEzMDAuc3ZnXCJcbiAgICAgICk7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFwid2lkdGhcIiwgXCIxNVwiKTtcbiAgICAgIHNwYW4uYXBwZW5kQ2hpbGQoaW1nKTtcbiAgICAgIGxpLmFwcGVuZENoaWxkKHNwYW4pO1xuICAgICAgdWwuYXBwZW5kQ2hpbGQobGkpO1xuICAgIH1cbiAgICBjb3VudGVyKys7XG4gIH0pO1xuICBsZXQgd2lzaExpc3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLndpc2gtbGlzdFwiKTtcbiAgbGV0IHdpc2hMaXN0TW9iaWxlTWVudSA9IHdpc2hMaXN0LmNsb25lTm9kZSh0cnVlKTtcbiAgdWwuYXBwZW5kQ2hpbGQod2lzaExpc3RNb2JpbGVNZW51KTtcbiAgbWVudUNvbnRhaW5lci5hcHBlbmRDaGlsZCh1bCk7XG5cbiAgbGV0IG1lbnVFbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tZW51XCIpO1xuICBtZW51RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgIFwiY2xpY2tcIixcbiAgICAoKSA9PiB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiXCI7XG4gICAgfSxcbiAgICB0cnVlXG4gICk7XG4gIGZ1bmN0aW9uIGNsb3NlTWVudU1vYmlsZU9uUmVzaXplKCkge1xuICAgIGlmICh3aW5kb3cuaW5uZXJXaWR0aCA+PSAxMjMwKSB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiaGlkZGVuXCI7XG4gICAgfVxuICB9XG4gIHdpbmRvdy5vbnJlc2l6ZSA9IGNsb3NlTWVudU1vYmlsZU9uUmVzaXplO1xuXG4gIHdpbmRvdy5vbnNjcm9sbCA9IGZ1bmN0aW9uKCkge1xuICAgIHNjcm9sbEZ1bmN0aW9uKCk7XG4gIH07XG5cbiAgZnVuY3Rpb24gc2Nyb2xsRnVuY3Rpb24oKSB7XG4gICAgaWYgKFxuICAgICAgZG9jdW1lbnQuYm9keS5zY3JvbGxUb3AgPiA0MCB8fFxuICAgICAgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNjcm9sbFRvcCA+IDQwXG4gICAgKSB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmNvbnRhaW5lclwiKS5zdHlsZS5wYWRkaW5nID0gXCIwcHggMjBweFwiO1xuICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5taC1sb2dvIGltZ1wiKS5zdHlsZS53aWR0aCA9IFwiODAlXCI7XG4gICAgfSBlbHNlIHtcbiAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuY29udGFpbmVyXCIpLnN0eWxlLnBhZGRpbmcgPSBcIjIwcHhcIjtcbiAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubWgtbG9nbyBpbWdcIikuc3R5bGUud2lkdGggPSBcIjEwMCVcIjtcbiAgICAgIC8vZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJsb2dvXCIpLnN0eWxlLmZvbnRTaXplID0gXCIzNXB4XCI7XG4gICAgfVxuICB9XG59O1xuXG5leHBvcnQgZGVmYXVsdCBtZW51TW9iaWxlO1xuIl19
},{}]},{},[1])