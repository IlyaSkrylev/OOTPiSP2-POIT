<?php


require_once ('IDirectorReport.php');
require_once ('INetworkPrinterController.php');
require_once ('IController.php');
require_once ('MainController.php');



use ;
use ;
use ;
use ;
/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:47
 */
class DirectorController implements IDirectorReport, INetworkPrinterController, IController
{

	public $m_MainController;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function chooseTimePeriod()
	{
	}

	public function getBestSailedSmartphonesReport()
	{
	}

	public function getProfitableCarsReport()
	{
	}

	public function getProfitCarsReport()
	{
	}

	public function logout()
	{
	}

	/**
	 * 
	 * @param directorOrder
	 */
	public function printReport(DirectorReportEnum $directorOrder)
	{
	}

	/**
	 * 
	 * @param HttpRequest
	 */
	public function processRequest(HttpRequest $HttpRequest)
	{
	}

	public function ShutDownSystem()
	{
	}

}
?>