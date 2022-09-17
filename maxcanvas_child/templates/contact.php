<?php
/**
 * Template Name: Contact
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php //dd( get_field('info_block', get_the_ID() )['code_form_jotform'] );
$get_queried_object = get_queried_object();
?>
<div class="contact-page-container position-relative mb-5">
	<?php get_template_part('templates/component/page-banner');?>

	<section class="contact-page-info-block">
		<div class="container-lg">
			<div class="row py-md-5 py-3 mt-5 mx-sm-0 mx-2 px-md-0 px-4">
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--address" href="<?=( get_fields('options')['site_settings']['link_on_locationgoogle_map'] )? get_fields('options')['site_settings']['link_on_locationgoogle_map']: '#';?>" target="_blank" data-bs-toggle="tooltip" title="Show On Google Map">
						<?php if( get_field('info_block', get_the_ID() )['address_icon'] ):?>
						<figure class="mb-md-3 mb-1 mt-md-0 mt-2"><img src="<?=get_field('info_block', get_the_ID() )['address_icon'];?>/" alt="Naecsol Address"></figure>
						<?php else:?>
							<figure class="mb-md-3 mb-1 mt-md-0 mt-2"><img src="<?=get_stylesheet_directory_uri();?>/img/address-icon.svg" alt="Naecsol Address"></figure>
						<?php endif;?>
						<h5><?=get_field('info_block', get_the_ID() )['address_title'];?></h5>
						<p>
							<?=( get_fields('options')['site_settings']['location_place'] )? get_fields('options')['site_settings']['location_place']: '';?>
							<?=( get_fields('options')['site_settings']['country_and_city'] )? get_fields('options')['site_settings']['country_and_city']: '';?>
						</p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--phone" href="tel:<?=( get_fields('options')['site_settings']['site_telephon'] )? get_numerics( get_fields('options')['site_settings']['site_telephon'] ): '#';?>" data-bs-toggle="tooltip" title="Call The Phone">
						<?php if( get_field('info_block', get_the_ID() )['phone_icon'] ):?>
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_field('info_block', get_the_ID() )['phone_icon'];?>/" alt="Naecsol Phone"></figure>
						<?php else:?>
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_stylesheet_directory_uri();?>/img/phone-call-icon.svg" alt="Naecsol Phone"></figure>
						<?php endif;?>
						<h5><?=get_field('info_block', get_the_ID() )['phone_title'];?></h5>
						<p><?=( get_fields('options')['site_settings']['site_telephon'] )? get_fields('options')['site_settings']['site_telephon']: '';?></p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--email" href="mailto:<?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '#';?>" data-bs-toggle="tooltip" title="Go To Send Email">
						<?php if( get_field('info_block', get_the_ID() )['email_icon'] ):?>
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_field('info_block', get_the_ID() )['email_icon'];?>/" alt="Naecsol Email"></figure>
						<?php else:?>
						<figure class="mb-md-3 mb-1 mt-md-0 mt-3"><img src="<?=get_stylesheet_directory_uri();?>/img/email-us-icon.svg" alt="Naecsol Email"></figure>
						<?php endif;?>
						<h5><?=get_field('info_block', get_the_ID() )['email_title'];?></h5>
						<p><?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '';?></p>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-page-form text-center">
		<div class="mt-5"><?=$get_queried_object->post_content;?></div>
		<div id="code_form_jotform_contact_page"><?=get_field('info_block', get_the_ID() )['code_form_jotform'];?></div>
	</section>
</div>
<?php get_footer();?>