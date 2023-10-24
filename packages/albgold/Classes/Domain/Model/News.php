<?php

namespace Tn34\Albgold\Domain\Model;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News {


	/**
	 * endtimeevent
	 *
	 * @var string
	 */
	protected $endtimeevent;

	/**
	 * Returns the endtimeevent
	 *
	 * @return string $endtimeevent
	 */
	public function getEndtimeevent() {
		return $this->endtimeevent;
	}

	/**
	 * Sets the endtimeevent
	 *
	 * @param string $endtimeevent
	 * @return void
	 */
	public function setEndtimeevent($endtimeevent) {
		$this->endtimeevent = $endtimeevent;
	}

	




   /**
    * @var string
    */
   protected $starttimeevent;

   /**
    * @return string
    */
   public function getStarttimeevent() {
      return $this->starttimeevent;
   }

   /**
    * @param string $starttimeevent
    */
   public function setStarttimeevent($starttimeevent) {
      $this->starttimeevent = $starttimeevent;
   }
	
	
	
	
	
   /**
    * @var string
    */
   protected $eventtime;

   /**
    * @return string
    */
   public function getEventtime() {
      return $this->eventtime;
   }

   /**
    * @param string $eventtime
    */
   public function setEventtime($eventtime) {
      $this->eventtime = $eventtime;
   }
	
	
	
		
   /**
    * @var string
    */
   protected $location;

   /**
    * @return string
    */
   public function getLocation() {
      return $this->location;
   }

   /**
    * @param string $location
    */
   public function setLocation($location) {
      $this->location = $location;
   }
	
	
	
	
	
	/**
    * @var string
    */
   protected $highlight;

   /**
    * @return string
    */
   public function getHighlight() {
      return $this->highlight;
   }

   /**
    * @param string $highlight
    */
   public function setHighlight($highlight) {
      $this->highlight = $highlight;
   }
	
	
	
	
	/**
    * @var string
    */
   protected $booked;

   /**
    * @return string
    */
   public function getBooked() {
      return $this->booked;
   }

   /**
    * @param string $booked
    */
   public function setBooked($booked) {
      $this->booked = $booked;
   }
	
	
	
	
	
	
	
	/**
    * @var string
    */
   protected $price;

   /**
    * @return string
    */
   public function getPrice() {
      return $this->price;
   }

   /**
    * @param string $price
    */
   public function setPrice($price) {
      $this->price = $price;
   }

	
	
	
	
	
	
	/**
    * @var string
    */
   protected $pricecaption;

   /**
    * @return string
    */
   public function getPricecaption() {
      return $this->pricecaption;
   }

   /**
    * @param string $pricecaption
    */
   public function setPricecaption($pricecaption) {
      $this->pricecaption = $pricecaption;
   }
	
	
	
	
	
	
	/**
    * @var string
    */
   protected $extendedlinks;

   /**
    * @return string
    */
   public function getExtendedlinks() {
      return $this->extendedlinks;
   }

   /**
    * @param string $extendedlinks
    */
   public function setExtendedlinks($extendedlinks) {
      $this->extendedlinks = $extendedlinks;
   }

		
		
}