<?php
declare(strict_types=1);
namespace Tn34\Albgold\Migration\Importer;

use In2code\Migration\Migration\Importer\AbstractImporter;
use In2code\Migration\Migration\Importer\ImporterInterface;
use Tn34\Albgold\Migration\PropertyHelpers\CreateSortingNumberFromPropertyPropertyHelper;

/**
 * Class NewsCategoriesImporter
 */
class NewsLocationsImporter extends AbstractImporter implements ImporterInterface
{
    /**
     * Table name where to migrate to
     *
     * @var string
     */
    protected $tableName = 'tx_event_domain_model_location';

    /**
     * Table name from migrate to
     *
     * @var string
     */
    protected $tableNameOld = 'tx_xxnewsrecipe_domain_model_location';

    /**
     * @var bool
     */
    protected $truncate = false;

    /**
     * @var bool
     */
    protected $keepIdentifiers = false;

    /**
     * @var array
     */
    protected $mapping = [
        'pid' => 'pid',
        'title' => 'title',
        'locationaddress' => 'locationaddress',
    ];

   
}