<?php

namespace SecurityAuthorData\Fields;

class Textarea extends Field
{
    public function __construct($name, $args)
    {
        $field_id = esc_attr($args['form']->widget->get_field_id($name));
        $field_name = esc_attr($args['form']->widget->get_field_name($name));
        $field_value = ! empty( $args['form']->instance[$name] ) ? $args['form']->instance[$name] : esc_html__( '', 'sad' );
        $field_label = esc_attr($args['label']);

        $format = '<p>
                <label for="%1$s">%2$s</label>
                <textarea class="widefat" id="%1$s" name="%3$s" type="text">%4$s</textarea>
            </p>';

        $this->html = sprintf(
            $format,
            $field_id,
            $field_label,
            $field_name,
            $field_value
        );
    }
}