<?php

namespace SecurityAuthorData\Widgets;

use WP_Widget;
use SecurityAuthorData\Form\AuthorDataForm;

class AuthorData extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'author-data',
            'Author Data'
        );
        add_action( 'widgets_init', function() {
            register_widget('SecurityAuthorData\Widgets\AuthorData');
        });
    }

    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>',
    );

    public function widget($args, $instance)
    {

    }

    public function form($instance)
    {
        if (isset($instance['error'])) {
            echo $instance['error'];
        }
        $form = new AuthorDataForm($this, $instance);
        echo $form;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        if (empty($new_instance['author_name']) || !get_user_by('login', $new_instance['author_name'])) {
            $instance['error'] = "ERROR! Author Name is not valid";
        } else {
            $instance['author_name'] = (! empty($new_instance['author_name'])) ? strip_tags($new_instance['author_name']) : '';
        }
        $instance['message'] = (! empty($new_instance['message'])) ? strip_tags($new_instance['message']) : '';
        return $instance;
    }
}