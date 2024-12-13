<?php




/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:47
 */
class Catalog
{

	private $catalogId;
	private $addToCatalogDateTime;
	private $storageID;
	private $price;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getAddToCatalogDateTime()
	{
		return $this->addToCatalogDateTime;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setAddToCatalogDateTime(Date $newVal)
	{
		$this->addToCatalogDateTime = $newVal;
	}

	public function getCatalogId()
	{
		return $this->catalogId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setCatalogId(int $newVal)
	{
		$this->catalogId = $newVal;
	}

	public function getStorageID()
	{
		return $this->storageID;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setStorageID(int $newVal)
	{
		$this->storageID = $newVal;
	}

	public function getPrice()
	{
		return $this->thermosId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setPrice(int $newVal)
	{
		$this->thermosId = $newVal;
	}

}
?>