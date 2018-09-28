<?php

namespace App\Files;

class CarroLuxoFactory extends CarroFactory
{	
	public function montarRoda(){
		return new RodaLigaLeve();
	}
	public function montarSom()
	{
		return new SomCdPlayer;
	}
}
