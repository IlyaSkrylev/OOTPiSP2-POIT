<?php




/**
 * @author webdesigner
 * @version 1.0
 * @created 12-дек-2024 16:18:48
 */
interface INetworkPrinterController
{

	/**
	 * 
	 * @param directorOrder
	 */
	public function printReport(DirectorReportEnum $directorOrder);

}
?>