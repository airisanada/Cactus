<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>初心者向けホームページテンプレート tp_beginner5</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>

<body>

<div id="container">

<header>
<h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE SITE"></a></h1>
<aside id="mainimg"><img src="<?php echo get_template_directory_uri(); ?>/images/mainimg.jpg" alt=""></aside>
<?php wp_head(); ?>
</header>

<nav id="menubar">
<ul>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<li><a href="/about">About</a></li>
<li><a href="/gallery">Gallery</a></li>
<li><a href="/link">Link</a></li>
</ul>
</nav>