<?php


function wpl_genrate_daily_book(){
    global $wpdb;
	$recipe_id              =   $wpdb->get_var(
		"SELECT `ID` FROM `" . $wpdb->posts . "`
            WHERE post_status='publish' AND post_type='book'
            ORDER BY rand() LIMIT 1"
	);

	set_transient(
		'r_daily_recipe',
		$recipe_id,
		DAY_IN_SECONDS
	);
}
