// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     centeredSlides: true,
//     grabCursor: true,
//     effect: "creative",
//     creativeEffect: {
//       prev: {
//         translate: ["-50%", 0, -1],
//       },
//       next: {
//         translate: ["100%", 0, 0],
//       },
//     },
//     // If we need pagination
//     loop: true,
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true, /* false by default */
//       renderBullet: function(index, className) {
//         return '<span class="' + className + '">' + (index + 1) + "</span>";
//       }
//     },
//     // Navigation arrows
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//     /* remove/comment to stop autoplay*/
//     autoplay: { 
//       delay: 7000,
//       disableOnInteraction: false
//     },
//     // keyboard control
//     keyboard: {
//       enabled: true,
//     }
//   });
  
//   /* ###############################  
//          Part 2 of 2 PhotoSwipe v5
//   ##################################  */
//   /* https://photoswipe.com/getting-started/ */
  
//   import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe-lightbox.esm.js';
//   import PhotoSwipe from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.esm.js';
  
//   const photo_swipe_options = {
//     gallery: '#my-gallery',
//     pswpModule: PhotoSwipe,
//     // set background opacity
//     bgOpacity: 1,
//     showHideOpacity: true,
//     children: 'a',
//     loop: true,
//     showHideAnimationType: 'zoom', /* options: fade, zoom, none */
  
//     /* Click on image moves to the next slide */
//     imageClickAction: 'next',
//     tapAction: 'next',
  
//     /* ## Hiding a specific UI element ## */
//     zoom: false,
//     close: true,
//     counter: true,
//     arrowKeys: true,
//     /* ## Options ## */
//     bgOpacity: "1",/* default: 0.8 */
//     wheelToZoom: true, /* default: undefined */
//   };
  
//   const lightbox = new PhotoSwipeLightbox(photo_swipe_options);
  
//   lightbox.init();
  
//   lightbox.on('change', () => {
//     const { pswp } = lightbox;
//     swiper.slideTo(pswp.currIndex, 0, false);
//     console.log('Slide index', pswp.currIndex);
//   });
  
//   /* ### PhotoSwipe events ### */
  
//   lightbox.on('afterInit', () => {
//     const { pswp } = lightbox;
//     if(swiper.params.autoplay && swiper.params.autoplay.enabled){
//       swiper.autoplay.stop();
//     }
//   });
  
//   lightbox.on('closingAnimationStart', () => {
//     const { pswp } = lightbox;
//     swiper.slideTo(pswp.currIndex, 0, false);
//     /* if autoplay enabled == true -> autoplay.start() when close lightbox */
//     if(swiper.params.autoplay && swiper.params.autoplay.enabled){
//       swiper.autoplay.start();
//     }
//   });


