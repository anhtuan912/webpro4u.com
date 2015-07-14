<?
define('TUANNA_THEME_URL', get_template_directory_uri());
define('TUANNA_THEME_DIR', get_template_directory());
define('TUANNA_THEME_INC_DIR', get_template_directory().'/inc');
define('TUANNA_THEME_WIDGET_DIR', get_template_directory().'/inc/widgets');

add_action('wp_enqueue_scripts', 'tuanna_theme_register_js');

function tuanna_theme_register_js() {
    $jsUrl = get_template_directory_uri() . '/js';
    $jsArray = [
        'jquery_min' => 'jquery-1.11.0.min',
        'jquery_migrate' => 'jquery-migrate.min',
        'piwik',
        'widgets',
        'script',
        'caption', 'mootools_core' => 'mootools-core',
        'core',
        'mootools_more' => 'mootools-more',
        'fcvote' => 'fcvote',
        'jquery_ui_core_min' => 'jquery.ui.core.min',
        'jquery_ui_sortable_min' => 'jquery.ui.sortable.min',
        'jquery_ui_autocomplete_min' => 'jquery.ui.autocomplete.min',
        'select2' => 'select2.min',
        'tmpl_common' => 'tmpl-common',
        'powertools' => 'powertools-1.2.0',
//        'slider'
    ];
    foreach ($jsArray as $kjs => $js) {
        if (is_int($kjs)) {
            wp_register_script('tuanna_theme_' . $js, $jsUrl . '/' . $js . '.js', [], '1.0', true);
            wp_enqueue_script('tuanna_theme_' . $js);
        } else {
            wp_register_script('tuanna_theme_' . $kjs, $jsUrl . '/' . $js . '.js', [], '1.0', true);
            wp_enqueue_script('tuanna_theme_' . $kjs);
        }
    }
}
add_action('wp_enqueue_scripts', 'tuanna_theme_register_style');
function tuanna_theme_register_style() {
    $cssUrl = get_template_directory_uri() . '/css';
    wp_register_style('tuanna_theme_bootstrap', $cssUrl . '/bootstrap.min.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_bootstrap');

    wp_register_style('tuanna_theme_bootstrap_theme', $cssUrl . '/bootstrap-theme.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_bootstrap_theme');

    wp_register_style('tuanna_theme_template', $cssUrl . '/template.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_template');

    wp_register_style('tuanna_theme_template', $cssUrl . '/template.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_template');

    wp_register_style('tuanna_theme_fcvote', $cssUrl . '/fcvote.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_fcvote');

    wp_register_style('tuanna_theme_select2', $cssUrl . '/select2.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_select2');

    wp_register_style('tuanna_theme_news', $cssUrl . '/news.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_news');

    wp_register_style('tuanna_theme_module', $cssUrl . '/module.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_module');

    wp_register_style('tuanna_theme_flexicontent', $cssUrl . '/flexicontent.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_flexicontent');
    
    wp_register_style('tuanna_theme_customizer', $cssUrl . '/customizer.css', [], '1.0');
    wp_enqueue_style('tuanna_theme_customizer');
}

//KHAI BAO HE THONG WIGETS
add_action('widgets_init','tuanna_theme_widget_init');

function tuanna_theme_widget_init(){
    register_sidebar([
        'name'          => __( 'Primary widget area', 'tuanna' ),
	'id'            => 'primary-widget-area',
	'description'   => __( 'Them widget vao home page website', 'tuanna' ),
        'class'         => '',
	'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ]);
}