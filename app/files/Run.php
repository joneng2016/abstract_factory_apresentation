<?php

namespace App\Files;

class Run
{
	public function __construct($tipo)
	{
		$cf = null;
		if($tipo == 'luxo')
			$cf = new CarroLuxoFactory;
		if($tipo == 'popular')
			$cf = new CarroPopularFactory;

		$cd->montarRoda();
		$cd->montarSom();


	}
}
