<?php
class Plan
{
	private $id;
	private $usuario;
	private $oferta;
	private $inicio;
	private $fin;


	

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}