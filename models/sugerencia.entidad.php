<?php
class Sugerencia
{
	private $id;
	private $nombre;
	private $email;
	private $sugerencia;
	

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}