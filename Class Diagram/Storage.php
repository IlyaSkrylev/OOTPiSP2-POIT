<?php


require_once ('Catalog.php');
require_once ('Sales.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:49
 */
class Storage
{

	private $addToStorageDateTime;
	private $smartphoneStorageCount;
	private $smartphoneId;
	private $smartphonePurchasePrice;
	private $storageId;
	public $m_Catalog;
	public $m_Sales;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getAddToStorageDateTime()
	{
		return $this->addToStorageDateTime;
	}

	public function getSmartphoneId()
	{
		return $this->thermosId;
	}

	public function getSmartphonePurchasePrice()
	{
		return $this->thermosPurchasePrice;
	}

	public function getSmartphoneStorageCount()
	{
		return $this->thermosStorageCount;
	}

	public function getStorageId()
	{
		return $this->storageId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setAddToStorageDateTime(timestamp $newVal)
	{
		$this->addToStorageDateTime = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSmartphoneId(int $newVal)
	{
		$this->thermosId = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSmartphonePurchasePrice(int $newVal)
	{
		$this->thermosPurchasePrice = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSmartphoneStorageCount(int $newVal)
	{
		$this->thermosStorageCount = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setStorageId(int $newVal)
	{
		$this->storageId = $newVal;
	}

}
?>