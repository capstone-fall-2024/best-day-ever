<?php
/**
 * Plugin Name: Category Column for Special Deal
 * Description: Custom column for special deal ACF 
 * Version: 1.0
 * Author: Ella Bach
 */

 
function add_category_column($columns) {
    $new_columns = array(
        'category' => __('Category', 'textdomain'),
    );
    return array_merge($columns, $new_columns);
}
add_filter('manage_special-deal_posts_columns', 'add_category_column');

function populate_category_column($column, $post_id) {
    if($column === 'category') {
        $category_value = get_field('category', $post_id);

		$category_choices = array(
			'Walt Disney World' => 'Walt Disney World',
            'Disneyland Resort' => 'Disneyland Resort',
            'Disney Cruise Line' => 'Disney Cruise Line',
            'Aulani Resort & Spa' => 'Aulani Resort & Spa',
            'Adventures by Disney' => 'Adventures by Disney',
            'Nat Geo Expeditions' => 'Nat Geo Expeditions',
            'Honeymoon & Wedding' => 'Honeymoon & Wedding',
            'All Inclusive' => 'All Inclusive',
		);

		if($category_value && isset($category_choices[$category_value])) {
			echo $category_choices[$category_value];
		} else {
			echo '-';
		}
    }
}
add_action('manage_special-deal_posts_custom_column', 'populate_category_column', 10, 2);

function make_category_column_sortable($columns) {
    $columns['category'] = 'category';
    return $columns;
}
add_filter('manage_edit-special-deal_sortable_columns', 'make_category_column_sortable');


?>