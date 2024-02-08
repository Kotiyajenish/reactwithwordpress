<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:300,400,500,700&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>
<style>
.header-menu ul,
.header-menu ul ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.header-menu > .menu-header-menu-container > ul > li {
    display: inline-block;
    position: relative;
}

.header-menu > .menu-header-menu-container > ul > li > a {
    padding: 10px 15px;
    text-decoration: none;
    display: block;
}

/* Style for sub-menu items */
.header-menu ul.sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.header-menu ul.sub-menu li {
    display: block;
}

.header-menu ul.sub-menu li a {
    padding: 10px 15px;
    text-decoration: none;
    color: #333;
}

/* Show sub-menu on hover */
.header-menu > .menu-header-menu-container > ul > li:hover > ul.sub-menu {
    display: block;
}
.header-menu{
	float: right;
	text-align: justify;
	justify-content: end;
}
</style>
<div id="page-wrapper">
	<!-- start -->
	<div id="wrapper">
		<!-- header part -->
		<header>
			<div class="container cf">
				<div class="header-image">
					<img src="" alt="">
				</div>
				<div class="header-menu">
					<?php wp_nav_menu( array( 'theme_location'=> 'header' ) ); ?>
				</div>
			</div>
		</header>
	</div>
</div>