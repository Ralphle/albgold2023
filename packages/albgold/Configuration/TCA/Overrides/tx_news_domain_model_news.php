<?php
defined( 'TYPO3' )or die();


$fields = [
	'starttimeevent' => array(        
    'exclude' => 0,     
    'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.starttimeevent',      
    'config' => array(
        'type'     => 'input',
        'size'     => '12',
        'max'      => '20',
        'eval'     => 'datetime',
        'checkbox' => '0',
        'default'  => time(),
  	  ),
	),
	
	'endtimeevent' => array(        
    'exclude' => 0,     
    'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.endtimeevent',      
    'config' => array(
        'type'     => 'input',
        'size'     => '12',
        'max'      => '20',
        'eval'     => 'datetime',
        'checkbox' => '0',
        'default'  => time(),
  	  ),
	),
	
	'location' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_event_domain_model_location.label',
		'config' => array(
				'type' => 'select',
                'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_event_domain_model_location',	
				'foreign_table_where' => 'AND tx_event_domain_model_location.hidden=0 ORDER BY tx_event_domain_model_location.title',	
				'size' => 1,	
				'minitems' => 0,
			  	'maxitems' => 1,
			),
	),
	'eventtime' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.eventtime',
		'config' => Array (
			'type' => 'text',
			'cols' => '48',
			'rows' => '2',
		)
	),
	'booked' => array(
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.booked',
        'exclude' => 1,
        'config' => array(
                'type' => 'check',
                'default' => '0',
				'items' => array(
    			array('ausgebucht', '1'),
    			array('Restplätze vorhanden', '2'),
			),
        )
	),
	'price' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.price',
		'config' => array(
			'type' => 'text',
			'size' => 48,
			'eval' => 'trim'
		)
	),
	'pricecaption' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.pricecaption',
		'config' => array(
			'type' => 'input',
			'size' => 48,
			'eval' => 'trim',
			'default' => '[inkl.Lebensmittelkosten und Mineralwasser]'
		)
	),
	'highlight' => array(
		'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.highlight',
        'exclude' => 1,
        'config' => array(
                'type' => 'check',
                'default' => '0'
        )
	),
	'extendedlinks' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:albgold/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.extendedlinks',
			'config' => array(
				'type' => 'text',
				'cols' => '48',
				'rows' => '4',
			),
		),		
	
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'tx_news_domain_model_news', $fields );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
	'tx_news_domain_model_news',
	'--div--;Events,eventtime,starttimeevent,endtimeevent,location,highlight,booked,price,pricecaption,extendedlinks'
);
