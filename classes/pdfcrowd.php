<?php

namespace PDFCrowd;

class PDFCrowd
{
	private static $pc;

	/**
	 * Initialise FuelPHP package, load config values
	 * @return void
	 */
	public static function _init()
	{
		\Config::load('pdfcrowd', true);

		$username = \Config::get('pdfcrowd.username');
		$apikey   = \Config::get('pdfcrowd.apikey');
		$hostname = \Config::get('pdfcrowd.hostname');

		self::$pc = new Pdfcrowd_Client($username, $apikey, $hostname);
	}

	public static function __callStatic($method, $arguments)
	{
		return call_user_func_array(array(self::$pc, $method), $arguments);
	}
}