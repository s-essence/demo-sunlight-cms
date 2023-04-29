'use strict';

window.addEventListener('load', () => {
  mvAnimation();
  voiceSlider();
});

document.addEventListener('DOMContentLoaded', () => {
});

function voiceSlider() {
  const voiceSwiper = new Swiper(".js-voice-slider", {
    autoplay: {
      delay: 6000,
    },
    loop: true,
    initialSlide: 0,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      // 768px以上の場合
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
        disableOnInteraction: false,
        autoplayDisableOnInteraction: false,
      },
      // 768px以上の場合
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
        disableOnInteraction: false,
        autoplayDisableOnInteraction: false,
      }
    },
  });
}