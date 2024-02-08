<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package martin
 */

?>
<style>
    .footer-menu ul,
    .footer-menu ul ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-menu>.menu-footer-menu-container>ul>li {
        display: inline-block;
        position: relative;
    }

    .footer-menu>.menu-footer-menu-container>ul>li>a {
        padding: 10px 15px;
        text-decoration: none;
        display: block;
    }

    .footer-menu ul.sub-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .footer-menu ul.sub-menu li {
        display: block;
    }

    .footer-menu ul.sub-menu li a {
        padding: 10px 15px;
        text-decoration: none;
        color: #333;
    }

    .footer-menu>.menu-footer-menu-container>ul>li:hover>ul.sub-menu {
        display: block;
    }

    .footer-menu {
        float: right;
        text-align: justify;
        justify-content: end;
    }
</style>
<footer id="colophon" class="site-footer">
    <div class="container cf">
        <div class="footer-image">
            <img src="" alt="">
        </div>
        <div class="header-menu footer-menu">
            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>