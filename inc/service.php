<?php

    //Education Post Custom Columns
    function mcp_service_columns( $columns ){
        unset($columns['date']);

        $columns['title'] = __('Services Title', 'managecustompost');
        $columns['servicesIcons'] = __('Services Icons', 'managecustompost');
        $columns['servicesText'] = __('Services Text', 'managecustompost');
        $columns['date'] = __('Date', 'managecustompost');

        return $columns;
    }
    add_filter('manage_service_posts_columns', 'mcp_service_columns');

    function mcp_service_column_data($column, $post_id){

        if('servicesIcons' == $column){
            //echo get_post_meta($post_id, 'select_icon', true);
            $services_icon = get_field('select_icon');
            $services_icon_output = <<<EOD
                <div class='slide'>
                    <img width="100" src="{$services_icon['url']}" alt="{$services_icon['alt']}">
                </div>
            EOD;
            echo $services_icon_output;

        }elseif('servicesText' == $column){
            echo get_the_content();
        }

    }
    add_action('manage_service_posts_custom_column', 'mcp_service_column_data', 10, 2);