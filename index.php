<?php

require_once __DIR__ . "/vendor/autoload.php";

use src\Route\Start;
echo "<pre>";
try
{
	$star = new Start;

}
catch(\Exception $ex)
{
	echo $ex->getMessage();
}

?>