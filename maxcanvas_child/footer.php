<?php
/**
 * FOOTER
 *
 * @package maxcanvas
 */
?>
<footer class="site-footer position-relative" role="contentinfo"> <!--style="display: none !important;"-->
	<div class="container-lg">
		<div class="row">
			<div class="footer-text">
				<div class="row">
					<div class="col">
						<div class="row align-items-center">
							<div class="col-sm-auto col-6 text-sm-start text-end">
								<a class="navbar-brand" href="<?=esc_url(home_url());?>">
								<?php if( get_fields('options')['site_settings']['site_logo']['url'] ):?>
									<img src="<?=get_fields('options')['site_settings']['site_logo']['url'];?>" alt="<?=get_bloginfo('name');?>">
								<?php endif;?>
								</a>
							</div>
							<div class="col-sm-auto col-6 ps-0"> <div class="company-name">naecsol</div> </div>
						</div>
					</div>
					<div class="col-sm col-12 align-self-center px-lg-5 px-0 pt-sm-0 pt-3">
						<div class="company-description px-lg-5 px-md-0 px-2"><?=get_field('footer_text','options');?></div>
					</div>
				</div>
				<hr>
			</div>

			<div class="footer-info pt-2">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-auto">

<!--						<ul class="navbar-nav">-->
<!--							<li class="nav-item">-->
<!--								<a class="nav-link current-menu-item fw-bold pt-1" aria-current="page" href="#">Home</a>-->
<!--							</li>-->
<!--							<li class="nav-item">-->
<!--								<a class="nav-link fw-bold py-1" href="#">Services</a>-->
<!--							</li>-->
<!--							<li class="nav-item">-->
<!--								<a class="nav-link fw-bold py-1" href="#">Resources</a>-->
<!--							</li>-->
<!--							<li class="nav-item">-->
<!--								<a class="nav-link fw-bold py-1" href="#">News</a>-->
<!--							</li>-->
<!--							<li class="nav-item">-->
<!--								<a class="nav-link fw-bold py-1" href="#">Contact</a>-->
<!--							</li>-->
<!--						</ul>-->
						<?php
						$args = [
							'theme_location'  => 'secondary',
							'menu'            => 'Footer Menu',
							'container'       => false,
							'menu_class'      => 'navbar-nav',
							'menu_id'         => '',
							'add_li_class'     => 'nav-item',
							'link_class'     => 'nav-link fw-bold py-1',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						];
						wp_nav_menu($args );
						?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col">
						<div class="services-pages-list">
							<div class="fw-bold pb-2">Services</div>
							<?php
							$menuitems = get_all_menu('primary','ASC');
							$services_page_id = 55;
							$sub_items_services = get_subitems_for_menuitem($menuitems, $services_page_id, 'DESC');
							?>
							<ul class="ps-0">
								<?php foreach( $sub_items_services as $sub_i_services ):?>
									<li class="py-1" data-itemid="<?=$sub_i_services->ID;?>" data-itemobject="<?=$sub_i_services->object;?>">
										<a href="<?=$sub_i_services->url;?>"><?=$sub_i_services->title;?></a>
									</li>
								<?php endforeach;?>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-12 mt-lg-0 mt-3">
						<div class="contact-us">
							<div class="fw-bold">Contact Us</div>
							<div>
								<ul class="ps-0">
									<li>
									<?php if( get_fields('options')['site_settings']['location_place'] ):?>
										<a class="__location" href="<?=get_fields('options')['site_settings']['link_on_locationgoogle_map'];?>" target="_blank"><i class="fa fa-map-marker circle"></i><?=get_fields('options')['site_settings']['location_place'];?></a>
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['country_and_city'] ):?>
										<div>
											<a href="<?=get_fields('options')['site_settings']['link_on_locationgoogle_map'];?>" target="_blank"><?=get_fields('options')['site_settings']['country_and_city'];?></a>
										</div>
									<?php endif;?>
									</li>
									<li class="pt-3 pb-1">
										<a class="__email py-2" href="mailto:<?=get_fields('options')['site_settings']['site_email'];?>"><i class="fa fa-envelope-o circle"></i><?=get_fields('options')['site_settings']['site_email'];?></a>
									</li>
									<li class="py-1">
										<a class="__tel py-2" href="tel:<?=get_numerics( get_fields('options')['site_settings']['site_telephon'] );?>"><i class="fa fa-phone circle"></i><?=get_fields('options')['site_settings']['site_telephon'];?></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-12 text-lg-end text-md-start">
						<div class="subscribe-us">
							<div class="fw-bold pb-2">Subscribe to our newsletter</div>
							<p class="text-lg-center text-md-start">E-mail</p>
							<button type="button" class="button button-blue me-2 text-center">Subscribe</button>

							<div class="follow-us mt-3">
								<div> <span>Follow us</span>
								<?php if( get_fields('options')['site_settings']['social_links'] ):?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['facebook'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["facebook"];?>" target="_blank"><i class="fa fa-facebook circle">&nbsp;</i></a>
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['linkedin'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["linkedin"];?>" target="_blank"><i class="fa fa-linkedin circle"></i></a>
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['twitter'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["twitter"];?>" target="_blank"><i class="fa fa-twitter circle"></i></a>
									<?php endif;?>
								<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-banner" >
				<hr>
				<div class="row">
					<div class="col text-center">
						<div class="copyright-text"> <?=get_field('copyright_text','options');?> <?=date("Y");?></div>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .container -->

</footer><!-- .site-footer -->
<?php wp_footer(); ?>
</body>
</html>
