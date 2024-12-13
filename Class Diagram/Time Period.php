<?php


require_once ('DirectorController.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:49
 */
class Time Period
{

	private $idTimePeriod;
	private $startDate;
	private $endDate;
	private $typeOfOrder;
	private $userId;
	public $m_DirectorController;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getStartDate()
	{
	}

	/**
	 * 
	 * @param date
	 */
	public function setStartDate(timestamp $date)
	{
	}

	/**
	 * 
	 * @param date
	 */
	public function setEndDate(timestamp $date)
	{
	}

	public function getEndDate()
	{
	}

	public function getTypeOfOrder()
	{
	}

	/**
	 * 
	 * @param tupeOfOrder
	 */
	public function setTypeOfOrder(DirectorReportEnum $tupeOfOrder)
	{
	}

	public function getUserId()
	{
	}

	/**
	 * 
	 * @param userId
	 */
	public function setUserId(int $userId)
	{
	}

	/**
	 * 
	 * @param idTimePeriod
	 */
	public function setIdTimePeriod(int $idTimePeriod)
	{
	}

	public function getIdTimePeriod()
	{
	}

}
?>