<?php

require_once "vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule("ão", "ao");
echo $slugify->slugify('Teste com acentuação, com composer', "-");