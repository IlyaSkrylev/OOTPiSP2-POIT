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
class AuthorizedUserController implements IController
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
	 * @param j
	 */
	public function addSmartphoneToBasket(Smartphone $j)
	{
	}

	/**
	 * 
	 * @param book_id
	 * @param amount
	 */
	public function changeAmountOfSmartphonesInBasket(int $book_id, int $amount)
	{
	}

	public function createOrder()
	{
	}

	/**
	 * 
	 * @param basket_id
	 */
	public function getSmartphonesFromBasket(int $basket_id)
	{
	}

	/**
	 * 
	 * @param book_id
	 */
	public function getInfoAboutSmartphone(int $book_id)
	{
	}

	public function getMostSelledSmartphonesFromCatalog()
	{
	}

	public function logout()
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
	 * @param book_id
	 */
	public function removeSmartphoneFromBasket(int $book_id)
	{
	}

}
?>