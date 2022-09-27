(window.onload = function (event) {
  var swiper = new Swiper(".carousel", {
    grabCursor: true,
    slidesPerView: 2,
    preloadImages: false,
    loop: true,
    lazy: true,
    autoplay: {
      delay: 3900,
      disableOnInteraction: false
    },

    breakpoints: {
      778: {
        slidesPerView: 3
      },
      998: {
        slidesPerView: 3
      },
      1100: {
        slidesPerView: 5
      },
      1300: {
        slidesPerView: 5
      }
    }
  });
})();
