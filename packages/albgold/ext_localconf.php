<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['albgold'] = 'EXT:albgold/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:albgold/Configuration/TsConfig/Page/All.tsconfig">');


# - - - - - - -# 
# ICONS
# - - - - - - -
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\Tn34\Albgold\Icons\AlbgoldiconsProvider::class] = \Tn34\Albgold\Icons\AlbgoldiconsProvider::class;

#$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/bootstrap-package/icons']['provider'][\BK2K\BootstrapPackage\Icons\AlbgoldiconsProvider::class] = \BK2K\BootstrapPackage\Icons\AlbgoldiconsProvider::class;



# - - - - - - -# 
# News
# - - - - - - -#
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News']['albgold'] = 'albgold';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['Domain/Repository/AbstractDemandedRepository.php']['findDemanded']['albgold']  = 'Tn34\\Albgold\\Hooks\\Repository->modify';


$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/Category']['albgold'] = 'albgold';