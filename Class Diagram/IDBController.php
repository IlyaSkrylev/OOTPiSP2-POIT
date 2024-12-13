<?php


require_once ('Users.php');
require_once ('Storage.php');
require_once ('GuestController.php');



use ;
use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface IDBController
{

	/**
	 * 
	 * @param object
	 */
	public function addEntity(object $object);

	/**
	 * 
	 * @param object
	 */
	public function deleteEntity(object $object);

	/**
	 * 
	 * @param entityId
	 */
	public function editEntity(int $entityId);

	public function getAllEntities();

	/**
	 * 
	 * @param id
	 */
	public function getEntityById(int $id);

}
?>