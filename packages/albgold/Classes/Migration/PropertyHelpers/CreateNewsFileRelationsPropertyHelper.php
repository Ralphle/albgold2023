<?php
declare(strict_types=1);
namespace Tn34\Albgold\Migration\PropertyHelpers;

use Doctrine\DBAL\DBALException;
use In2code\Migration\Migration\Helper\FileHelper;
use In2code\Migration\Migration\PropertyHelpers\AbstractPropertyHelper;
use In2code\Migration\Migration\PropertyHelpers\PropertyHelperInterface;
use In2code\Migration\Utility\DatabaseUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class CreateNewsFileRelationsPropertyHelper
 */
class CreateNewsFileRelationsPropertyHelper extends AbstractPropertyHelper implements PropertyHelperInterface
{
    /**
     * @var string
     */
    protected $targetFolder = 'files/_migrated/news_files/';

    /**
     * @var string
     */
    protected $oldFolder = 'uploads/media/';

    /**
     * @return void
     * @throws DBALException
     */
    public function manipulate(): void
    {
        $fileHelper = ObjectUtility::getObjectManager()->get(FileHelper::class);
        $fileNames = GeneralUtility::trimExplode(',', $this->getPropertyFromRecordOld('news_files'), true);
        foreach ($fileNames as $fileName) {
            if (is_file(GeneralUtility::getFileAbsFileName($this->oldFolder . $fileName)) === true) {
                $fileHelper->copyFileAndCreateReference(
                    $this->oldFolder . $fileName,
                    $this->targetFolder,
                    'tx_news_domain_model_news',
                    $this->propertyName,
                    $this->getPropertyFromRecord('uid')
                );
                $this->log->addMessage('Related file moved and created relation to it (' . $fileName . ')');
            }
        }
    }

    /**
     * Overrule original function and get values from original tt_news record
     *
     * @param string $propertyName
     * @return int|string
     */
    protected function getPropertyFromRecordOld(string $propertyName)
    {
        $propertiesOld = $this->getPropertiesFromOldRecord();
        if (array_key_exists($propertyName, $propertiesOld)) {
            return $propertiesOld[$propertyName];
        } else {
            throw new \LogicException('Property does not exist in ' . __CLASS__, 1569920259);
        }
    }

    /**
     * @return array
     */
    protected function getPropertiesFromOldRecord(): array
    {
        $queryBuilder = DatabaseUtility::getQueryBuilderForTable('tt_news');
        return (array)$queryBuilder->select('*')
            ->from('tt_news')
            ->where('uid=' . (int)$this->getPropertyFromRecord('_migrated_uid'))
            ->execute()
            ->fetch();
    }
}