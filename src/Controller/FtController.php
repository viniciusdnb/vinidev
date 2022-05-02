<?php

namespace src\Controller;

use src\Route\RouterController;

class FtController extends RouterController
{
	public function index()
	{
		$this->render("ftbarbearia/index");
	}
}

?>