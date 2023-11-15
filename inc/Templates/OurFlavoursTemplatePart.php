<?php

declare(strict_types=1);

namespace Inc\Templates;

use WP_Query;

final class OurFlavoursTemplatePart
{
	public int $section = 3;

	public function __construct()
	{
		$heading = get_field("section_{$this->section}_heading_component_clone_heading_text") ?: '02 - 05';
		$headingColor = get_field("section_{$this->section}_heading_component_clone_heading_title_color") ?: 'var(--white)';
		$title = get_field("section_{$this->section}_title_subtitle_component_clone_title") ?: 'Our';
		$titleColor = get_field("section_{$this->section}_title_subtitle_component_clone_title_color") ?: 'var(--white)';
		$subtitle = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle") ?: 'Flavours';
		$subtitleColor = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle_color") ?: 'transparent';
		$flavours = self::getFlavours(['orderby' => 'rand']);
		?>

		<section class="section-<?php echo $this->section; ?> container">
			<h3 class="section-<?php echo $this->section; ?>__heading" style="color: <?php echo $headingColor; ?> "><?php echo $heading; ?></h3>
			<h2 class="section-<?php echo $this->section; ?>__h2" style="color: <?php echo $titleColor; ?> "><?php echo $title; ?></h2>
			<h2 class="section-<?php echo $this->section; ?>__h2" style="color: <?php echo $subtitleColor; ?> "><?php echo $subtitle; ?></h2>
			<div class="section-<?php echo $this->section; ?>__flavours" id="insertFlavours">
				<?php if ($flavours->have_posts()): ?>
					<?php while ($flavours->have_posts()): ?>
						<?php $flavours->the_post(); ?>
						<article class="section-<?php echo $this->section?>__flavours__article">
							<img class="section-<?php echo $this->section?>__flavours__article__img" src="<?php echo get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/assets/jpg/pig.jpg'; ?>" alt="flavor-<?php the_title(); ?>" width="37px" height="37px">
							<h5 class="section-<?php echo $this->section?>__flavours__article__h5"><?php the_title(); ?></h5>
							<p class="section-<?php echo $this->section?>__flavours__article__p"><?php echo get_the_excerpt(); ?></p>
							<a class="section-<?php echo $this->section?>__flavours__article__a" href="#">
								details
								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="7" viewBox="0 0 17 7" fill="none">
									<path d="M16.6112 3.78436L11.6112 0.897611V6.67111L16.6112 3.78436ZM0.5 4.28436H12.1112V3.28436H0.5V4.28436Z" fill="currentColor"/>
								</svg>
							</a>
						</article>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="section-<?php echo $this->section; ?>__load-more-flavours-container">
				<button class="section-<?php echo $this->section; ?>__btn" id="loadMoreFlavours">Load more</button>
			</div>
		</section>

		<?php
	}

	public static function getFlavours(array $args = []): WP_Query
	{
		return new WP_Query(array_merge([
			'post_type' => 'flavor',
			'posts_per_page' => 12,
			'post_status' => 'publish',
		], $args));
	}
}
