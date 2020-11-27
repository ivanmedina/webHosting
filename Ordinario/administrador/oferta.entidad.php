<?php
class Oferta
{
	private $id;
	private $nombre;
	private $precio;
	private $espacio;
	private $transferencia;
	private $sitio;
	private $registro;
	private $cuentas;
	private $bases;
	private $subdominios;
	private $garantia;
	private $panel;
	private $tecnologia;
	private $soporte;
	private $vencimiento;
	

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}