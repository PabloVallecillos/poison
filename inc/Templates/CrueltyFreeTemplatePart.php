<?php

declare(strict_types=1);

namespace Inc\Templates;

final class CrueltyFreeTemplatePart
{
	public int $section = 2;

	public function __construct()
	{
		$heading = get_field("section_{$this->section}_heading_component_clone_heading_text") ?: '03 - 05';
		$headingColor = get_field("section_{$this->section}_heading_component_clone_heading_title_color") ?: 'var(--primary)';
		$title = get_field("section_{$this->section}_title_subtitle_component_clone_title") ?: 'Cruelty free';
		$title = $this->addSpanToLastWord($title);
		$titleColor = get_field("section_{$this->section}_title_subtitle_component_clone_title_color") ?: 'var(--primary)';
		$subtitle = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle") ?: 'Development';
		$subtitleColor = get_field("section_{$this->section}_title_subtitle_component_clone_subtitle_color") ?: 'transparent';
		$sentence = get_field("section_{$this->section}_sentence") ?: 'Except for the human subjects...';
		$descriptionTitle = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_title"
		) ?: 'Look, a cute puppy';
		$descriptionTitleColor = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_title_color"
		) ?: 'var(--primary)';
		$descriptionText = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_text"
		) ?: 'Here on POISON we know that cute small animals go viral and get the youth’s attention. Take a good look at the dog here and think carefully if you emphatize with this company. We are so cool and quirky hehe uwu. Go right now to that form and buy the damn poison already. We are running out of ideas to trick you people into buying our product.';
		$descriptionTextColor = get_field(
			"section_{$this->section}_description_paragraph_component_clone_p_text_color"
		) ?: 'var(--primary)';
		$img = get_field("section_{$this->section}_image") ?: get_template_directory_uri() . '/assets/png/section2.png';
		$backgroundColorRectangle = get_field("section_{$this->section}_background_color_rectangle") ?: 'var(--cool-grey)';
		echo <<<HTML

		<section class="section-$this->section container">
			<h3 class="section-{$this->section}__heading" style="color: $headingColor">$heading</h3>
			<h2 class="section-{$this->section}__h2" style="color: $titleColor">$title</h2>
			<h2 class="section-{$this->section}__h2" style="color: $subtitleColor">$subtitle</h2>
			<div class="section-{$this->section}__description">
				<p class="section-{$this->section}__description__sentence">$sentence</p>
				<div class="section-{$this->section}__description__left">
					<h4 class="section-{$this->section}__description__left__h4" style="color: $descriptionTitleColor">$descriptionTitle</h4>
					<h4 class="section-{$this->section}__description__left__p" style="color: $descriptionTextColor">$descriptionText</h4>
				</div>
				<div class="section-{$this->section}__description__background-rectangle" style="background: $backgroundColorRectangle"></div>
				<div class="section-{$this->section}__description__right" style="background-image: url('$img')">
				</div>
			</div>
		</section>

		HTML;
	}

	public function addSpanToLastWord(string $string): string
	{
		$words = explode(' ', $string);
		$lastWord = array_pop($words);
		$lastWord = "<span>$lastWord</span>";
		$words[] = $lastWord;
		return implode(' ', $words);
	}
}
