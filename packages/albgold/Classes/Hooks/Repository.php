<?php
namespace Tn34\Albgold\Hooks;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use \GeorgRinger\News\Domain\Repository\NewsRepository;

class Repository {

 public function modify(array $params, NewsRepository $newsRepository) {
    $this->updateConstraints($params['demand'], $params['respectEnableFields'], $params['query'], $params['constraints']);
  }

  /**
   * @param \GeorgRinger\News\Domain\Model\Dto\NewsDemand $demand
   * @param bool $respectEnableFields
   * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
   * @param array $constraints
   */
  protected function updateConstraints($demand, $respectEnableFields, \TYPO3\CMS\Extbase\Persistence\QueryInterface $query, array &$constraints) {
    
    $getParams = \TYPO3\CMS\Core\Utility\GeneralUtility::_GET();	
	if ( $getParams ) {
		$title = $getParams['tx_news_pi1']['overwriteDemand']['title'];
		
		if($title || $title != ''){		
      		$constraints[] = $query->like('title', '%' . $title . '%');
    	}
	}
	
	
	 
	  
	 
	/*
    $careerFunction = $getParams['tx_news_pi1']['careerFunction'];
    $careerCountry = $getParams['tx_news_pi1']['careerCountry'];
	$careerBusiness = $getParams['tx_news_pi1']['careerBusiness'];
	$careerLocation = $getParams['tx_news_pi1']['careerLocation'];
	$careerGroup = $getParams['tx_news_pi1']['careerGroup'];
	
	  
    if($careerFunction != ''){
      $constraints[] = $query->equals('careerFunction', $careerFunction);
    }
	  
	if($careerCountry != ''){
      $constraints[] = $query->equals('careerCountry', $careerCountry);
    }
	  
	if($careerBusiness != ''){
      $constraints[] = $query->equals('careerBusiness', $careerBusiness);
    }
	  
	if($careerLocation != ''){
      $constraints[] = $query->equals('careerLocation', $careerLocation);
    }
	  
	 if($careerGroup != ''){
      $constraints[] = $query->equals('careerGroup', $careerGroup);
    }
	
	*/
	  
	  
	 
	  
	  
  }
  
}
