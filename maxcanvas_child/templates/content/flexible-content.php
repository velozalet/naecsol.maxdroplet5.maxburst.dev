<?php
/*
	if( have_rows('section_selection') ):
		printf( "Total Templates = %d", count(get_field('section_selection')) ); echo '<br><br>';
		while( have_rows('section_selection') ): the_row();
			echo get_row_layout(), '<br>'; //$layout = get_row_layout(); //Get the row layout.
		endwhile;
	endif;
*/
?>

<?php
if( have_rows('section_selection') ):
	while( have_rows('section_selection') ): the_row();
		if( get_row_layout() == 'about_us_section' ){ get_template_part( 'templates/content/flexible-content/about_us_section' ); }
		if( get_row_layout() == 'full_video_section' ){ get_template_part( 'templates/content/flexible-content/full_video_section' ); }
		if( get_row_layout() == 'our_services_section' ){ get_template_part( 'templates/content/flexible-content/our_services_section' ); }
		if( get_row_layout() == 'our_clients_section' ){ get_template_part( 'templates/content/flexible-content/our_clients_section' ); }
	endwhile;
endif;
?>
