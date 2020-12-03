<?php
class OfertaModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=bs_slider', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar($val)
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM oferta");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Oferta();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('precio', $r->precio);
				$alm->__SET('espacio', $r->espacio);
				$alm->__SET('transferencia', $r->transferencia);
				$alm->__SET('sitio', $r->sitio);
				$alm->__SET('registro', $r->registro);
				$alm->__SET('cuentas', $r->cuentas);
				$alm->__SET('bases', $r->bases);
				$alm->__SET('subdominios', $r->subdominios);
				$alm->__SET('garantia', $r->garantia);
				$alm->__SET('panel', $r->panel);
				$alm->__SET('tecnologia', $r->tecnologia);
				$alm->__SET('soporte', $r->soporte);
				$alm->__SET('vencimiento', $r->vencimiento);

				$result[] = $alm;
			}

			return $result;
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
			          ->prepare("SELECT * FROM oferta");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Oferta();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('precio', $r->precio);
				$alm->__SET('espacio', $r->espacio);
				$alm->__SET('transferencia', $r->transferencia);
				$alm->__SET('sitio', $r->sitio);
				$alm->__SET('registro', $r->registro);
				$alm->__SET('cuentas', $r->cuentas);
				$alm->__SET('bases', $r->bases);
				$alm->__SET('subdominios', $r->subdominios);
				$alm->__SET('garantia', $r->garantia);
				$alm->__SET('panel', $r->panel);
				$alm->__SET('tecnologia', $r->tecnologia);
				$alm->__SET('soporte', $r->soporte);
				$alm->__SET('vencimiento', $r->vencimiento);

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
			$stm = $this->pdo
			          ->prepare("DELETE FROM oferta WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Oferta $data)
	{
		try 
		{
			$sql = "UPDATE oferta SET 
						nombre         = ?, 
						precio         = ?,
						espacio        = ?, 
						transferencia  = ?, 
						sitio 		   = ?, 
						registro       = ?, 
						cuentas        = ?, 
						bases          = ?, 
						subdominios    = ?, 
						garantia       = ?, 
						panel          = ?, 
						tecnologia     = ?, 
						soporte        = ?, 
						vencimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('nombre'), 
					$data->__GET('precio'), 
					$data->__GET('espacio'),
					$data->__GET('transferencia'),
					$data->__GET('sitio'),
					$data->__GET('registro'),
					$data->__GET('cuentas'),
					$data->__GET('bases'),
					$data->__GET('subdominios'),
					$data->__GET('garantia'),
					$data->__GET('panel'),
					$data->__GET('tecnologia'),
					$data->__GET('soporte'),
					$data->__GET('vencimiento'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Oferta $data)
	{
		try 
		{
		$sql = "INSERT INTO oferta (nombre,precio,espacio,transferencia,sitio,registro,cuentas,bases,subdominios,garantia,panel,tecnologia,soporte,vencimiento) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('nombre'), 
					$data->__GET('precio'), 
					$data->__GET('espacio'),
					$data->__GET('transferencia'),
					$data->__GET('sitio'),
					$data->__GET('registro'),
					$data->__GET('cuentas'),
					$data->__GET('bases'),
					$data->__GET('subdominios'),
					$data->__GET('garantia'),
					$data->__GET('panel'),
					$data->__GET('tecnologia'),
					$data->__GET('soporte'),
					$data->__GET('vencimiento'),
					$data->__GET('id')
				
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}