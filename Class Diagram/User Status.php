<?php


require_once ('Users.php');
require_once ('Sales.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:49
 */
class User Status
{

	private $userStatusId;
	private $userStatusState;
	public $m_Users;
	public $m_Sales;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getUserStatusId()
	{
		return $this->userStatusId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setUserStatusId(byte $newVal)
	{
		$this->userStatusId = $newVal;
	}

	public function getUserStatusState()
	{
		return $this->userStatusState;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setUserStatusState(string $newVal)
	{
		$this->userStatusState = $newVal;
	}

}
?>