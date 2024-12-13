<?php


require_once ('Sales.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:49
 */
class Transactions
{

	private $transactionId;
	private $transactionTotal;
	private $paymentDateTime;
	private $senderBankNum;
	private $recipientBankNum;
	private $userId;
	public $m_Sales;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getPaymentDateTime()
	{
		return $this->paymentDateTime;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setPaymentDateTime(timestamp $newVal)
	{
		$this->paymentDateTime = $newVal;
	}

	public function getRecipientBankNum()
	{
		return $this->recipientBankBook;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setRecipientBankNum(BigInteger $newVal)
	{
		$this->recipientBankBook = $newVal;
	}

	public function getSenderBankNum()
	{
		return $this->senderBankBook;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setSenderBankNum(BigInteger $newVal)
	{
		$this->senderBankBook = $newVal;
	}

	public function getTransactionId()
	{
		return $this->transactionId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setTransactionId(int $newVal)
	{
		$this->transactionId = $newVal;
	}

	public function getTransactionTotal()
	{
		return $this->transactionTotal;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setTransactionTotal(int $newVal)
	{
		$this->transactionTotal = $newVal;
	}

	public function getUserId()
	{
		return $this->userId;
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