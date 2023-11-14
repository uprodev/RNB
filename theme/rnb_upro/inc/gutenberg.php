<?php 
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'my_subtitle',
            'title'             => __('Subtitle (Custom)'),
            'description'       => __('Add Subtitle (Custom)'),
            'render_template'   => 'parts/blocks/subtitle.php',
            'category'          => 'common',
            'post_types'        => array('post'),
        ));
        acf_register_block_type(array(
            'name'              => 'my_image',
            'title'             => __('Image (Custom)'),
            'description'       => __('Add Image (Custom)'),
            'render_template'   => 'parts/blocks/image.php',
            'category'          => 'common',
            'post_types'        => array('post'),
        ));

    }
}