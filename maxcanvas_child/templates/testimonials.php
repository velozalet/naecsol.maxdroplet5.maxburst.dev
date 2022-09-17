<?php
/**
 * Template Name: Testimonials
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$testimonials_posts = get_needs_posts('testimonials', -1, 0, '', 'date', 'ASC');
?>
<div class="testimonials-page-container position-relative mb-md-5 mb-1">
	<?php get_template_part('templates/component/page-banner');?>

	<div class="container-lg mt-md-5 mt-2">
		<?php if( count($testimonials_posts) > 0 ):?>
		<div class="row">
			<?php foreach($testimonials_posts as $testimonial_post):?>
			<div class="col-lg-6 col-12 text-center mb-4">
				<div class="testimonial-item position-relative d-flex align-items-center  py-4 px-4">
					<div class="position-relative text-center" style="z-index:1;">
						<h5 class="modal-title mb-3"><span>“</span><?=$testimonial_post->post_title;?><span>”</span></h5>
						<?=$testimonial_post->post_content;?>
						<p class="modal-reviewer-of-name text-center mt-4 mb-2"><?=get_field('name_of_reviewer',$testimonial_post->ID);?></p>
						<p class="modal-position-of-reviewer text-center mb-0"><?=get_field('caption_under_name_of_reviewer',$testimonial_post->ID);?></p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>
		<?php endif;?>
	</div>

</div>
<?php get_footer();?>
