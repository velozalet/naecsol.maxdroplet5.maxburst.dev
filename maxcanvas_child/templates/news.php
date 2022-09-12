<?php
/**
 * Template Name: News
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>

<div class="contact-page-container position-relative mb-md-5 mb-1">
	<?php get_template_part('templates/component/page-banner');?>

	<div class="container-lg mt-md-5 mt-2">
		<?php get_template_part('templates/component/recent-news-posts');?>
	</div>
</div>

<?php get_footer();?>