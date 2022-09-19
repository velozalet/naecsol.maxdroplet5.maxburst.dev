<?php
/**
 * FOOTER
 *
 * @package maxcanvas
 */
?>
<footer class="site-footer">
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
										<a class="__location" href="<?=get_fields('options')['site_settings']['link_on_locationgoogle_map'];?>" target="_blank"><img class="me-2 mt-2" src="<?=get_stylesheet_directory_uri();?>/img/gps-footer.svg"/><?=get_fields('options')['site_settings']['location_place'];?></a> <!--<i class="fa fa-map-marker circle"></i>-->
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['country_and_city'] ):?>
										<div>
											<a href="<?=get_fields('options')['site_settings']['link_on_locationgoogle_map'];?>" target="_blank" data-bs-toggle="tooltip" title="Show On Google Map"><?=get_fields('options')['site_settings']['country_and_city'];?></a>
										</div>
									<?php endif;?>
									</li>
									<li class="pt-3 pb-1">
										<a class="__email py-2" href="mailto:<?=get_fields('options')['site_settings']['site_email'];?>"><img class="me-2" src="<?=get_stylesheet_directory_uri();?>/img/email-footer.svg"/><?=get_fields('options')['site_settings']['site_email'];?></a> <!--<i class="fa fa-envelope-o circle"></i>-->
									</li>
									<li class="py-1">
										<a class="__tel py-2" href="tel:<?=get_numerics( get_fields('options')['site_settings']['site_telephon'] );?>"><img class="me-2" src="<?=get_stylesheet_directory_uri();?>/img/phone-footer.svg"/><?=get_fields('options')['site_settings']['site_telephon'];?></a> <!--<i class="fa fa-phone circle"></i>-->
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-12 text-lg-start text-md-center mt-md-0 mt-3">
						<div class="subscribe-us">
							<div class="fw-bold pb-2">Subscribe to our newsletter</div>
							<?php if( get_field('code_form_subscribe_jotform','options') ):?> <?=get_field('code_form_subscribe_jotform','options');?> <?php endif;?>

							<div class="follow-us mt-3">
								<div> <span>Follow us</span>
								<?php if( get_fields('options')['site_settings']['social_links'] ):?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['facebook'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["facebook"];?>" target="_blank"><img class="ms-2" src="<?=get_stylesheet_directory_uri();?>/img/facebook-footer.svg"/></a> <!--<i class="fa fa-facebook circle">&nbsp;</i>-->
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['linkedin'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["linkedin"];?>" target="_blank"><img class="ms-2" src="<?=get_stylesheet_directory_uri();?>/img/in-footer.svg"/></a> <!--<i class="fa fa-linkedin circle"></i>-->
									<?php endif;?>
									<?php if( get_fields('options')['site_settings']['social_links'][0]['twitter'] ):?>
										<a class="social-link" href="<?=get_fields('options')['site_settings']['social_links'][0]["twitter"];?>" target="_blank"><img class="ms-2" src="<?=get_stylesheet_directory_uri();?>/img/twitter-footer.svg"/></a> <!--<i class="fa fa-twitter circle"></i>-->
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
<?php wp_footer();?>
</body>
</html>
