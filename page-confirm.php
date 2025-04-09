<?php get_header(); ?>

<section id="contact" class="contact contact-wrap">
	<h2 class="section-title contact-title-l"><span class="section-title__inner">確認画面</span></h2>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div><?php the_content(); ?></div>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>