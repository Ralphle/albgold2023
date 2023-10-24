<?php
return [
    // Default values if not given from CLI
    'configuration' => [
        'key' => '',
        'dryrun' => true,
        'limitToRecord' => null,
        'limitToPage' => 67,
        'recursive' => true
    ],

    // Define your migrations
    'migrations' => [
		 [
            'className' => \Tn34\Albgold\Migration\Importer\NewsLocationsImporter::class,
            'keys' => [
                'locations',
            ]
        ],
        [
            'className' => \Tn34\Albgold\Migration\Importer\NewsCategoriesImporter::class,
            'keys' => [
                'news',
                'categories',
                'categoriesimport'
            ]
        ],
        [
            'className' => \Tn34\Albgold\Migration\Migrator\CategoriesMigrator::class,
            'keys' => [
                'news',
                'categories',
                'categoriesmigration'
            ]
        ],
        [
            'className' => \Tn34\Albgold\Migration\Importer\NewsImporter::class,
            'keys' => [
                'newsimport'
            ]
        ],
        [
            'className' => \Tn34\Albgold\Migration\Migrator\NewsMigrator::class,
            'keys' => [
                'news',
            ]
        ],
        [
            'className' => \Tn34\Albgold\Migration\Migrator\ContentMigrator::class,
            'keys' => [
                'content'
            ]
        ]
    ]
];