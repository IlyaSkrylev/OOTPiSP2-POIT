<?php


require_once ('IController.php');
require_once ('MainController.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
class ManagerController implements IController
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
	 * @param sm
	 */
	public function addSmartphoneToCatalog(Smartphone $sm)
	{
	}

	/**
	 * 
	 * @param sm
	 */
	public function addSmartphoneToStorage(Smartphone $sm)
	{
	}

	public function getPayingOrdersOrderByIncreasePaymentTime()
	{
	}

	/**
	 * 
	 * @param suplierId
	 */
	public function getStorageSupplyingOrder(int $suplierId)
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
	 * @param thermos_id
	 */
	public function removeSmartphoneFromCatalog(int $thermos_id)
	{
	}

	/**
	 * 
	 * @param order_id
	 */
	public function updateOrderStatus(int $order_id)
	{
	}

}
?>