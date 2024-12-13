<?php


require_once ('IController.php');
require_once ('MainController.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:47
 */
class GuestController implements IController
{

	public $m_MainController;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param login
	 * @param paswordHashWihSalt
	 * @param authorizationSalt
	 */
	public function authorization(String $login, byte[64] $paswordHashWihSalt, byte[64] $authorizationSalt)
	{
	}

	/**
	 * 
	 * @param thermos_id
	 */
	public function getInfoAboutSmartphone(int $thermos_id)
	{
	}

	public function getMostSelledSmartphonesFromCatalog()
	{
	}

	/**
	 * 
	 * @param HttpRequest
	 */
	public function processRequest(HttpRequest $HttpRequest)
	{
	}

	/**
	 * 
	 * @param login
	 * @param paswordHash
	 */
	public function registration(String $login, byte[32] $paswordHash)
	{
	}

}
?>