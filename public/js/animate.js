/******/ (() => { // webpackBootstrap
/*!*********************************!*\
  !*** ./resources/js/animate.js ***!
  \*********************************/
// resources/js/animate.js
document.addEventListener('DOMContentLoaded', function () {
  var options = {
    threshold: 0.1
  };
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target;
        var animation = el.dataset.animate;
        if (animation) {
          el.classList.add("animate-".concat(animation));
          el.classList.remove('opacity-0');
        }
      }
    });
  }, options);
  document.querySelectorAll('[data-animate]').forEach(function (el) {
    return observer.observe(el);
  });
});
/******/ })()
;