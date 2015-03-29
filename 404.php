<!DOCTYPE HTML>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script type="text/javascript" src="<?php echo bloginfo('template_url') . '/js/anyFixed.js'; ?>"></script>
    <script type="text/javascript">
        window.onload = function() {
            anyFixed({
                fixedObj: '#me-sidebar',
                pos: 'origin'
            });
        };
    </script>
    <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url') . '/css/ie6.css'; ?>" />
        <script type="text/javascript" src="<?php echo bloginfo('template_url') . '/js/DD_belatedPNG.js'; ?>"></script>
        <script type="text/javascript">
            DD_belatedPNG.fix('.png-fix,.png-fix:hover');
        </script>
    <![endif]-->
    <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url') . '/css/ie8.css'; ?>" media="all" />
        <script type="text/javascript" src="<?php echo bloginfo('template_url') . '/js/curvycorners.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo bloginfo('template_url') . '/js/ie-hover-focus.js'; ?>"></script>
        <script type="text/javascript">
            window.onload = function() {
                var settings = {
                    tl: { radius: 10 },
                    tr: { radius: 10 },
                    bl: { radius: 10 },
                    br: { radius: 10 },
                    antiAlias: true
                };
                curvyCorners(settings, '#me-content');
                curvyCorners(settings, '#me-sidebar');
            };
        </script>
    <![endif]-->
    <?php
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <div id="container">
        <div class="error-404">
            <div class="wrap cf">
                <span class="emoticon">:-(</span>
                <div class="intro-text">
                    <h1>404</h1>
                    <h3>您所找的页面似乎不存在</h3>
                    <p>返回主页：<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>