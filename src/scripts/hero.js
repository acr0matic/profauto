const hero = document.getElementById('hero');

if (hero) {
  new Swiper(hero.querySelector('.slider-hero'), {
    simulateTouch: false,

    speed: 500,
    grabCursor: true,
    spaceBetween: 30,

    loop: true,

    effect: 'creative',
    creativeEffect: {
      prev: {
        opacity: 0,
        translate: [0, 0, -400],
      },
      next: {
        translate: ['100%', 0, 0],
      },
    },

    a11y: {
      enabled: false,
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },

    pagination: {
      el: '#hero .swiper-pagination',
      clickable: true,
    },
  });
}