<?php

namespace src\Controller;

use src\Route\RouterController;

class CalculadoraController extends RouterController
{
	public function index()
	{
		$this->render("calculadora/index");
	}
}


?>