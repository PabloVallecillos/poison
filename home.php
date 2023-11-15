<?php

/*
 * Template Name: Home
 */

declare(strict_types=1);

use Inc\Templates\BuyPoisonTemplatePart;
use Inc\Templates\CrueltyFreeTemplatePart;
use Inc\Templates\OurFlavoursTemplatePart;

get_header();
new BuyPoisonTemplatePart();
new CrueltyFreeTemplatePart();
new OurFlavoursTemplatePart();
get_footer();
