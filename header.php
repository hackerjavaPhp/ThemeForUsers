<!DOCTYPE HTML>
<html>
	<head>
		<title><?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
	<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Результаты&nbsp; поиска<?php } ?>
	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив автора<?php } ?>
	<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
	<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp;| &nbsp;<?php single_cat_title(); ?><?php } ?>
	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Архив&nbsp; <?php the_time('F'); ?><?php } ?>
	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Метки&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?></title>
		<meta charset="UTF-8"/>
		<!--<link rel = "stylesheet" href = "css/style.css" type = "text/css"/>-->
		<?PHP wp_head();?>
	</head>
	<body>
		<main>
	<header>
		<div class = "container">
					<h1 class = "left">ДВОЙНОЙ Брус(сруб) - Дома , бани , беседки
					</h1>
					<div class = "right">
						<p>8 029 178-98-08 viber</p>
						<p>Loginov.e@mail.ru</p>
					</div>
				</div>
			</header>
			<nav>
				<div class = "container">
					<!--
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="ProjectsAndEstimates.php">Проекты и смета</a></li>
						<li><a href="FinishedObjects.php">Готовые объекты</a></li>
						<li><a href="read.php">Почитать</a></li>
					</ul>
					-->
					<?php
 				if ( function_exists( 'wp_nav_menu' ) )
			        wp_nav_menu( 
				        array( 
				        'theme_location' => 'custom-menu',
				        'fallback_cb'=> 'custom_menu',
				        'container' => 'ul',
				        'menu_id' => 'menu',
				        'menu_class' => '') 
					);
			    else custom_menu();
				?>
				</div>
			</nav>