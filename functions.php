<?php
function kadai_setup() {
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
}
add_action( 'after_setup_theme', 'kadai_setup' ); //テーマ初期化のタイミングで関数を読み込み

function twpp_change_sort_order( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
      return;
    }
    if ( $query->is_home() ) {
      $query->set( 'order', 'ASC' );
    }
  }
  add_action( 'pre_get_posts', 'twpp_change_sort_order' );