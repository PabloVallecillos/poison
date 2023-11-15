<?php

declare(strict_types=1);

namespace Inc\Templates;

final class BuyPoisonTemplatePart
{
	public int $section = 1;

	public function __construct()
	{
		$title = get_field("section_{$this->section}_title_subtitle_component_clone_title") ?: 'Buy poison.';
		$titleColor = get_field("section_{$this->section}_title_subtitle_component_clone_title_color") ?: 'var(--white)';
		$subtitle = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle") ?: 'Trust us.';
		$subtitleColor = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle_color") ?: 'transparent';
		$description = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_text"
		) ?: 'Your children are safe, why would a company lie to you? We are your friends pal. Buy poison today and we grant you total transparency and full refunds* if you are not satisfied with our service. We care about you ❤️';
		$descriptionColor = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_text_color"
		) ?: 'var(--white)';
		$buttonText = get_field("section_{$this->section}_button_component_clone_button_text") ?: 'DRINK NOW!';
		$buttonTextColor = get_field("section_{$this->section}_button_component_clone_button_text_color") ?: 'var(--primary)';
		$buttonBackgroundColor = get_field(
			"section_{$this->section}_button_component_clone_button_background_color"
		) ?: 'var(--silver)';
		$img = get_field("section_{$this->section}_image") ?: get_template_directory_uri() . '/assets/png/section1.png';
		$imgAlt = wp_get_theme()->get('Name') . 'Section 1';
		$legalConditionsText = get_field(
			"section_{$this->section}_legal_conditions_paragraph_component_clone_p_text"
		) ?: '*We keep the right to deny any refunds on our own terms. Total responsability is up to the final user buying poison.';
		$legalConditionsTextColor = get_field(
			"section_{$this->section}_legal_conditions_paragraph_component_clone_p_text_color"
		) ?: 'var(--silver)';
		echo <<<HTML

		<section class="section-{$this->section} container">
			<div class="section-{$this->section}__left">
				<h1 class="section-{$this->section}__left__h1" style="color: $titleColor">$title</h1>
				<h2 class="section-{$this->section}__left__h2" style="color: $subtitleColor">$subtitle</h2>
				<p class="section-{$this->section}__left__p" style="color: $descriptionColor">$description</p>
				<button
					class="button"
					style="color: $buttonTextColor; background-color: $buttonBackgroundColor"
				>
					$buttonText
				</button>
			</div>
			<div class="section-{$this->section}__right">
				<img src="$img" alt="$imgAlt">
			</div>
			<div class="section-{$this->section}__bottom">
				<svg width="21" height="49" viewBox="0 0 21 49" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.1859 40.4005L10.124 48.4625L2.0621 40.4005H18.1859Z" fill="white"/>
					<rect x="1" y="1.45923" width="18.2477" height="29.8793" rx="9.12386" stroke="white" stroke-width="2"/>
					<path d="M10.124 7.81689L10.124 15.2694" stroke="white" stroke-width="2" stroke-linecap="round"/>
				</svg>
				<p class="section-{$this->section}__bottom__p" style="color: $legalConditionsTextColor">$legalConditionsText</p>
			</div>
		</section>

		HTML;
	}
}
