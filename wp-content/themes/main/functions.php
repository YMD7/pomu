<?php

// 記事へのoEmbedを無効化する
remove_filter( 'the_content', array( $GLOBALS['wp_embed'], 'autoembed' ), 8 );

?>
