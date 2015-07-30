<?php
/**
 * The default template for displaying content
 */
?>
<header class="entry-header">
    <?php
    if (is_single()) :
        the_title('<h1 class="entry-title">', '</h1>');
    else :
        the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>');
    endif;
    ?>
</header><!-- .entry-header -->
<nav>
    <ul class="menu">
         <? if (has_nav_menu(SEG1.'-menu')) : ?>
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
                        'theme_location' => SEG1.'-menu'
                    ];
                    wp_nav_menu($arr);
                    ?>
                <? endif; ?>
    </ul>
</nav>
<div id="post-<?php the_ID(); ?>"  class="container">
    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content();
        ?>
    </div><!-- .entry-content -->
</div><!-- #post-## -->
