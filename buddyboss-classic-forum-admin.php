<?php
/**
 * Plugin Name: BuddyBoss Classic Forum Admin
 * Description: Restores the classic WordPress edit.php admin screens for the
 *              forum, topic, and reply post types after BuddyBoss 3.0 moved
 *              them into a React-based Settings 2.0 UI. The new UI strips
 *              custom columns, ACF / WP Fusion metaboxes, post_status
 *              filtering, sortable headers, URL-based filters, row actions
 *              (Edit / Duplicate / Quick Edit), and direct edit links —
 *              features the admin team relies on daily.
 * Author:      Memberfix
 * Version:     1.0.0
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'plugins_loaded',
	function () {
		remove_action(
			'bp_admin_init',
			'bb_redirect_legacy_settings_to_settings_2',
			1
		);
	},
	20
);

add_filter(
	'register_post_type_args',
	function ( $args, $post_type ) {
		if ( ! in_array( $post_type, array( 'forum', 'topic', 'reply' ), true ) ) {
			return $args;
		}

		$args['show_in_menu'] = true;

		$menu_names = array(
			'forum' => 'Forums (Classic)',
			'topic' => 'Topics (Classic)',
			'reply' => 'Replies (Classic)',
		);

		if ( ! isset( $args['labels'] ) || ! is_array( $args['labels'] ) ) {
			$args['labels'] = array();
		}
		$args['labels']['menu_name'] = $menu_names[ $post_type ];

		return $args;
	},
	10,
	2
);
