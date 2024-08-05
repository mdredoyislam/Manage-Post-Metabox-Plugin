<?php

function education_shortcode_func($arguments, $content){
    $defaults = array(
        'per_page' => '',
        'id' => '',
    );
    $attributes = shortcode_atts( $defaults, $arguments );
    $eduArgs = array(
        'posts_per_page'   => $attributes['per_page'],
        'post_type'        => 'education',
    );
    $education_data = new WP_Query( $eduArgs );
    
    while($education_data->have_posts()){ $education_data->the_post();
        $title = get_the_title();
        $education_output = <<<EOD
            <div class="education-items">
                <h3>{$title}</h3>
            </div>
        EOD;
        return $education_output;
    }
   wp_reset_postdata();
}
add_shortcode('education','education_shortcode_func');

/*

function tinys_shortcode_tslide($arguments){
    $defaults = array(
        'caption' =>'', 
        'id' => '',
        'size' => 'tiny-slider',
    );
    $attributes = shortcode_atts( $defaults, $arguments );
    $image_src = wp_get_attachment_image_src($attributes['id'], $attributes['size']);

    $shortcode_output = <<<EOD
        <div class='slide'>
            <p><img src="{$image_src[0]}" alt="{$attributes['caption']}"></p>
            <p>{$attributes['caption']}</p>
        </div>
    EOD;
    return $shortcode_output;
}
add_shortcode('tslide','tinys_shortcode_tslide');*/

//[tslider][tslide caption='Our Beautiful Caption 1' id=207 /][tslide caption='Our Beautiful Caption 2' id=206 /][tslide caption='Our Beautiful Caption 3' id=71 /][tslide caption='Our Beautiful Caption 4' id=67 /][tslide caption='Our Beautiful Caption 5' id=65 /][/tslider]