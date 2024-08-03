<?php

    //Education Post Custom Columns
    function desvertcore_service_columns( $columns ){

        $columns['title'] = __('Services Title', 'desvertcore');
        $columns['servicesIcons'] = __('Services Icons', 'desvertcore');
        $columns['servicesText'] = __('Services Text', 'desvertcore');

        return $columns;
    }
    add_filter('manage_service_posts_columns', 'desvertcore_service_columns');

    function desvertcore_service_column_data($column, $post_id){

        if('servicesIcons' == $column){

            //echo get_post_meta($post_id, 'name_of_company', true);
            $thumbnail = get_the_post_thumbnail($post_id, array(200,80), array('class'=>'project-feature'));
            echo $thumbnail;

        }

    }
    add_action('manage_service_posts_custom_column', 'desvertcore_service_column_data', 10, 2);