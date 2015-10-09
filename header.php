<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '–', true, 'right'); ?> <?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Fira+Mono:400,700' rel='stylesheet' type='text/css'> 
	<!-- Facebook share default img -->
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/social-media-default-share.png" />
	<?php wp_head(); ?>
</head>
<body>
	<section class="container">
        <header class="masthead">
            <div class="logo">
                <a href="<?php bloginfo('url'); ?>" class="site_title" title="A weblog by Daniel Genser">My Home is the Sea</a>
            </div>
            <div class="bio">
                <a href="http://twitter.com/danielgenser" title="Say howdy"><span class="alt-char">@</span>danielgenser</a>
            </div>
        </header>	