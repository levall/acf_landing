<?php
// check function exists
add_action('acf/init', 'theme_acf_init');
function theme_acf_init()
{

    if (function_exists('acf_register_block')) {

        // register banner block
        acf_register_block(array(
            'name' => 'banner',
            'title' => __('Banner'),
            'mode' => 'edit',
            'description' => __('Banner'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'welcome-view-site',
            'keywords' => array('banner'),
        ));


        // register black banner block
        acf_register_block(array(
            'name' => 'best-propositions',
            'title' => __('Best Propositions'),
            'mode' => 'edit',
            'description' => __('Best Propositions'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'format-gallery',
            'keywords' => array('best-propositions'),
        ));


        // register expertise block
        acf_register_block(array(
            'name' => 'product-catalog',
            'title' => __('Product Catalog'),
            'mode' => 'edit',
            'description' => __('Product Catalog'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'dashicons-list-view',
            'keywords' => array('product-catalog'),
        ));


        // register person-card block
        acf_register_block(array(
            'name' => 'modules-banner',
            'title' => __('Modules'),
            'mode' => 'edit',
            'description' => __('Modules'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'home',
            'icon' => 'dashicons-table-col-after',
            'keywords' => array('modules-banner'),
        ));

        // register person-card block
        acf_register_block(array(
            'name' => 'maf-resposibilities',
            'title' => __('MAF Responsibilities'),
            'mode' => 'edit',
            'description' => __('MAF Responsibilities'),
            'render_callback' => 'my_acf_block_render_callback',
            'render_template' => 'my_acf_block_render_callback',
            'enqueue_assets' => 'carc_style_js',
            'category' => 'landing',
            'icon' => 'dashicons-admin-page',
            'keywords' => array('maf-resposibilities'),
        ));

    }
}
