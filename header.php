<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="cover-photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/BannerIXHH-2.png'); background-size: cover; background-position: bottom; background-repeat: no-repeat;">
        <h1>IX HOSTAGE HOUSE</h1>
    </header>
    
    <nav class="navbar">
        <button class="dropdown-btn">Social Media Pages</button>
        <div class="dropdown-content">
            <a href="https://x.com/IXHostageHouse" target="_blank">X</a>
            <a href="https://www.facebook.com/NIXHHC" target="_blank">Facebook</a>
            <a href="https://www.youtube.com/@IXHostageHouse" target="_blank">YouTube</a>
            <a href="https://www.twitch.tv/ixhostagehouse" target="_blank">Twitch</a>
            <a href="https://www.instagram.com/clanmackelly" target="_blank">Instagram</a>
        </div>
    </nav>
