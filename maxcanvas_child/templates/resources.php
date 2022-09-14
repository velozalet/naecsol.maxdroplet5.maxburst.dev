<?php
/**
 * Template Name: Resources
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php
$news_cat_ID = 6; //This is category "Resources" of News Post
$number_of_posts_to_display = -1;
$resources_posts = get_needs_posts('post', $number_of_posts_to_display, $news_cat_ID, '', 'date', 'ASC'); //dd($resources_posts);
$resource_upload = ''; $resource_type = ''; $post_attachment_img = '';
?>
<div class="resources-page-container position-relative mb-md-5 mb-1">
	<?php //get_template_part('templates/component/page-banner');?>

	<!--All resources except "Excel"-->
	<div class="container-lg mt-md-5 mt-2">
		<h2 style="display:none;">Helpful Links</h2>
		<div class="row mt-3 justify-content-center">
		<?php foreach( $resources_posts as $resource ):?>
			<?php if( get_field('resource_type_selection', $resource->ID) !== 'excel_document' ):?>
			<div class="resources-helpful-links col-xl-4 col-md-6 col-12 mb-sm-0 mb-2">
				<?php
				$post_attachment_img = wp_get_attachment_url( get_post_thumbnail_id($resource->ID) );
				$resource_type_selection = get_field('resource_type_selection', $resource->ID);
				switch($resource_type_selection){
					case 'another_site':
						$resource_upload = get_field('_link_to_third_party_site', $resource->ID)["link_to_site"];
						$resource_type = 'Go To Site';
						$post_attachment_img = ( wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) ) ? wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) : get_stylesheet_directory_uri().'/img/resources-default.png';
						break;
					case 'pdf_document':
						$resource_upload = get_field('_pdf_document', $resource->ID)["pdf_file_upload"]["url"];
						$resource_type = 'PDF Document';
						$post_attachment_img = ( wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) ) ? wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) : get_stylesheet_directory_uri().'/img/pdf_default.png';
						break;
					case 'video':
						$resource_upload = get_field('_video', $resource->ID)["file_upload"]["url"];
						$resource_type = 'Video file';
						$post_attachment_img = ( wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) ) ? wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) : get_stylesheet_directory_uri().'/img/video_default.png';
						break;
				}
				?>
				<div class="news-post helpful-post" data-postid="<?=$resource->ID;?>">
					<a class="position-relative" href="<?=$resource_upload;?>" target="_blank" data-bs-toggle="tooltip" title="<?=$resource_type;?>">
						<?php if( $resource_type_selection !== 'video' ):?>
						<article class="news-post-article news-post-article-helpful" style="background-image:url(<?=$post_attachment_img;?>);"></article>
						<?php else:?>
						<article class="news-post-article news-post-article-helpful" style="background-image:url(<?=$post_attachment_img;?>);">
							<?php if( wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) ):?>
							<i class="fa fa-play-circle __video--btn"></i>
							<?php endif;?>
						</article>
						<?php endif;?>
					</a>
					<p class="news-title"><a href="<?=$resource_upload;?>" target="_blank"><?=$resource->post_title;?></a></p>
				</div>
			</div>
			<?php endif;?>
		<?php endforeach;?>
		</div>
		<hr style="color:#002557; display:none;">
	</div>
	<!--All resources except "Excel"-->

	<!--Excel documents-->
	<div class="container-lg mt-md-5 mt-2" style="display:none;">
		<h2>FORMS</h2>
		<div class="row mt-3 justify-content-center">
			<?php foreach( $resources_posts as $resource ):?>
				<?php if( get_field('resource_type_selection', $resource->ID) == 'excel_document' ):?>
					<div class="resources-excels-forms col-xl-4 col-md-6 col-12 mb-sm-0 mb-2">
						<?php
						$post_attachment_img = wp_get_attachment_url( get_post_thumbnail_id($resource->ID) );
						$resource_type_selection = get_field('resource_type_selection', $resource->ID);
						switch($resource_type_selection){
							case 'excel_document':
								$resource_upload = get_field('_excel_document', $resource->ID)["excel_file_upload"]["url"];
								$resource_type = 'Excel Document';
								$post_attachment_img = ( wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) ) ? wp_get_attachment_url( get_post_thumbnail_id($resource->ID) ) : get_stylesheet_directory_uri().'/img/excel_default.png';
								break;
						}
						?>

						<div class="news-post helpful-post" data-postid="<?=$resource->ID;?>">
							<a class="position-relative" href="<?=$resource_upload;?>" target="_blank" data-bs-toggle="tooltip" title="<?=$resource_type;?>">
								<article class="news-post-article news-post-article-helpful" style="background-image:url(<?=$post_attachment_img;?>);"></article>
							</a>
							<p class="news-title"><a href="<?=$resource_upload;?>" target="_blank"><?=$resource->post_title;?></a></p>
						</div>

					</div>
				<?php endif;?>
			<?php endforeach;?>
		</div>
	</div>
	<!--/Excel documents-->
</div>

<?php get_footer();?>