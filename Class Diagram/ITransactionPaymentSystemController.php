<?php


require_once ('Transactions.php');



use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface ITransactionPaymentSystemController
{

	/**
	 * 
	 * @param Transaction
	 */
	public function processTransaction(Transactions $Transaction);

}
?>