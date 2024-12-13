<?php


require_once ('ITransactionPaymentSystemController.php');
require_once ('IAccountStatePaymentSystemController.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
class PaymentSystemController implements ITransactionPaymentSystemController, IAccountStatePaymentSystemController
{

	function __construct()
	{
	}

	function __destruct()
	{
	}



	/**
	 * 
	 * @param Transaction
	 */
	public function processTransaction(Transactions $Transaction)
	{
	}

	public function getAccountStateReport()
	{
	}

	/**
	 * 
	 * @param Transaction
	 */
	public function processTransaction(Transactions $Transaction)
	{
	}

}
?>