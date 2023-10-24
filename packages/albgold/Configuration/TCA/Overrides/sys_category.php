<?php
defined( 'TYPO3' )or die();


$fields = [	
	'catcolor' => [
		'exclude' => 0,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_bootstrappackage_icon_group_item.iconcolor',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				[
                   'label' => 'Standard',
                    'value' => 'grey',
                ],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.primary','primary',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.secondary','secondary',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.tertiary','tertiary',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.quarternary','quarternary',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.red','red',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.orange','orange',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.yellow','yellow',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.green','green',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.green-light','green-light',],
				['LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:albgold.color.green-dark','green-dark',],
			],
			'size' => 1,
            'maxitems' => 1,
			'default' => 'grey',
		],
	],
	'iconcolor2' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.eventtime',
		'config' => Array (
			'type' => 'text',
			'cols' => '48',
			'rows' => '2',
		)
	),
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'sys_category', $fields );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'sys_category',
	'catcolor',
	'',
	'after:images'
);