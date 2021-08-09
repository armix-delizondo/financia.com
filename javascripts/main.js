// Open menu

jQuery(document).ready(function(){
	jQuery('.hamburger-menu__button').click(function(){
		jQuery('.menu-mobile').addClass('active');
	});
})

// Close menu

jQuery(document).ready(function(){
	jQuery('.menu-mobile__close-link').click(function(){
		jQuery('.menu-mobile').removeClass('active');
	});
})

jQuery(document).ready(function(){
   jQuery('.menu-mobile a').click(function(){
      jQuery('.menu-mobile').removeClass('active');
   });
})


// Main Slider

const mainSwiper = new Swiper('.cover__container-slider', {

   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

   autoplay: {
   	delay: 5000,
   	disableOnInteraction: false,
  	},

});

// Products Slider

const productsSwiper = new Swiper('.slider-products__container-slider', {
		
   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },

   slidesPerView: 'auto',
   centeredSlides: true,

   breakpoints: {
     	// when window width is >= 640px
     	640: {
      	slidesPerView: 3,
	      spaceBetween: 30,
	      centeredSlides: false,
	      pagination: {
	         el: ".swiper-pagination",
	         clickable: true,
	      },
      }
   },

   autoplay: {
   	delay: 2500,
   	disableOnInteraction: false,
  },

});

// Logos Slider

const logosSwiper = new Swiper('.logos-adhered-businesses__container-slider', {

   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

   autoplay: {
   	delay: 2500,
   	disableOnInteraction: false,
  	},

  	slidesPerView: 2,
  	spaceBetween: 20,

  	pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },

   breakpoints: {
     	// when window width is >= 640px
     	640: {
      	slidesPerView: 4,
	      spaceBetween: 30,
	   }
   },

});