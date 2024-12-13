<?php


require_once ('Sales.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
class OrderPosition
{

	private $orderId;
	private $storageId;
	private $salesId;
	public $m_Sales;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getOrderId()
	{
	}

	/**
	 * 
	 * @param orderId
	 */
	public function setOrderId(int $orderId)
	{
	}

	/**
	 * 
	 * @param salesId
	 */
	public function setSalesId(int $salesId)
	{
	}

	public function getSalesId()
	{
	}

	/**
	 * 
	 * @param storageId
	 */
	public function setStorageId(int $storageId)
	{
	}

	public function getStorageId()
	{
	}

}
?>