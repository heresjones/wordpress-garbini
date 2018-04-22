<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Garbini_Ed
 * @since Garbini_Ed 1.0
 */
?>

<!-- .site-content -->

<footer class="footer clear-fix" style="margin-bottom: 0">
    <div class=container>
        <div class=footer-logo><a href="#"><img
                    src="<?php bloginfo('template_directory'); ?>/img/garbini-borderless-logo-200.png"
                    alt="Scott Garbini"></a>
        </div>
        <div class=row ><span class="copyright">Copyright © 2016-2020 Garbini Education and Career Consulting LLC.. All rights reserved. | Site by
<a href="http://www.thejonesjournal.com" target=_blank>Chris Jones</a></span></div>

    </div>
    <script type="text/javascript" src='<?php bloginfo('template_directory'); ?>/js/Parallax.js'></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wow.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jikal.js"></script>
    <script>$(document).ready(function (e) {
            $('#scroll').scrollToFixed();
            $('.res-nav_click').click(function () {
                $('.main-nav').slideToggle();
                return false
            });
        });</script>
</footer>
</body>
</html>