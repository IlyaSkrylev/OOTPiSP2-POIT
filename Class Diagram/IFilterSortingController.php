<?php


require_once ('AuthorizedUserController.php');
require_once ('ManagerController.php');
require_once ('DirectorController.php');



use ;
use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface IFilterSortingController
{

	public function getAvaliableFilters();

	public function getAvaliableSortingParametrs();

	public function getFilteredAndSortedSmartphones();

	public function getFilters();

	public function getSortingParametrs();

	public function setFilters();

	public function setSortingParametrs();

}
?>