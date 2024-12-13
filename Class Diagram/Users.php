<?php


require_once ('Transactions.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:49
 */
class Users
{

	private $userId;
	private $userLogin;
	private $passwordHash;
	private $roleId;
	private $userStatusId;
	public $m_Transactions;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getPasswordHash()
	{
		return $this->passwordHash;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setPasswordHash(byte[32] $newVal)
	{
		$this->passwordHash = $newVal;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setRoleId(int $newVal)
	{
		$this->roleId = $newVal;
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

	public function getUserLogin()
	{
		return $this->userLogin;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setUserLogin(String $newVal)
	{
		$this->userLogin = $newVal;
	}

	public function getUserStatusId()
	{
		return $this->userStatusId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setUserStatusId(int $newVal)
	{
		$this->userStatusId = $newVal;
	}

}
?>