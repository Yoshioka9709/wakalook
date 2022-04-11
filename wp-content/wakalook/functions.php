<?php

//カスタム投稿タイプを作成
function cpt_register_stamp() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "stamp",
		"edit_item" => "stamp",
	];
	$args = [
		"label" => "スタンプ", //管理画面に出てくる名前
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "stamp", "with_front" => true ], //スラッグをstampに設定
		"query_var" => true,
		"menu_position" => 5,
		"supports" => [ "title", "editor", "thumbnail" ],
	];
	register_post_type( "stamp", $args );
}
add_action( 'init', 'cpt_register_stamp' );

//カスタム投稿フィールドにカテゴリーを作成する
function cpt_register_dep2() { //add_actionの２つのパラメーターを定義
	$labels = [
		"singular_name" => "dep",
	];
	$args = [
		"label" => "カテゴリー",
		"labels" => $labels,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_in_menu" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "dep",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "dep", [ "stamp" ], $args ); //「stamp」というカスタム投稿タイプにカテゴリーを追加
}

add_action( 'init', 'cpt_register_dep2' );


function unset_menu(){
    global $menu;
    unset($menu[5]); //投稿メニュー
}

add_action("admin_menu","unset_menu");

?>