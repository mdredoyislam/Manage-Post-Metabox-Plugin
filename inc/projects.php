<?php

    //Education Post Custom Columns
    function mcp_projects_columns( $columns ){

        $columns['title'] = __('Project Title', 'managecustompost');
        $columns['projectFeature'] = __('Project Feature', 'managecustompost');

        return $columns;
    }
    add_filter('manage_projects_posts_columns', 'mcp_projects_columns');

    function mcp_projects_column_data($column, $post_id){

        if('projectFeature' == $column){

            //echo get_post_meta($post_id, 'name_of_company', true);
            $thumbnail = get_the_post_thumbnail($post_id, array(200,80), array('class'=>'project-feature'));
            echo $thumbnail;

        }

    }
    add_action('manage_projects_posts_custom_column', 'mcp_projects_column_data', 10, 2);