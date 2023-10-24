<?php

/**
 * Extension Manager/Repository config file for ext "albgold".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'albgold',
    'description' => 'Alb-Gold Webseite',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-13.9.99',
			'buepro/typo3-container-elements' => '5.1',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tn34\\Albgold\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ralph Pfeifer',
    'author_email' => 'ralph.pfeifer@tn34.de',
    'author_company' => 'TN34',
    'version' => '1.0.0',
];
