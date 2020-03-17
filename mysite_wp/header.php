<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/d93470e25b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>"/></head>

<body>
  <header>
    <h1 class="logo">
      <a href="index.html">Wordpress & webdesign</a>
    </h1>
<!-- header-nav -->
<nav class="header-nav">
<div class="inner">
<?php
wp_nav_menu(
array(
'depth' => 1,
'theme_location' => 'global', 
'container' => 'false',
'menu_class' => 'header-list',
)
);
?>
</div><!-- /inner -->
</nav><!-- header-nav -->
  </header>
