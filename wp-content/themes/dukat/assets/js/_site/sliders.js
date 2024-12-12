import Swiper from "swiper/bundle";

'use strict';

const Sliders = {
	init: function () {
		const swiperCards = new Swiper('.js-swiper-cards', {
			slidesPerView: 1.6,
			spaceBetween: 10,
			// autoplay: {
			// 	delay: 3000, // Pauza između prelaza u milisekundama (3000ms = 3 sekunde)
			// 	disableOnInteraction: false, // Nastavlja autoplay čak i nakon interakcije (npr. prevlačenja)
			// },
			breakpoints: {
				576: {
					slidesPerView: 2.3,
				},
				767: {
					slidesPerView: 4.3,
				},
				991: {
					slidesPerView: 4.1,
					spaceBetween: 20,
				},
			},
		});
	},
};

export default Sliders;


