<?php

/**
 * A FuelPHP package wrapping around the PDFCrowd PHP API class
 *
 * @package    Fuel-PDFCrowd
 * @version    1.0
 * @author     Dan Harper
 * @link       http://github.com/Radweb/fuel-pdfcrowd
 */

Autoloader::add_core_namespace('PDFCrowd');

Autoloader::add_classes(array(
	'PDFCrowd\\PDFCrowd'        => __DIR__.'/classes/pdfcrowd.php',
	
	'PDFCrowd\\Pdfcrowd_Client' => __DIR__.'/classes/pdfcrowd/client.php',
	'PDFCrowd\\PdfcrowdException' => __DIR__.'/classes/pdfcrowd/client.php',
));

/* End of file bootstrap.php */