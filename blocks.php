<?php

register_block_type(
		'path/to/block.json',
		array(
			'editor_script' => 'script-block-editor',
		)
	);


register_block_type( 'namespace/block-name', array( 'render_callback' => function() {} ) );

register_block_type( "do-not-match/{$slug}", [] );

register_block_type( ABSPATH . '/test/path', [] );

register_block_type( new WP_Block_Type( 'should-match/block-name', [ 'title' => 'Title here' ] ) );

register_block_type( new WP_Block_Type( ABSPATH . 'should-not-match/block.json', [ 'title' => 'DO NOT MATCH' ] ) );

register_block_type( 'example-gutenberg-block/block-'. $value['hash'], array(
	'editor_script' => 'example-gutenberg-block',
) );
