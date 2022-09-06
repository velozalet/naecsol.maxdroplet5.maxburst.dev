<?php
//dd(get_sub_field('our_clients_section_background') );
//dd(get_sub_field('our_clients_section_title') );
//dd(get_sub_field('our_clients_section_logos') );
		//dd(get_sub_field('our_clients_section_logos')[0]['client_logo'] )
?>
<div id="our_clients_section_container" class="our-clients-section-container mt-5 position-relative">
	<div class="background-image d-grid justify-content-center align-items-center" style="background-image: url(https://naecsol.maxdroplet5.maxburst.dev/wp-content/uploads/2022/09/banner-color2.png);">
		<div class="our-clients-section-content position-relative" style="z-index:1;">
			<div class="container">
				<h2><?=get_sub_field('our_clients_section_title');?></h2>
				<div id="testimonials_slider" class="testimonials-slider splide" role="group" aria-label="Splide Basic HTML Example">
					<div class="splide__track">
						<ul class="splide__list">
							<li class="splide__slide" style="background:white; outline:1px solid black;">
								<div>
									<h4>Title - 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<button class="btn btn-success">Learn more</button>
									<p>Andrew</p>
								</div>
							</li>
							<li class="splide__slide" style="background:white; outline:1px solid black;">
								<div>
									<h4>Title - 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<button class="btn btn-success">Learn more</button>
									<p>Andrew</p>
								</div>
							</li>
							<li class="splide__slide" style="background:white; outline:1px solid black;">
								<div>
									<h4>Title - 3</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<button class="btn btn-success">Learn more</button>
									<p>Andrew</p>
								</div>
							</li>
							<li class="splide__slide" style="background:white; outline:1px solid black;">
								<div>
									<h4>Title - 4</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<button class="btn btn-success">Learn more</button>
									<p>Andrew</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>