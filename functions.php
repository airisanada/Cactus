<?php
// 初期化のための処理
function init_func(){
	// このテーマにWPの機能を追加してください
	// タイトルタグを自動的に生成するための機能をこのテーマではサポートしますよ
	add_theme_support('title-tag');
	// featured imageの機能追加
	add_theme_support( 'post-thumbnails' );
}
add_action('init', 'init_func');
// アクションフック->画面を表示する直前にinitというアクションフック呼び出し、
// init_funcでまとめられた処理を実行する

// -----------------------------------------------











?>