<?php
/**
 * HEADER
 *
 * @package maxcanvas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if (strpos($_SERVER['HTTP_USER_AGENT'],"MSIE 8")) { header("X-UA-Compatible: IE=Edge");} ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- banner-->
	<div class="header-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm col-6 d-md-block d-none">
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
				<div class="col-md-auto col-6 text-md-start text-sm-start text-start order-md-2 order-1">
					<a class="__email" href="mailto:<?=get_fields('options')['site_settings']['site_email'];?>"><i class="fa fa-envelope-o circle"></i><?=get_fields('options')['site_settings']['site_email'];?></a>
				</div>
				<div class="col-md-auto col-6 text-md-start text-sm-end text-end order-md-3 order-2">
					<a class="__tel" href="tel:<?=get_numerics( get_fields('options')['site_settings']['site_telephon'] );?>"><i class="fa fa-phone circle"></i><?=get_fields('options')['site_settings']['site_telephon'];?></a>
				</div>
			</div>
		</div>
	</div>
	<!-- end banner-->
	<!--NavBar-->
	<nav class="navbar navbar-expand-sm navbar-white bg-white sticky-top p-0">
		<div class="container">
			<a class="navbar-brand" href="<?=esc_url(home_url());?>">
			<?php if( get_fields('options')['site_settings']['site_logo']['url'] ):?>
				<img src="<?=get_fields('options')['site_settings']['site_logo']['url'];?>" alt="<?=get_bloginfo('name');?>">
			<?php endif;?>
			</a>
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
			$menuitems = get_all_menu('primary','ASC');
			$services_page_id = 55;
			$sub_items_services = get_subitems_for_menuitem($menuitems, $services_page_id, 'DESC');
			?>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!--mr-auto-->
					<?php for( $i=0; $i < count($menuitems); $i++ ):?>
						<?php $currentUrl = $_SERVER['REQUEST_URI']; if( $_SERVER['REQUEST_URI'] == '/' ){ $currentUrl = "/home/"; }?>
						<?php if( $menuitems[$i]->menu_item_parent == '0' && $menuitems[$i]->post_status == 'publish' ):?>

							<?php if( $menuitems[$i]->ID == $services_page_id ):?>
								<li class="nav-item dropdown" data-itemid="<?=$menuitems[$i]->ID;?>" data-itemobject="<?=$menuitems[$i]->object;?>">
									<a class="nav-link dropdown-toggle <?=(strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?=$menuitems[$i]->url;?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=$menuitems[$i]->title;?></a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li data-itemid="<?=$menuitems[$i]->ID;?>" data-itemobject="<?=$menuitems[$i]->object;?>" style="display:none;">
											<a class="dropdown-item" href="<?=$menuitems[$i]->url;?>"><?=$menuitems[$i]->title;?></a>
										</li>
										<li style="display:none;"><hr class="dropdown-divider"></li>
										<?php foreach( $sub_items_services as $sub_i_services ):?>
											<li class="py-md-0 py-1" data-itemid="<?=$sub_i_services->ID;?>" data-itemobject="<?=$sub_i_services->object;?>">
												<a class="dropdown-item" href="<?=$sub_i_services->url;?>"><?=$sub_i_services->title;?></a>
											</li>
										<?php endforeach;?>
									</ul>
								</li>
							<?php else:?>
								<li class="nav-item" data-itemid="<?=$menuitems[$i]->ID;?>" data-itemobject="<?=$menuitems[$i]->object;?>">
									<a class="nav-link <?=(strtoupper($currentUrl) == '/'.strtoupper($menuitems[$i]->title).'/') ? 'current-menu-item' : '';?>" href="<?=$menuitems[$i]->url;?>"><?=$menuitems[$i]->title;?></a>
								</li>
							<?php endif;?>

						<?php endif;?>
					<?php endfor;?>

					<div class="d-sm-none mt-3 d-block">
						<li class="nav-item mb-2">
							<a class="__tel" href="tel:<?=get_numerics( get_fields('options')['site_settings']['site_telephon'] );?>"><i class="fa fa-phone circle"></i><?=get_fields('options')['site_settings']['site_telephon'];?></a>
						</li>
						<li class="nav-item mb-2">
							<a class="__email" href="mailto:<?=get_fields('options')['site_settings']['site_email'];?>"><i class="fa fa-envelope-o circle"></i><?=get_fields('options')['site_settings']['site_email'];?></a>
						</li>
						<li class="nav-item mb-3">
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
						</li>
					</div>
				</ul>
			</div>
		</div>
	</nav>
	<!--/NavBar-->

	<!--Preloader
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
		</div>
	</div>-->
	<!--/Preloader-->