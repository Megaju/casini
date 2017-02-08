<?php //... ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
    <title>
        <?php bloginfo('name') ?>
            <?php if ( is_404() ) : ?> &raquo;
                <?php _e('Not Found') ?>
                    <?php elseif ( is_home() ) : ?> &raquo;
                        <?php bloginfo('description') ?>
                            <?php else : ?>
                                <?php wp_title() ?>
                                    <?php endif ?>
    </title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- jquery-3 -->
    <script type='text/javascript' src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.1.min.js"></script>
    <!-- leave this for stats -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <?php wp_head(); ?>
        <?php wp_get_archives('type=monthly&format=link'); ?>
            <?php //comments_popup_script(); <?php wp_head(); ?>
</head>

<body>
