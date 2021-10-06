$(document).ready(function() {
	$(".afcg_slideshow").backgroundCycle({
		imageUrls: [
			'user/accommodation_facilities/afcg_animation/res/img/town_hotel_01.jpg',
			'user/accommodation_facilities/afcg_animation/res/img/vacation_hotel_01.jpg',
			'user/accommodation_facilities/afcg_animation/res/img/lodge_01.jpg'
		],
		fadeSpeed: 2000,
		duration: 5000,
		backgroundSize: SCALING_MODE_COVER
	});
});