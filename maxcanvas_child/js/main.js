document.addEventListener( 'DOMContentLoaded', function () { //console.log('init');

	/*Bootstrap 5x Popover initialization*/
	let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	let popoverList = popoverTriggerList.map(function (popoverTriggerEl){ return new bootstrap.Popover(popoverTriggerEl) });
	/*__/Bootstrap 5x Popover initialization*/
	/*Bootstrap 5x Tooltip initialization*/
	let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl){ return new bootstrap.Tooltip(tooltipTriggerEl) });
	/*__/Bootstrap 5x Tooltip initialization*/

	/*Сustom PAUSE/PLAY button control for video <video source></video> */
	function directionVideoPlayer(videoPlayerElem) {
		return function(event) {
			if(videoPlayerElem.paused) {
				videoPlayerElem.play(); //btn.innerHTML = "Pause";
				event.currentTarget.classList.remove('fa-play-circle');
				event.currentTarget.classList.add('fa-pause'); console.log("Pause");
			}else {
				videoPlayerElem.pause(); //btn.innerHTML = "Play";
				event.currentTarget.classList.remove('fa-pause');
				event.currentTarget.classList.add('fa-play-circle'); console.log("Play");
			}
		}
	}
	/*__/Сustom PAUSE/PLAY button control for video <video source></video> */

	/*#BANNER*/
	if( document.querySelector('nav.navbar') ){
		const headerBanner = document.querySelector('.header-banner');
		const navbar = document.querySelector('nav.navbar');
		const navbarContainer = navbar.querySelector('.container');
		const btnNavbarToggler = navbar.querySelector('button.navbar-toggler');

		btnNavbarToggler.addEventListener('click', (event) => { //console.log('OPEN');
			if( !event.currentTarget.classList.contains('collapsed') ){
				navbarContainer.style.backgroundColor = '#EAEAEA';
				headerBanner.classList.toggle('d-none');
				event.currentTarget.nextElementSibling.classList.add('vh-100');
			}else{
				navbarContainer.style.backgroundColor = 'inherit'; //console.log('CLOSED');
				headerBanner.classList.toggle('d-none');
				event.currentTarget.nextElementSibling.classList.remove('vh-100');
			}
		});
	}
	/*__/#BANNER*/

	/*#HOME PAGE*/
	let splideBillboardSlide = document.getElementById('splide_billboard_slide');
	if(splideBillboardSlide){
		let splideBillboardSlidesCollectons = splideBillboardSlide.querySelectorAll('.splide__list > li.billboard-slide--item');
		//------------------------------------------------
		function sliderProrressActiveMarker(elem, index){
			elem.querySelectorAll('.slide-number--progress .d-inline-block')[index].classList.add('active');
		}

		for( i=0; i < splideBillboardSlidesCollectons.length; i++ ){
			sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],i);
			if( i !== splideBillboardSlidesCollectons.length && i > 0 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 1 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 2 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 3 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 4 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-5));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 5 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-6));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 6 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-6));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-7));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 7 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-6));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-7));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-8));
			}
			if( i !== splideBillboardSlidesCollectons.length && i > 8 ){
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-1));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-2));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-3));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-4));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-6));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-7));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-8));
				sliderProrressActiveMarker(splideBillboardSlidesCollectons[i],(i-9));
			}
		}

		//--------------------------------------------------------------

		const splideBillboardSettings = {
			type: 'loop', //'slide'|'loop'|'fade'
			autoplay: globalData.billboardSettings_autoplay,
			speed: 2000,
			interval: globalData.billboardSettings_speed * 1000,
			arrows: globalData.billboardSettings_arrows_navigation
		}
		if( splideBillboardSlidesCollectons.length === 1 ){ splideBillboardSettings.type = 'fade' }

		/*Splide slider on Billboard*/
		var splideBillboard = new Splide( '#splide_billboard_slide',{ //All settings: https://splidejs.com/guides/options
			type: splideBillboardSettings.type,
			pagination: false,
			autoplay: splideBillboardSettings.autoplay,
			speed: splideBillboardSettings.speed,
			interval: splideBillboardSettings.interval,
			arrows: splideBillboardSettings.arrows
		} );
		splideBillboard.mount();

		var splideBillboardSub = new Splide( '#splide_billboard_sub_slide', { //All settings: https://splidejs.com/guides/options
			type: 'loop',
			pagination: false,
			autoplay: false,
			speed: 2000,
			// rewindSpeed: 10000
			//waitForTransition: true,
			interval: 3000,
			arrows: true,
			//fixedWidth : '100%',
			//fixedHeight: 'auto',
			//gap        : '1rem',
		} );
		splideBillboardSub.mount();
		/*__/Splide slider on Billboard*/
	}

	/*Flexible-Content: .full-video-section-container*/
	const video = document.getElementById("full_video_section_video");
	const __video_btn = document.querySelector(".__video--btn");
	if(video){
		//PAUSE/PLAY button control for video <video source></video>
		if(__video_btn){
			__video_btn.addEventListener( 'click', directionVideoPlayer(video) );
		}
		//Open full video-player for video <video source></video>
		video.addEventListener('dblclick', function(){
			if(this.requestFullscreen) {
				this.requestFullscreen();
			}else if(this.mozRequestFullScreen){
				this.mozRequestFullScreen(); /*Mozilla FF*/
			}else if(this.webkitRequestFullscreen) { /*Safari*/
				this.webkitRequestFullscreen();
			}else if(this.msRequestFullscreen) { /*IE11*/
				this.msRequestFullscreen();
			}
		});
	}
	/*__/Flexible-Content: .full-video-section-container*/
	
	/*__/Flexible-Content: .our-clients-section-container*/
	if( document.getElementById('testimonials_slider') ){
		splideTestimonialsSettings = {
			autoplay: (globalData.testimonialSliderAutoplay === '1') ? true : false,
			interval: globalData.testimonialSliderSpeed * 1000,
		}

		var splideTestimonials = new Splide( '#testimonials_slider',{ //All settings: https://splidejs.com/guides/options
			type: 'loop',
			perPage: 2,
			breakpoints: {
				767: {
					perPage: 1,
					perMove: 1
				}
			},
			// width: '100%',
			// focus : 'center',
			gap: '25px', //padding: '20%',
			perMove: 2,
			speed: 2000,
			interval: splideTestimonialsSettings.interval,
			pagination: false,
			autoplay: splideTestimonialsSettings.autoplay,
			arrows: true
		} );
		splideTestimonials.mount();


		const testimonialModalWindow = document.getElementById('learnMoreTestimonial');
		let testimonialTitleModal = testimonialModalWindow.querySelector('.modal-body .modal-title'),
			testimonialTextModal = testimonialModalWindow.querySelector('.modal-body .modal-text'),
			testimonialReviewerNameModal = testimonialModalWindow.querySelector('.modal-body .modal-reviewer-of-name'),
			testimonialPositionReviewerModal = testimonialModalWindow.querySelector('.modal-body .modal-position-of-reviewer');

		const testimonialsTriggerModalWindowsCollection = document.querySelectorAll('.our-clients-section-container .testimonials-slider li.splide__slide a.learn-more-testimonial'); //console.log(testimonialsTriggerModalWindowsCollection);

		function xxFunction(event){
			let titleTestimonial = event.currentTarget.parentElement.querySelector('.title-testimonial').textContent; testimonialTitleModal.innerHTML = titleTestimonial;

			/*let textTestimonial = event.currentTarget.parentElement.querySelector('.text-testimonial-full > div');  console.log(textTestimonial);
			testimonialTextModal.replaceWith(textTestimonial);*/
			let textTestimonial = event.currentTarget.parentElement.querySelector('.text-testimonial-full > div').textContent; testimonialTextModal.innerHTML = textTestimonial;

			let reviewerNameTestimonial = event.currentTarget.parentElement.querySelector('.reviewer-of-name').textContent; testimonialReviewerNameModal.innerHTML = reviewerNameTestimonial;
			let positionReviewerTestimonial = event.currentTarget.parentElement.querySelector('.position-of-reviewer').textContent; testimonialPositionReviewerModal.innerHTML = positionReviewerTestimonial;
		}
		testimonialsTriggerModalWindowsCollection.forEach(
			(item, index, collection) => { item.addEventListener('click', xxFunction); }
		);
	}

	if( document.getElementById('client_logos_slider') ){
		clientLogosSliderSettings = {
			autoplay: (globalData.clientsLogosSliderAutoplay === '1') ? true : false,
			interval: globalData.clientsLogosSliderSpeed * 1000,
		}

		var clientLogosSlider = new Splide( '#client_logos_slider',{ //All settings: https://splidejs.com/guides/options
			type: 'loop',
			perPage: 5,
			breakpoints: {
				767: {
					perPage: 2,
					perMove: 1
				}
			},
			// width: '100%',
			// focus : 'center',
			gap: '25px', //padding: '20%',
			perMove: 1,
			pagination: false,
			speed: 2000,
			autoplay: clientLogosSliderSettings.autoplay,
			interval: clientLogosSliderSettings.interval,
			arrows: true
		} );
		clientLogosSlider.mount();
	}
	/*__/Flexible-Content: .our-clients-section-container*/

	/*Flexible-Content: .recent-news-posts-container*/
	if( document.getElementById('recent_news_slider') ){
		var recentNewsSlider = new Splide( '#recent_news_slider',{ //All settings: https://splidejs.com/guides/options
			type: 'loop',
			perPage: 1,
			// width: '100%',
			// focus : 'center',
			gap: '25px', //padding: '20%',
			perMove: 1,
			pagination: false,
			autoplay: false,
			arrows: true
		} );
		recentNewsSlider.mount();
	}
	/*__/Flexible-Content: .recent-news-posts-container*/
	/*__/#HOME PAGE*/


	/*Single Page Service*/
	const videoSingleServicesPage = document.getElementById('single_service_bg_video');
	if(videoSingleServicesPage){
		//PAUSE/PLAY button control for video <video source></video>
		if(__video_btn){
			__video_btn.addEventListener( 'click', directionVideoPlayer(videoSingleServicesPage) );
		}
		//Open full video-player for video <video source></video>
		videoSingleServicesPage.addEventListener('dblclick', function(){
			if(this.requestFullscreen) {
				this.requestFullscreen();
			}else if(this.mozRequestFullScreen){
				this.mozRequestFullScreen(); /*Mozilla FF*/
			}else if(this.webkitRequestFullscreen) { /*Safari*/
				this.webkitRequestFullscreen();
			}else if(this.msRequestFullscreen) { /*IE11*/
				this.msRequestFullscreen();
			}
		});
	}
	if( document.getElementById('services_list_mobile') ){
		var servicesListSlider = new Splide( '#services_list_mobile',{ //All settings: https://splidejs.com/guides/options
			type: 'loop',
			perPage: 1,
			// width: '100%',
			// focus : 'center',
			gap: '25px', //padding: '20%',
			perMove: 1,
			pagination: false,
			autoplay: false,
			arrows: true
		} );
		servicesListSlider.mount();
	}
	/*__/Single Page Service*/

	/*Single Page News*/
	const video1SingleNews = document.getElementById('single_news_video1');
	if(video1SingleNews){
		//PAUSE/PLAY button control for video <video source></video>
		const __news_video1_btn = document.getElementById('singleNewsVideo1Btn');
		if(__news_video1_btn){
			__news_video1_btn.addEventListener( 'click', directionVideoPlayer(video1SingleNews) );
		}
		//Open full video-player for video <video source></video>
		video1SingleNews.addEventListener('dblclick', function(){
			if(this.requestFullscreen) {
				this.requestFullscreen();
			}else if(this.mozRequestFullScreen){
				this.mozRequestFullScreen(); /*Mozilla FF*/
			}else if(this.webkitRequestFullscreen) { /*Safari*/
				this.webkitRequestFullscreen();
			}else if(this.msRequestFullscreen) { /*IE11*/
				this.msRequestFullscreen();
			}
		});
	}
	const video2SingleNews = document.getElementById('single_news_video2');
	if(video2SingleNews){
		//PAUSE/PLAY button control for video <video source></video>
		const __news_video2_btn = document.getElementById('singleNewsVideo2Btn');
		if(__news_video2_btn){
			__news_video2_btn.addEventListener( 'click', directionVideoPlayer(video2SingleNews) );
		}
		//Open full video-player for video <video source></video>
		video2SingleNews.addEventListener('dblclick', function(){
			if(this.requestFullscreen) {
				this.requestFullscreen();
			}else if(this.mozRequestFullScreen){
				this.mozRequestFullScreen(); /*Mozilla FF*/
			}else if(this.webkitRequestFullscreen) { /*Safari*/
				this.webkitRequestFullscreen();
			}else if(this.msRequestFullscreen) { /*IE11*/
				this.msRequestFullscreen();
			}
		});
	}
	/*__/Single Page News*/

	/*Preloader*/
	const loading = document.getElementById('loading'); if(loading){ setTimeout(() => { loading.remove(); },1500) };
	/*__/Preloader*/
});

new WOW().init(); //initial the WOW animation library
