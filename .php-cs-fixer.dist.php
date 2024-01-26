<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PER-CS2.0' => true,
        '@PHP83Migration' => true,
    ])
    ->setFinder($finder);

