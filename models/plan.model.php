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

			$stm = $this->pdo->prepare("SELECT pl.id,us.nombre as usuario,of.nombre as oferta ,pl.inicio,pl.fin
										FROM planes pl
										join USUARIOS us on pl.idusuario=us.id
										join oferta of on pl.idoferta=of.id
										");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Plan();

				$alm->__SET('id', $r->id);
				$alm->__SET('usuario', $r->usuario);
				$alm->__SET('oferta', $r->oferta);
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
	public function ListarxUsuario($id)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT of.nombre as oferta ,pl.inicio,pl.fin
										FROM planes pl
										join USUARIOS us on pl.idusuario=us.id
										join oferta of on pl.idoferta=of.id
										where pl.idusuario=?
										");
			$stm->execute(array($id));

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Plan();
				$alm->__SET('oferta', $r->oferta);
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

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM planes WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Plan();

				$alm->__SET('id', $r->id);
				$alm->__SET('usuario', $r->usuario);
				$alm->__SET('oferta', $r->oferta);
				$alm->__SET('inicio', $r->inicio);
				$alm->__SET('fin', $r->fin);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("DELETE FROM planes WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Sugerencia $data)
	{
		try 
		{
			$sql = "UPDATE planes SET 
						usuario         = ?, 
						oferta         = ?,
						inicio        = ?,
						fin        = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('usuario'), 
					$data->__GET('oferta'), 
					$data->__GET('inicio'),
					$data->__GET('fin'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Plan $data)
	{		
		try 
		{

			
		$sql = "INSERT INTO planes(idusuario, idoferta, inicio, fin)
		VALUES (?,?,CURRENT_TIMESTAMP,DATE_ADD(CURRENT_TIMESTAMP, INTERVAL (select vencimiento from oferta where id=?)  DAY))";

		$this->pdo->prepare($sql)->execute(
			array(
					$data->__GET('usuario'), 
					$data->__GET('oferta'),
					$data->__GET('oferta')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}