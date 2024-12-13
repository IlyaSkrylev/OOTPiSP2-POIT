<?php


require_once ('Sales.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:46
 */
class Address
{

	private $id;
	private $building;
	private $flat;
	private $street;
	public $m_Sales;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getId()
	{
		return $this->id;
	}

	public function getFlat()
	{
		return $this->city;
	}

	public function getBuilding()
	{
		return $this->building;
	}

	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * 
	 * @param city
	 */
	public function setFlat(int $city)
	{
		$this->city = $newVal;
	}

	/**
	 * 
	 * @param street
	 */
	public function setStreet(String $street)
	{
		$this->street = $newVal;
	}

	/**
	 * 
	 * @param id
	 */
	public function setId(int $id)
	{
		$this->id = $newVal;
	}

	/**
	 * 
	 * @param building
	 */
	public function setBuilding(int $building)
	{
		$this->building = $newVal;
	}

}
?>