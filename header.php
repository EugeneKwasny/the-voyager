<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Voyager
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="max-w-full bg-bg-1">
		<div class="container max-w-7xl	mx-auto flex flex-row  justify-between lg:flex-col py-4	px-5 lg:pb-0">
			<div class="flex items-center lg:flex-col lg:text-center py-5">
				<div class="text-white text-2xl"><a class="hover:text-bg-2" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<div class="hidden ml-[30px] lg:ml-0 sm:block text-slate-300 "><?php echo get_bloginfo( 'description', 'display' ); ?></div>
			</div>
			<div id="menu-open" class="flex flex-col justify-center lg:hidden cursor-pointer">
				<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="20" height="2" fill="white"/>
					<rect y="8" width="20" height="2" fill="white"/>
					<rect y="16" width="15" height="2" fill="white"/>
				</svg>
			</div>
			<nav id="main-nav" class="hidden fixed bg-white left-0 top-0 bottom-0 right-0 text-color-textDark lg:flex lg:justify-between lg:text-white lg:border-t-[1px] lg:border-white/10 lg:bg-transparent lg:relative">
				<div class="flex flex-row justify-between items-center border-b-[1px] border-color-border px-[30px] pt-[20px] pb-[20px] lg:hidden">
					<div>Menu</div>
					<div id="menu-close" class="flex justify-center border-[1px] w-[40px] h-[40px] border-color-border rounded-lg cursor-pointer">
						<svg class="inline-flex self-center" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.090772 0.88552L0.991611 0L10 8.8552L9.09916 9.74072L0.090772 0.88552Z" fill="#222222"/>
							<path d="M9.00839 0.259277L9.90923 1.1448L0.900839 10L0 9.11448L9.00839 0.259277Z" fill="#222222"/>
						</svg>
					</div>
				</div>
				<?php 
					wp_nav_menu([ 
						'theme_location' => 'primary-left', 
						'container'=>'',  
						'link_after' => '<svg class="inline-flex ml-2.5 self-center" width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="fill-color-textDark lg:fill-white lg:hover:fill-bg-2/100" d="M4.58745 5.33885L8.37478 1.55145C8.46245 1.46386 8.51074 1.34692 8.51074 1.22224C8.51074 1.09755 8.46245 0.980615 8.37478 0.893017L8.09593 0.614102C7.91423 0.432609 7.61892 0.432609 7.4375 0.614102L4.25712 3.79447L1.07322 0.610573C0.985558 0.522975 0.868691 0.474609 0.744075 0.474609C0.619321 0.474609 0.502454 0.522975 0.414718 0.610573L0.135941 0.889488C0.0482735 0.977155 -2.26901e-05 1.09402 -2.26955e-05 1.21871C-2.2701e-05 1.34339 0.0482735 1.46033 0.135941 1.54793L3.92673 5.33885C4.01467 5.42666 4.13209 5.47489 4.25692 5.47461C4.38222 5.47489 4.49957 5.42666 4.58745 5.33885Z" fill="white"/></svg>',
						'items_wrap' => '<ul id="%1$s" class="flex flex-col lg:flex-row">%3$s</ul>'
					]);
				?>
			</nav>
		</div>
	</header>
	                                                
	
	<!-- #masthead -->
	<div id="page" class="site">