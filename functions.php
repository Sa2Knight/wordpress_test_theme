<?php

/* メニューを有効にする */
add_theme_support('menus');

/* サイドバーを有効にする */
register_sidebar(array(
  'before_widget' => '<div class="widget">',
  'after_widget' => '</div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

/* 投稿へのサムネイル設定を有効にする */
add_theme_support('post-thumbnails');

/* ショートコード */
function shortcode_tw() {
  return '<a href="http://twitter.com/sa2knight">@Sa2Knight</a>をフォローしてね！';
}
add_shortcode('tw' , 'shortcode_tw');
