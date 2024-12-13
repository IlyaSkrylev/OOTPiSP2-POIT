<?php


require_once ('ManagerController.php');
require_once ('DirectorController.php');



use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface ISupplierController
{

	/**
	 * 
	 * @param supplierId
	 */
	public function getStorageSupplyingOrder(int $supplierId);

}
?>