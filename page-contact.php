<!-- 固定ページ：お問い合わせページを実装する場合に使用 -->
<!-- 管理画面より、slug名「contact」で固定ページを投稿 -->
<!-- 実装の参考：https://wp-master.club/view-contact-form7 -->

<?php get_header(); ?>

<section id="contact" class="contact contact-wrap">
	<h2 class="section-title contact-title-l"><span class="section-title__inner">CONTACT</span></h2>
	<p class="contact-page__text">
		サービスのお申し込み・ご質問等はこちらで受け付けております。<br>
		何でもお気軽にお問い合わせください。
	</p>
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<div><?php the_content(); ?></div>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
