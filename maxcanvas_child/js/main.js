document.addEventListener( 'DOMContentLoaded', function () { //console.log('init');

	/*Bootstrap 5x Popover initialization*/
	let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	let popoverList = popoverTriggerList.map(function (popoverTriggerEl){ return new bootstrap.Popover(popoverTriggerEl) });
	/*__/Bootstrap 5x Popover initialization*/
	/*Bootstrap 5x Tooltip initialization*/
	let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl){ return new bootstrap.Tooltip(tooltipTriggerEl) });
	/*__/Bootstrap 5x Tooltip initialization*/

	/*#BANNER*/
	if( document.querySelector('nav.navbar') ){
		const headerBanner = document.querySelector('.header-banner');
		const navbar = document.querySelector('nav.navbar');
		const navbarContainer = navbar.querySelector('.container');
		const btnNavbarToggler = navbar.querySelector('button.navbar-toggler');

		btnNavbarToggler.addEventListener('click', (event) => {
			if( !event.currentTarget.classList.contains('collapsed') ){
				navbarContainer.style.backgroundColor = '#EAEAEA';
				headerBanner.classList.toggle('d-none');
			}else{
				navbarContainer.style.backgroundColor = 'inherit';
				headerBanner.classList.toggle('d-none');
			}
		});
	}
	/*__/#BANNER*/

	/*#HOME PAGE*/
	let splideBillboardSlide = document.getElementById('splide_billboard_slide');
	let splideBillboardSlidesCollectons = splideBillboardSlide.querySelectorAll('.splide__list > li.billboard-slide--item');

	//------------------------------------------------
	function sliderProrressActiveMarker(elem, index){
		elem.querySelectorAll('.slide-number--progress .d-inline-block')[index].classList.add('active');
	}
	/*
	console.log( selectorX(splideBillboardSlidesCollectons[0],0) );

	console.log( selectorX(splideBillboardSlidesCollectons[1],0) );
	console.log( selectorX(splideBillboardSlidesCollectons[1],1) );

	console.log( selectorX(splideBillboardSlidesCollectons[2],0) );
	console.log( selectorX(splideBillboardSlidesCollectons[2],1) );
	console.log( selectorX(splideBillboardSlidesCollectons[2],2) );
	*/

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


	/*Flexible-Content: .full-video-section-container*/
	const video = document.getElementById("full_video_section_video");
	const btn = document.getElementById("fullVideoSectionBtn");
	if(video){
		if(btn){
			function fullVideoSectionContainerDirectionVideoPlayer(event) {
				if(video.paused) {
					video.play(); //btn.innerHTML = "Pause";
					event.currentTarget.classList.remove('fa-play-circle');
					event.currentTarget.classList.add('fa-pause');
				}else {
					video.pause(); //btn.innerHTML = "Play";
					event.currentTarget.classList.remove('fa-pause');
					event.currentTarget.classList.add('fa-play-circle');
				}
			}
		}
		btn.addEventListener('click',fullVideoSectionContainerDirectionVideoPlayer);
	}
	/*__/Flexible-Content: .full-video-section-container*/
	
	
	/*__/Flexible-Content: .our-clients-section-container*/
	var splideTestimonials = new Splide( '#testimonials_slider',{ //All settings: https://splidejs.com/guides/options
		type: 'loop',
		perPage: 2,
		breakpoints: {
			767: {
				perPage: 1,
			}
		},
		// width: '100%',
		// focus : 'center',
		gap: '35px', // padding: '20%',
		perMove: 2,
		pagination: false,
		autoplay: false,
		arrows: true
	} );
	splideTestimonials.mount();
	/*__/Flexible-Content: .our-clients-section-container*/
	
	/*__/#HOME PAGE*/
});