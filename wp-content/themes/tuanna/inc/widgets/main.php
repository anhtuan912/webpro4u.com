<?php

class Tuanna_Theme_Widget_Main{
    private $_widget_options = [];
    public function __construct() {
        $this->_widget_options =[
            'blog' => true
        ];
        foreach ($this->_widget_options as $key => $val){
            if($val){
                add_action('widgets_init', [$this, $key]);
            }
        }
    }
    
    public function blog(){
        require_once TUANNA_THEME_WIDGET_DIR .'/blog-content.php';
    }
}
