<?php
class Plan
{
	private $id;
	private $idusuario;
	private $idoferta;
	private $inicio;
	private $fin;


	

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}