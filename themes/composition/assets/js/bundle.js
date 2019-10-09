(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

var _menuMobile = _interopRequireDefault(require("./header/menuMobile"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

// DOM READY
(function () {
  console.log("test");
  (0, _menuMobile["default"])();
})();
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZha2VfMzQ3ODQ4ZGYuanMiXSwibmFtZXMiOlsiY29uc29sZSIsImxvZyJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7OztBQUVBO0FBQ0EsQ0FBQyxZQUFNO0FBQ0xBLEVBQUFBLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE1BQVo7QUFDQTtBQUNELENBSEQiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgbW9iaWxlTWVudSBmcm9tIFwiLi9oZWFkZXIvbWVudU1vYmlsZVwiO1xuXG4vLyBET00gUkVBRFlcbigoKSA9PiB7XG4gIGNvbnNvbGUubG9nKFwidGVzdFwiKTtcbiAgbW9iaWxlTWVudSgpO1xufSkoKTtcbiJdfQ==
},{"./header/menuMobile":2}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var menuMobile = function menuMobile() {
  console.log("import menu mobile working !");
  /**
   * Hydrate the menu with the items
   */

  var menuContainer = document.querySelector("#menu-mobile");
  var navContainer = document.querySelector(".main-nav-list");
  var menuElement = document.querySelector(".menu");
  menuElement.addEventListener("click", function () {
    alert("Menu opened");
  });
};

var _default = menuMobile;
exports["default"] = _default;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1lbnVNb2JpbGUuanMiXSwibmFtZXMiOlsibWVudU1vYmlsZSIsImNvbnNvbGUiLCJsb2ciLCJtZW51Q29udGFpbmVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibmF2Q29udGFpbmVyIiwibWVudUVsZW1lbnQiLCJhZGRFdmVudExpc3RlbmVyIiwiYWxlcnQiXSwibWFwcGluZ3MiOiI7Ozs7Ozs7QUFBQSxJQUFNQSxVQUFVLEdBQUcsU0FBYkEsVUFBYSxHQUFNO0FBQ3ZCQyxFQUFBQSxPQUFPLENBQUNDLEdBQVIsQ0FBWSw4QkFBWjtBQUVBOzs7O0FBR0EsTUFBSUMsYUFBYSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsY0FBdkIsQ0FBcEI7QUFDQSxNQUFJQyxZQUFZLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixnQkFBdkIsQ0FBbkI7QUFFQSxNQUFJRSxXQUFXLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixPQUF2QixDQUFsQjtBQUNBRSxFQUFBQSxXQUFXLENBQUNDLGdCQUFaLENBQTZCLE9BQTdCLEVBQXNDLFlBQU07QUFDMUNDLElBQUFBLEtBQUssQ0FBQyxhQUFELENBQUw7QUFDRCxHQUZEO0FBR0QsQ0FiRDs7ZUFlZVQsVSIsInNvdXJjZXNDb250ZW50IjpbImNvbnN0IG1lbnVNb2JpbGUgPSAoKSA9PiB7XG4gIGNvbnNvbGUubG9nKFwiaW1wb3J0IG1lbnUgbW9iaWxlIHdvcmtpbmcgIVwiKTtcblxuICAvKipcbiAgICogSHlkcmF0ZSB0aGUgbWVudSB3aXRoIHRoZSBpdGVtc1xuICAgKi9cbiAgbGV0IG1lbnVDb250YWluZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI21lbnUtbW9iaWxlXCIpO1xuICBsZXQgbmF2Q29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tYWluLW5hdi1saXN0XCIpO1xuXG4gIGxldCBtZW51RWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubWVudVwiKTtcbiAgbWVudUVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBhbGVydChcIk1lbnUgb3BlbmVkXCIpO1xuICB9KTtcbn07XG5cbmV4cG9ydCBkZWZhdWx0IG1lbnVNb2JpbGU7XG4iXX0=
},{}]},{},[1])