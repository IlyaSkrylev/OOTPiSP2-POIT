<?php


require_once ('Users.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
class Roles
{

	private $roleId;
	private $roleName;
	public $m_Users;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function getRoleName()
	{
		return $this->roleName;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setRoleName(string $newVal)
	{
		$this->roleName = $newVal;
	}

	public function getRoleId()
	{
		return $this->roleId;
	}

	/**
	 * 
	 * @param newVal
	 */
	public function setRoleId(bool $newVal)
	{
		$this->roleId = $newVal;
	}

}
?>