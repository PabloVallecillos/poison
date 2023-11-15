<?php

declare(strict_types=1);

use CodelyTv\CodingStyle;
use PhpCsFixer\Fixer\ClassNotation\FinalClassFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([__DIR__]);

	$ecsConfig->skip([FinalClassFixer::class]);

	$ecsConfig->sets([CodingStyle::DEFAULT]);
};
