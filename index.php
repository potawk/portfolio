<!-- 主にトップページとして実装 -->
<?php get_header(); ?>

<div class="mainvisual mainvisual-l">
	<div class="mainvisual__text">
		<p class="mainvisual__name"><span>TAKASHI&nbsp;</span><span>TSUBOUCHI</span></p>
		<p class="mainvisual__portfolio">PORTFOLIO</p>
	</div>
</div>

<section id="works" class="works top__works-l wrap">
	<h2 class="section-title section-title-l"><span class="section-title__inner">WORKS</span></h2>
	<ul class="card__list top__works-card-l">
		<?php
		$works_query = new WP_Query(
			array(
				'post_type' => 'post',
				'category_name' => 'works',
				'posts_per_page' => 3,
			)
		);
		?>
		<?php if ($works_query->have_posts()): ?>
			<?php while ($works_query->have_posts()): ?>
				<?php $works_query->the_post(); ?>
				<li class="card__item">
					<a href="" class="card__link">
						<?php if (has_post_thumbnail()): ?>
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
		<?php wp_reset_postdata(); ?>
	</ul>
	<a href="<?php echo esc_url(home_url('/category/works/')); ?>" class="button">VIEW MORE</a>
</section>

<section id="about" class="about wrap about-l">
	<h2 class="section-title section-title-l"><span class="section-title__inner">ABOUT</span></h2>
	<div class="about__content">
		<div class="about__img">
			<img src="<?php echo get_template_directory_uri() ?>/img/common/about.jpg" alt="">
		</div>
		<div class="about__text">
			<div class="about__name">
				<p class="about__name-j">坪内　孝</p>
				<p class="about__name-e">TAKASHI TSUBOUCHI</p>
			</div>
			<div class="about__description">
				はじめまして、福岡市でWebコーダーとして活動しております。<br>
				シンプルで見やすく、ユーザーにとって快適なサイトを作ることを心がけています。<br>
				コーディングは正確さと丁寧さを大切にし、誠実な仕事で信頼を築くことをモットーにしています。<br>
				デザインカンプからのJavaScriptを駆使した動きのあるサイトはもちろんのこと、WordPressを用いたサイト設計にもご対応いたします。<br>
				趣味はプロ野球観戦で、応援するチームの試合を追いかけるのが楽しみです！<br>
				お仕事のご相談など、お気軽にご連絡ください。
			</div>
		</div>
	</div>
</section>

<section id="services" class="services wrap services-l">
	<h2 class="section-title section-title-l"><span class="section-title__inner">SERVICES</span></h2>
	<ul class="card__list">
		<li class="card__item">
			<a href="" class="card__link">
				<div class="card__img">
					<img src="<?php echo get_template_directory_uri() ?>/img/common/LP制作.jpg" alt="">
				</div>
				<div class="service-card__text">
					<p class="card__title services__cardtitle">
						LP制作
					</p>
					<p class="card__description">
						ユーザーの心を動かす導線設計とデザインで、成果につながるLPを企画・制作します。
					</p>
				</div>
			</a>
		</li>
		<li class="card__item">
			<a href="" class="card__link">
				<div class="card__img">
					<img src="<?php echo get_template_directory_uri() ?>/img/common/WordPress.jpg" alt="">
				</div>
				<div class="service-card__text">
					<p class="card__title services__cardtitle">
						WordPress
					</p>
					<p class="card__description">
						集客から更新運用までを見据えた、使いやすく拡張性のあるWordPressサイトを構築します。
					</p>
				</div>
			</a>
		</li>
		<li class="card__item">
			<a href="" class="card__link">
				<div class="card__img">
					<img src="<?php echo get_template_directory_uri() ?>/img/common/保守・管理.jpg" alt="">
				</div>
				<div class="service-card__text">
					<p class="card__title services__cardtitle">
						保守・管理
					</p>
					<p class="card__description">
						日々の更新対応からセキュリティ管理まで、安心して任せられる運用サポートを提供します。
					</p>
				</div>
			</a>
		</li>
	</ul>
</section>

<section id="contact" class="contact wrap top__contact-l">
	<h2 class="section-title section-title-l"><span class="section-title__inner">CONTACT</span></h2>
	<p class="contact__text">サービスのお申し込み・ご質問等は以下のボタンをクリックしてください。</p>
	<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">お問い合わせ</a>
</section>

<?php get_footer(); ?>