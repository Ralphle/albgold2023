<?php
declare(strict_types=1);
namespace Tn34\Albgold\Migration\PropertyHelpers;

use Doctrine\DBAL\DBALException;
use In2code\Migration\Migration\Helper\DatabaseHelper;
use In2code\Migration\Migration\PropertyHelpers\AbstractPropertyHelper;
use In2code\Migration\Migration\PropertyHelpers\PropertyHelperInterface;
use In2code\Migration\Utility\DatabaseUtility;

/**
 * Class CreateNewsRelatedRelationsPropertyHelper
 */
class CreateNewsRelatedRelationsPropertyHelper extends AbstractPropertyHelper implements PropertyHelperInterface
{

    /**
     * @var string
     */
    protected $mmTableName = 'tx_news_domain_model_news_related_mm';

    /**
     * @return void
     * @throws DBALException
     */
    public function manipulate(): void
    {
        $identifiersOld = $this->getRelatedTtNews();
        if ($identifiersOld !== []) {
            foreach ($identifiersOld as $key => $identifierOld) {
                $identifier = $this->changeIdentifierFromOldToNew($identifierOld);
                $properties = [
                    'uid_foreign' => (int)$this->getPropertyFromRecord('uid'),
                    'uid_local' => $identifier,
                    'sorting' => $key
                ];
                $databaseHelper = ObjectUtility::getObjectManager()->get(DatabaseHelper::class);
                $databaseHelper->createRecord($this->mmTableName, $properties);
                $this->log->addMessage(
                    'new news relation added to news ' . $this->getPropertyFromRecord('uid') . '<=>' . $identifier
                );
            }
        }
    }

    /**
     * @return int[]
     */
    protected function getRelatedTtNews(): array
    {
        $queryBuilder = DatabaseUtility::getQueryBuilderForTable('tt_news_related_mm');
        $rows = (array)$queryBuilder->select('*')
            ->from('tt_news_related_mm')
            ->where('uid_local=' . (int)$this->getPropertyFromRecord('_migrated_uid'))
            ->execute()
            ->fetchAll();
        $identifiers = [];
        foreach ($rows as $row) {
            if ($row['uid_foreign'] > 0) {
                $identifiers[] = (int)$row['uid_foreign'];
            }
        }
        return $identifiers;
    }

    /**
     * @param int $oldIdentifier
     * @return int
     */
    protected function changeIdentifierFromOldToNew(int $oldIdentifier): int
    {
        $queryBuilder = DatabaseUtility::getQueryBuilderForTable('tx_news_domain_model_news');
        return (int)$queryBuilder->select('uid')
            ->from('tx_news_domain_model_news')
            ->where('_migrated_uid=' . (int)$oldIdentifier)
            ->execute()
            ->fetchColumn(0);
    }
}