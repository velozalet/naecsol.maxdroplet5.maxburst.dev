<?php
/**
 * Template Name: Contact
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>

<div class="contact-page-container position-relative mb-5" style="display:none;">
	<?php get_template_part('templates/component/page-banner');?>

	<section class="contact-page-info-block">
		<div class="container-lg">
			<div class="row py-md-5 py-3 mt-5 mx-sm-0 mx-2 px-md-0 px-4">
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--address" href="<?=( get_fields('options')['site_settings']['link_on_locationgoogle_map'] )? get_fields('options')['site_settings']['link_on_locationgoogle_map']: '#';?>" target="_blank" data-bs-toggle="tooltip" title="Show On Google Map">
						<figure class="mb-md-3 mb-1 mt-md-0 mt-2"><img src="<?=get_stylesheet_directory_uri();?>/img/address-icon.svg" alt="Naecsol Address"></figure>
						<h5>Address</h5>
						<p>
							<?=( get_fields('options')['site_settings']['location_place'] )? get_fields('options')['site_settings']['location_place']: '';?>
							<?=( get_fields('options')['site_settings']['country_and_city'] )? get_fields('options')['site_settings']['country_and_city']: '';?>
						</p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--phone" href="tel:<?=( get_fields('options')['site_settings']['site_telephon'] )? get_numerics( get_fields('options')['site_settings']['site_telephon'] ): '#';?>" data-bs-toggle="tooltip" title="Call The Phone">
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_stylesheet_directory_uri();?>/img/phone-call-icon.svg" alt="Naecsol Phone"></figure>
						<h5>Phone</h5>
						<p><?=( get_fields('options')['site_settings']['site_telephon'] )? get_fields('options')['site_settings']['site_telephon']: '';?></p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--email" href="mailto:<?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '#';?>" data-bs-toggle="tooltip" title="Go To Send Email">
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_stylesheet_directory_uri();?>/img/email-us-icon.svg" alt="Naecsol Email"></figure>
						<h5>Email</h5>
						<p><?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '';?></p>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-page-form text-center" style="margin-top:101px;">
		<img class="img-fluid" src="http://naecsol.maxdroplet5.maxburst.dev/wp-content/uploads/2022/09/5522dsd-min.png" alt="">
	</section>
</div>
<?php get_footer();?>