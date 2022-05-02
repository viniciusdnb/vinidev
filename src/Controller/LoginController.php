<?php

namespace src\Controller;

use src\Route\RouterController;

class LoginController extends RouterController
{
	public function index()
	{
		$this->render("login/index");	
	}
}

?>