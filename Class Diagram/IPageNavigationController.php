<?php


require_once ('GuestController.php');
require_once ('AuthorizedUserController.php');
require_once ('ManagerController.php');
require_once ('DirectorController.php');



use ;
use ;
use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface IPageNavigationController
{

	/**
	 * 
	 * @param currentPageId
	 */
	public function getNextPage(int $currentPageId);

	/**
	 * 
	 * @param currentPageId
	 */
	public function getPrevPage(int $currentPageId);

	public function getFirstPage();

	public function getLastPage();

	/**
	 * 
	 * @param pageId
	 */
	public function GetPageByPageNumber(int $pageId);

}
?>