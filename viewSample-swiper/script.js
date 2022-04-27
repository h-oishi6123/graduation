"use strict"

const swiper = new Swiper('.swiper-container', {

    keyboard: true,
    direction: 'horizontal',
    slidesPerView:2,
    slidesPerGroup:2,

    pagination: {
        el: 'swiper-pagination',
    },

    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    scrollbar: {
        el: 'swiper-scrollbar',
    },

});


// バーガーメニュー
$(function () {
    $('.menu-btn').on('click', function () {        // js-btnクラスをクリックすると、
      $(this).toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
      return false;
    })
  });