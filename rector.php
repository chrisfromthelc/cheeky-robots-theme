<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
	->withPaths([
		__DIR__ . '/functions.php',
		__DIR__ . '/blocks',
		__DIR__ . '/patterns',
	])
	->withPhpSets(php81: true);
