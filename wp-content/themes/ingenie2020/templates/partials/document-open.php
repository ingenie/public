<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>
    <script>
    document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');
    </script>
    <?php wp_head() ?>
    <link rel="stylesheet"
        href="<?php echo get_site_url(); ?>/wp-content/themes/ingenie2020/build/flexslider/flexslider.css"
        type="text/css">
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/ingenie2020/build/flexslider/jquery.flexslider-min.js">
    </script>
    <script type="text/javascript">
    (function($) {
        $(window).load(function() {
            $('#slider .flexslider').flexslider({
                animation: 'slide',
                slideshowSpeed: 9000,
                animationSpeed: 900,
                pauseOnAction: true,
                pauseOnHover: true,
                controlNav: true,
                directionNav: true,
                controlsContainer: ".flexslider",
            });
        });
    })(jQuery)
    </script>
</head>

<body <?php body_class() ?>>
