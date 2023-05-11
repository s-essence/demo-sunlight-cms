<?php
function my_plugin_allowed_block_types_all( $allowed_block_types, $block_editor_context ) {
	// 許可するブロックタイプ
	$allowed_block_types = array(
		'core/paragraph',
		// 'core/heading',
		'core/image',
	);
	return $allowed_block_types;
}
add_filter( 'allowed_block_types_all', 'my_plugin_allowed_block_types_all', 10, 2 );