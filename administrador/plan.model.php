<?php
class planModel
{
	private $pdo;

	function jsonEncodeArray( $array ){
		array_walk_recursive( $array, function(&$item) { 
		   $item = utf8_encode( $item ); 
		});
		return json_encode( $array );
	}
	 
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=webHosting', 'user', 'password');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM planes");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Plan();

				$alm->__SET('id', $r->id);
				$alm->__SET('idusuario', $r->idusuario);
				$alm->__SET('idoferta', $r->idoferta);
				$alm->__SET('inicio', $r->inicio);
				$alm->__SET('fin', $r->fin);
		

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarTipoPlanes()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT of.nombre as nombre,COUNT(*) as total FROM planes pl JOIN oferta of on pl.idoferta=of.id group by idoferta");
			$stm->execute();
			$valores=[];
			// $dato=$stm->fetch()->nombre;
			for($i=0;$i<$stm->rowCount();$i++)
			{	$r=$stm->fetch();
				$valores[$r['nombre']]=$r['total'];
			}
				
			return $valores;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarAVencer()
	{
		try
		{
			$stm = $this->pdo->prepare(" SELECT of.nombre as nombre,count(*) as total FROM planes pl JOIN oferta of on pl.idoferta=of.id WHERE DATEDIFF(CAST(pl.fin as Date),CURRENT_DATE) < 11 group by pl.idoferta");
			$stm->execute();
			$valores=[];
			// $dato=$stm->fetch()->nombre;
			for($i=0;$i<$stm->rowCount();$i++)
			{	$r=$stm->fetch();
				$valores[$r['nombre']]=$r['total'];
			}
				
			return $valores;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


}