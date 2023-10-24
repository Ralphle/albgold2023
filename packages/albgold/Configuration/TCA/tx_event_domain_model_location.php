<?php
if (!defined ('TYPO3')) {
	die ('Access denied.');
}

return [
	'ctrl' => [
		'title' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_event_domain_model_location.label',
		'label' => 'title',
		'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
		'translationSource' => 'l10n_source',
		'iconfile' => 'EXT:albgold/Resources/Public/Icons/tx_event_domain_model_location.svg',
		'enablecolumns' => [
            'disabled' => 'hidden',
        ],
   ],

	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, locationaddress, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l18n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => '',
                        'value' => 0,
                    ],
                ],
                'foreign_table' => 'tx_event_domain_model_location',
                'foreign_table_where' =>
                    'AND {#tx_event_domain_model_location}.{#pid}=###CURRENT_PID###'
                    . ' AND {#tx_event_domain_model_location}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_source' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'l18n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
                'default' => '',
            ],
        ],
        'pid' => [
            'label' => 'pid',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'crdate' => [
            'label' => 'crdate',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],
        'tstamp' => [
            'label' => 'tstamp',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
            ],
        ],

		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
		
		
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_event_domain_model_location.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		
		'locationaddress' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_event_domain_model_location.locationaddress',
			'config' => array(
				'type' => 'text',
				'cols' => '48',
				'rows' => '3',
			),
		),		
	),
];
