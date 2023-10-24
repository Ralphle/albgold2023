<?php
declare(strict_types=1);
namespace Tn34\Albgold\Migration\Importer;

use In2code\Migration\Migration\Importer\AbstractImporter;
use In2code\Migration\Migration\Importer\ImporterInterface;

/**
 * Class NewsImporter
 */
class NewsImporter extends AbstractImporter implements ImporterInterface
{

    /**
     * @var string
     */
    protected $tableName = 'tx_news_domain_model_news';

    /**
     * @var string
     */
    protected $tableNameOld = 'tt_news';


    /**
     * @var array
     */
    protected $mapping = [
        'type' => 'type',
        'title' => 'title',
        'short' => 'teaser',
        'bodytext' => 'bodytext',
        'datetime' => 'datetime',
        'author' => 'author',
        'author_email' => 'author_email',
        'keyword' => 'keywords',
        'archivedate' => 'archive',
        'editlock' => 'editlock',
        'keywords' => 'keywords',
        'page' => 'internalurl',
        'ext_url' => 'externalurl',
        'hidden' => 'hidden',
		'image' => 'fal_media',
		'related' => 'related',
		'news_files' => 'fal_related_files',

        'fe_group' => 'fe_group',
        'sys_language_uid' => 'sys_language_uid',
        'l18n_parent' => 'l10n_parent',
        'l18n_diffsource' => 'l10n_diffsource',

        'category' => 'categories',
		
		'eventtime' => 'eventtime',
		'starttimeevent' => 'starttimeevent',
		'endtimeevent' => 'endtimeevent',
		'location' => 'location',
		'highlight' => 'highlight',
		'booked' => 'booked',
		'price' => 'price',
		'pricecaption' => 'pricecaption',
		'links' => 'extendedlinks',
    ];

    /**
     * @var array
     */
    protected $values = [
        'hidden' => '0'
    ];


    /**
     * @var array
     */
    protected $propertyHelpers = [
//        'categories' => [
//            [
//                'className' => CreateNewsCategoryRelationPropertyHelper::class
//            ]
//        ],
//        'fal_media' => [
//            [
//                'className' => CreateNewsImageRelationAndMoveImagePropertyHelper::class
//            ]
//        ],
//        'fal_related_files' => [
//            [
//                'className' => CreateNewsFileRelationsPropertyHelper::class
//            ]
//        ],
//        'related' => [
//            [
//                'className' => CreateNewsRelatedRelationsPropertyHelper::class
//            ]
//        ]
    ];
}