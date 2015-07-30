
<div class="menu_fixe" style="top: -80px;">
    <div class="container">	
        <a class="home" href="<? echo home_url();?>" style="transform: translateX(0px) rotate(0deg);"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/logo.png" alt="Antadis"></a>
        <a class="menu_mobile" href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/menu.png" alt="Menu"></a>

        <div class="social">
            <a href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/bt_tw.png" alt="Twitter" target="_blank"></a>
            <a href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/bt_fb.png" alt="Facebook" target="_blank"></a>
            <a class="btn btn-info bt-contact" href="#">Nous contacter</a>
        </div>
        <nav role="navigation">
            <ul class="nav menu" id="mainmenu">
                <li class="item-155"><a href="<? echo home_url();?>">Accueil</a></li>
                <? if (has_nav_menu('top-menu')) : ?>
                    <?
                    $arr = [
                        'menu' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav menu',
                        'menu_id' => 'mainmenu',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '%3$s',
                        'depth' => 0,
                        'walker' => '',
                        'theme_location' => 'top-menu'
                    ];
                    wp_nav_menu($arr);
                    ?>
                <? endif; ?>
            </ul>

        </nav>
    </div>
</div>
<header>
    <div class="container">		
        <a class="home" href="<? echo home_url();?>"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/logo.png" alt="Antadis"></a>
        <a class="menu_mobile" href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/menu.png" alt="Menu"></a>

        <div class="social">
            <a href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/bt_tw.png" alt="Twitter" target="_blank"></a>
            <a href="#"><img src="http://localhost/webpro4u.com/wp-content/themes/tuanna/images/bt_fb.png" alt="Facebook" target="_blank"></a>
            <a class="btn btn-info bt-contact" href="http://www.antadis.com/contactez-nous">Liên hệ!</a>
        </div>
        <nav role="navigation" class="open">
            <ul class="nav menu" id="mainmenu">
                <li class="item-155"><a href="<? echo home_url();?>">Accueil</a></li>
                    <? if (has_nav_menu('top-menu')) : ?>
                        <?
                        $arr = [
                            'menu' => '',
                            'container' => '',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'nav menu',
                            'menu_id' => 'mainmenu',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '%3$s',
                            'depth' => 0,
                            'walker' => '',
                            'theme_location' => 'top-menu'
                        ];
                        wp_nav_menu($arr);
                        ?>
                    <? endif; ?>
            </ul>
        </nav>
    </div>
</header>