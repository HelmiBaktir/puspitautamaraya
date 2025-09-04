/******/ (() => { // webpackBootstrap
/*!******************************************!*\
  !*** ./resources/js/scroll-animation.js ***!
  \******************************************/
document.addEventListener('DOMContentLoaded', function () {
  var animatedEls = document.querySelectorAll('.scroll-animate, [id^="fact-"]');
  var observer = new IntersectionObserver(function (entries, obs) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        var el = entry.target;

        // Jika elemen punya ID "fact-..."
        if (el.id && el.id.startsWith('fact-')) {
          var id = el.id.split('-')[1];
          var value = parseInt(el.dataset.value);
          var max = parseInt(el.dataset.max);
          var valueDisplay = document.getElementById("value-".concat(id));
          var circle = document.getElementById("circle-".concat(id));
          var circumference = 2 * Math.PI * 45;
          var percent = value / max;
          var offset = circumference * (1 - percent);

          // Animasi angka
          var current = 0;
          var duration = 1500;
          var interval = 10;
          var steps = duration / interval;
          var increment = value / steps;
          var counter = setInterval(function () {
            current += increment;
            if (current >= value) {
              current = value;
              clearInterval(counter);
            }
            valueDisplay.textContent = Math.round(current);
          }, interval);

          // Stroke SVG
          circle.style.transition = 'stroke-dashoffset 1.5s ease-out';
          circle.style.strokeDashoffset = offset;

          // Tambahkan animasi untuk `fact-` jika perlu
          el.classList.remove('opacity-0');
          el.classList.add('animate-fade-in-up');
        } else {
          // Untuk semua elemen biasa pakai .scroll-animate
          el.classList.remove('opacity-0');
          el.classList.add('animate-slide-up-slow');
        }
        obs.unobserve(el);
      }
    });
  }, {
    threshold: 0.3
  });
  animatedEls.forEach(function (el) {
    return observer.observe(el);
  });
});
/******/ })()
;