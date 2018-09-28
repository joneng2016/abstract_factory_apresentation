<?php

namespace App\Files;

class CarroPobre extends CarroFactory
{	
	public function montarRoda(){
		return new RodaSimples();
	}
	public function montarSom()
	{
		return new SomTocaFita;
	}
}
