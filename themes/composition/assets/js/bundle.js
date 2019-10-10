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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZha2VfYzhhMDNjYmMuanMiXSwibmFtZXMiOlsiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7QUFDQTs7OztBQUNBO0FBQ0EsQ0FBQyxZQUFNO0FBQ0xBLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE1BQVo7QUFDQTtBQUNBO0FBQ0QsQ0FKRCIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBtb2JpbGVNZW51IGZyb20gXCIuL2hlYWRlci9tZW51TW9iaWxlXCI7XG5pbXBvcnQgZm9vdGVyIGZyb20gXCIuL2Zvb3Rlci9mb290ZXJcIjtcbi8vIERPTSBSRUFEWVxuKCgpID0+IHtcbiAgY29uc29sZS5sb2coXCJ0ZXN0XCIpO1xuICBtb2JpbGVNZW51KCk7XG4gIGZvb3RlcigpO1xufSkoKTtcbiJdfQ==
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
};

var _default = menuMobile;
exports["default"] = _default;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1lbnVNb2JpbGUuanMiXSwibmFtZXMiOlsibWVudU1vYmlsZSIsImNvbnNvbGUiLCJsb2ciLCJtZW51Q29udGFpbmVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibmF2Q29udGFpbmVyIiwicXVlcnlTZWxlY3RvckFsbCIsInVsIiwiY3JlYXRlRWxlbWVudCIsImh0bWwiLCJjb3VudGVyIiwiZm9yRWFjaCIsImVsIiwibGkiLCJpbm5lckhUTUwiLCJzcGFuIiwic2V0QXR0cmlidXRlIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJjbGFzc05hbWUiLCJpbWciLCJzdHlsZXNoZWV0X2RpcmVjdG9yeV91cmkiLCJhcHBlbmRDaGlsZCIsIndpc2hMaXN0Iiwid2lzaExpc3RNb2JpbGVNZW51IiwiY2xvbmVOb2RlIiwibWVudUVsZW1lbnQiLCJjbG9zZU1lbnVNb2JpbGVPblJlc2l6ZSIsIndpbmRvdyIsImlubmVyV2lkdGgiLCJvbnJlc2l6ZSJdLCJtYXBwaW5ncyI6Ijs7Ozs7OztBQUFBLElBQU1BLFVBQVUsR0FBRyxTQUFiQSxVQUFhLEdBQU07QUFDdkJDLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLDhCQUFaO0FBRUE7Ozs7QUFJQSxNQUFJQyxhQUFhLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixDQUFwQjtBQUNBLE1BQUlDLFlBQVksR0FBR0YsUUFBUSxDQUFDRyxnQkFBVCxDQUEwQixZQUExQixDQUFuQjtBQUNBLE1BQUlDLEVBQUUsR0FBR0osUUFBUSxDQUFDSyxhQUFULENBQXVCLElBQXZCLENBQVQ7QUFDQSxNQUFJQyxJQUFJLEdBQUcsRUFBWDtBQUNBLE1BQUlDLE9BQU8sR0FBRyxDQUFkO0FBQ0FMLEVBQUFBLFlBQVksQ0FBQ00sT0FBYixDQUFxQixVQUFBQyxFQUFFLEVBQUk7QUFDekIsUUFBSUYsT0FBTyxJQUFJLENBQWYsRUFBa0I7QUFDaEIsVUFBSUcsRUFBRSxHQUFHVixRQUFRLENBQUNLLGFBQVQsQ0FBdUIsSUFBdkIsQ0FBVDtBQUNBSyxNQUFBQSxFQUFFLENBQUNDLFNBQUgsR0FBZUYsRUFBRSxDQUFDRSxTQUFsQjtBQUNBLFVBQUlDLElBQUksR0FBR1osUUFBUSxDQUFDSyxhQUFULENBQXVCLE1BQXZCLENBQVg7QUFFQU8sTUFBQUEsSUFBSSxDQUFDQyxZQUFMLENBQWtCLE9BQWxCLEVBQTJCLG1CQUEzQjtBQUNBRCxNQUFBQSxJQUFJLENBQUNFLGdCQUFMLENBQXNCLE9BQXRCLEVBQStCLFVBQUFDLENBQUMsRUFBSTtBQUNsQ2YsUUFBQUEsUUFBUSxDQUFDQyxhQUFULENBQXVCLGNBQXZCLEVBQXVDZSxTQUF2QyxHQUFtRCxRQUFuRDtBQUNELE9BRkQ7QUFHQSxVQUFJQyxHQUFHLEdBQUdqQixRQUFRLENBQUNLLGFBQVQsQ0FBdUIsS0FBdkIsQ0FBVjtBQUNBWSxNQUFBQSxHQUFHLENBQUNKLFlBQUosQ0FDRSxLQURGLEVBRUVLLHdCQUF3QixHQUFHLDhCQUY3QjtBQUlBRCxNQUFBQSxHQUFHLENBQUNKLFlBQUosQ0FBaUIsT0FBakIsRUFBMEIsSUFBMUI7QUFDQUQsTUFBQUEsSUFBSSxDQUFDTyxXQUFMLENBQWlCRixHQUFqQjtBQUNBUCxNQUFBQSxFQUFFLENBQUNTLFdBQUgsQ0FBZVAsSUFBZjtBQUNBUixNQUFBQSxFQUFFLENBQUNlLFdBQUgsQ0FBZVQsRUFBZjtBQUNELEtBbEJELE1Ba0JPO0FBQ0wsVUFBSUEsR0FBRSxHQUFHVixRQUFRLENBQUNLLGFBQVQsQ0FBdUIsSUFBdkIsQ0FBVDs7QUFDQUssTUFBQUEsR0FBRSxDQUFDQyxTQUFILEdBQWVGLEVBQUUsQ0FBQ0UsU0FBbEI7O0FBQ0EsVUFBSUMsS0FBSSxHQUFHWixRQUFRLENBQUNLLGFBQVQsQ0FBdUIsTUFBdkIsQ0FBWDs7QUFDQU8sTUFBQUEsS0FBSSxDQUFDQyxZQUFMLENBQWtCLE9BQWxCLEVBQTJCLG1CQUEzQjs7QUFDQSxVQUFJSSxJQUFHLEdBQUdqQixRQUFRLENBQUNLLGFBQVQsQ0FBdUIsS0FBdkIsQ0FBVjs7QUFDQVksTUFBQUEsSUFBRyxDQUFDSixZQUFKLENBQ0UsS0FERixFQUVFSyx3QkFBd0IsR0FBRyw0QkFGN0I7O0FBSUFELE1BQUFBLElBQUcsQ0FBQ0osWUFBSixDQUFpQixPQUFqQixFQUEwQixJQUExQjs7QUFDQUQsTUFBQUEsS0FBSSxDQUFDTyxXQUFMLENBQWlCRixJQUFqQjs7QUFDQVAsTUFBQUEsR0FBRSxDQUFDUyxXQUFILENBQWVQLEtBQWY7O0FBQ0FSLE1BQUFBLEVBQUUsQ0FBQ2UsV0FBSCxDQUFlVCxHQUFmO0FBQ0Q7O0FBQ0RILElBQUFBLE9BQU87QUFDUixHQW5DRDtBQW9DQSxNQUFJYSxRQUFRLEdBQUdwQixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsQ0FBZjtBQUNBLE1BQUlvQixrQkFBa0IsR0FBR0QsUUFBUSxDQUFDRSxTQUFULENBQW1CLElBQW5CLENBQXpCO0FBQ0FsQixFQUFBQSxFQUFFLENBQUNlLFdBQUgsQ0FBZUUsa0JBQWY7QUFDQXRCLEVBQUFBLGFBQWEsQ0FBQ29CLFdBQWQsQ0FBMEJmLEVBQTFCO0FBRUEsTUFBSW1CLFdBQVcsR0FBR3ZCLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixPQUF2QixDQUFsQjtBQUNBc0IsRUFBQUEsV0FBVyxDQUFDVCxnQkFBWixDQUNFLE9BREYsRUFFRSxZQUFNO0FBQ0pkLElBQUFBLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixFQUF1Q2UsU0FBdkMsR0FBbUQsRUFBbkQ7QUFDRCxHQUpILEVBS0UsSUFMRjs7QUFPQSxXQUFTUSx1QkFBVCxHQUFtQztBQUNqQyxRQUFJQyxNQUFNLENBQUNDLFVBQVAsSUFBcUIsSUFBekIsRUFBK0I7QUFDN0IxQixNQUFBQSxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsRUFBdUNlLFNBQXZDLEdBQW1ELFFBQW5EO0FBQ0Q7QUFDRjs7QUFDRFMsRUFBQUEsTUFBTSxDQUFDRSxRQUFQLEdBQWtCSCx1QkFBbEI7QUFDRCxDQW5FRDs7ZUFxRWU1QixVIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgbWVudU1vYmlsZSA9ICgpID0+IHtcbiAgY29uc29sZS5sb2coXCJpbXBvcnQgbWVudSBtb2JpbGUgd29ya2luZyAhXCIpO1xuXG4gIC8qKlxuICAgKiBIeWRyYXRlIHRoZSBtb2JpbGUtbWVudSB3aXRoIHRoZSBpdGVtc1xuICAgKi9cblxuICBsZXQgbWVudUNvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbWVudS1tb2JpbGVcIik7XG4gIGxldCBuYXZDb250YWluZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLm1lbnUtaXRlbVwiKTtcbiAgbGV0IHVsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcInVsXCIpO1xuICBsZXQgaHRtbCA9IFwiXCI7XG4gIGxldCBjb3VudGVyID0gMDtcbiAgbmF2Q29udGFpbmVyLmZvckVhY2goZWwgPT4ge1xuICAgIGlmIChjb3VudGVyID09IDApIHtcbiAgICAgIGxldCBsaSA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJsaVwiKTtcbiAgICAgIGxpLmlubmVySFRNTCA9IGVsLmlubmVySFRNTDtcbiAgICAgIGxldCBzcGFuID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcInNwYW5cIik7XG5cbiAgICAgIHNwYW4uc2V0QXR0cmlidXRlKFwiY2xhc3NcIiwgXCJjbG9zZS1tZW51LW1vYmlsZVwiKTtcbiAgICAgIHNwYW4uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGUgPT4ge1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiaGlkZGVuXCI7XG4gICAgICB9KTtcbiAgICAgIGxldCBpbWcgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwiaW1nXCIpO1xuICAgICAgaW1nLnNldEF0dHJpYnV0ZShcbiAgICAgICAgXCJzcmNcIixcbiAgICAgICAgc3R5bGVzaGVldF9kaXJlY3RvcnlfdXJpICsgXCIvYXNzZXRzL3N2Zy9jbG9zZS1idXR0b24uc3ZnXCJcbiAgICAgICk7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFwid2lkdGhcIiwgXCIxNVwiKTtcbiAgICAgIHNwYW4uYXBwZW5kQ2hpbGQoaW1nKTtcbiAgICAgIGxpLmFwcGVuZENoaWxkKHNwYW4pO1xuICAgICAgdWwuYXBwZW5kQ2hpbGQobGkpO1xuICAgIH0gZWxzZSB7XG4gICAgICBsZXQgbGkgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwibGlcIik7XG4gICAgICBsaS5pbm5lckhUTUwgPSBlbC5pbm5lckhUTUw7XG4gICAgICBsZXQgc3BhbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJzcGFuXCIpO1xuICAgICAgc3Bhbi5zZXRBdHRyaWJ1dGUoXCJjbGFzc1wiLCBcImFycm93LW1lbnUtbW9iaWxlXCIpO1xuICAgICAgbGV0IGltZyA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJpbWdcIik7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFxuICAgICAgICBcInNyY1wiLFxuICAgICAgICBzdHlsZXNoZWV0X2RpcmVjdG9yeV91cmkgKyBcIi9hc3NldHMvc3ZnL0dyb3VwIDEzMDAuc3ZnXCJcbiAgICAgICk7XG4gICAgICBpbWcuc2V0QXR0cmlidXRlKFwid2lkdGhcIiwgXCIxNVwiKTtcbiAgICAgIHNwYW4uYXBwZW5kQ2hpbGQoaW1nKTtcbiAgICAgIGxpLmFwcGVuZENoaWxkKHNwYW4pO1xuICAgICAgdWwuYXBwZW5kQ2hpbGQobGkpO1xuICAgIH1cbiAgICBjb3VudGVyKys7XG4gIH0pO1xuICBsZXQgd2lzaExpc3QgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLndpc2gtbGlzdFwiKTtcbiAgbGV0IHdpc2hMaXN0TW9iaWxlTWVudSA9IHdpc2hMaXN0LmNsb25lTm9kZSh0cnVlKTtcbiAgdWwuYXBwZW5kQ2hpbGQod2lzaExpc3RNb2JpbGVNZW51KTtcbiAgbWVudUNvbnRhaW5lci5hcHBlbmRDaGlsZCh1bCk7XG5cbiAgbGV0IG1lbnVFbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tZW51XCIpO1xuICBtZW51RWxlbWVudC5hZGRFdmVudExpc3RlbmVyKFxuICAgIFwiY2xpY2tcIixcbiAgICAoKSA9PiB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiXCI7XG4gICAgfSxcbiAgICB0cnVlXG4gICk7XG4gIGZ1bmN0aW9uIGNsb3NlTWVudU1vYmlsZU9uUmVzaXplKCkge1xuICAgIGlmICh3aW5kb3cuaW5uZXJXaWR0aCA+PSAxMjMwKSB7XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpLmNsYXNzTmFtZSA9IFwiaGlkZGVuXCI7XG4gICAgfVxuICB9XG4gIHdpbmRvdy5vbnJlc2l6ZSA9IGNsb3NlTWVudU1vYmlsZU9uUmVzaXplO1xufTtcblxuZXhwb3J0IGRlZmF1bHQgbWVudU1vYmlsZTtcbiJdfQ==
},{}]},{},[1])