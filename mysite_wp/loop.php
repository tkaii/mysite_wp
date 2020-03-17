<?php
if (have_posts() ) : ?>
<section class="blog-contents">
<?php
while ( have_posts() ) :
the_post(); ?>
<div class="blog-content">
<div class="blog-content__tag">
<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div><!--blog-content__tag-->
<h3 class="blog-content__title"><?php the_title(); ?></h3>
<div  class="blog-content__date">
<time class="" datetime="<?php the_time('c'); ?>"><?php the_time('Y年n月j日'); ?></time>
<?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?><br>
<time class="" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time('Y年n月j日'); ?></time>
<?php endif; ?>
</div>
<!--blog-content__date-->
<div class="blog-content__img">
<?php
if (has_post_thumbnail() ) {
the_post_thumbnail('large');
} else {
echo '<img src="'. esc_url(get_template_directory_uri()).'./img/noimg.png" alt="">';
}
?>
</div>
<!--blog-content__img-->
<div class="blog-article">
<p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink();?>">もっと読む&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
</div>
<!--blog-article-->
</div>
<?php
endwhile;
?>
<?php get_template_part('pagination'); ?>
</section><!--blog-contents-->
<?php endif; ?>
