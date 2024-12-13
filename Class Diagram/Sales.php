<?php




/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
class Sales
{

	private $adressId;
	private $orderId;
	private $orderList;
	private $salesId;
	private $soldSmartphonesDateTime;
	private $soldSmartphonesCount;
	private $status;
	private $transactionId;
	private $userId;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getAdressId()
	{
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function getOrderList()
	{
	}

	public function getSalesId()
	{
		return $this->salesId;
	}

	public function getSoldSmartphonesCount()
	{
		return $this->soldThermosCount;
	}

	public function getSoldSmartphonesDateTime()
	{
		return $this->soldThermosDateTime;
	}

	public function getStatus()
	{
	}

	public function getTransactionId()
	{
	}

	public function getUserId()
	{
		return $this->userId;
	}

	/**
	 * 
	 * @param adress
	 */
	public function setAdressId(int $adress)
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setOrderId(int $newVal)
	{
		$this->orderId = $newVal;
	}

	/**
	 * 
	 * @param orderList
	 */
	public function setOrderList(array $orderList)
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSalesId(int $newVal)
	{
		$this->salesId = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSoldSmartphonesDateTime(timestamp $newVal)
	{
		$this->soldThermosDateTime = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSoldSmartphonesCount(int $newVal)
	{
		$this->soldThermosCount = $newVal;
	}

	/**
	 * 
	 * @param status
	 */
	public function setStatus(bool $status)
	{
	}

	/**
	 * 
	 * @param transictionId
	 */
	public function setTransactionId(int $transictionId)
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setUserId(int $newVal)
	{
		$this->userId = $newVal;
	}

}
?>