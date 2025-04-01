<?php

namespace App;

add_action('acf/init', function() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }

    // Bloco Customizado Simples
    acf_register_block_type([
        'name'              => 'custom_block',
        'title'             => __('Bloco Customizado', 'sage'),
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['custom', 'block', 'acf'],
        'render_callback'   => function($block) {
            echo \Roots\view('blocks.custom-block', [
                'title'   => get_field('title'),
                'content' => get_field('content')
            ])->render();
        }
    ]);

    // Bloco Container que recebe outros blocos
    acf_register_block_type([
        'name'              => 'container',
        'title'             => __('Container Custom', 'sage'),
        'description'       => __('Um bloco container que pode receber outros blocos.', 'sage'),
        'render_template'   => 'resources/views/blocks/container.blade.php',
        'category'          => 'layout',
        'icon'              => 'grid-view',
        'keywords'          => ['container', 'wrapper', 'layout'],
        'supports'          => [
            'align'         => true,
            'jsx'           => true,
        ],
    ]);
});
