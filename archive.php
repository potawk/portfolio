<?php get_header(); ?>

<section id="works" class="works top__works-l wrap">
	<h2 class="section-title section-title-l"><span class="section-title__inner">WORKS</span></h2>
	<ul class="card__list top__works-card-l">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>
				<li class="card__item">
				<?php
					$link = get_post_meta(get_the_ID(), 'link_url', true);
				?>
					<a href="<?php echo esc_url($link ? $link : get_permalink()); ?>" class="card__link" target="_blank" rel="noopener">
						<?php if(has_post_thumbnail()): ?>
						<div class="card__img">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<div class="card__text">
							<div class="card__title">
								<?php the_title(); ?>
							</div>
							<div class="card__description">
							＜使用スキル＞
								<?php
								$skills = get_field('skills');
								if($skills):
								?>
								<ul class="skill-list">
									<?php
									foreach ($skills as $skill): ?>
									<li><?php echo $skill; ?></li>
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
							</div>
						</div>
					</a>
				</li>
			<?php endwhile; ?>
		<?php endif; ?>
	</ul>

	<?php the_posts_pagination(); ?>

	<a href="<?php echo esc_url(home_url('/')); ?>" class="button">HOME</a>
</section>

<?php get_footer(); ?>