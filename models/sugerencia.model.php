<?php
class sugerenciaModel
{
	private $pdo;

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

			$stm = $this->pdo->prepare("SELECT * FROM sugerencias");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Sugerencia();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('email', $r->email);
				$alm->__SET('sugerencia', $r->sugerencia);

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
			          ->prepare("SELECT * FROM sugerencias WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$alm = new Sugerencia();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('email', $r->email);
				$alm->__SET('sugerencia', $r->sugerencia);

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
			          ->prepare("DELETE FROM sugerencias WHERE id = ?");			          

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
			$sql = "UPDATE sugerencias SET 
						nombre         = ?, 
						email         = ?,
						sugerencia        = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('nombre'), 
					$data->__GET('email'), 
					$data->__GET('sugerencia'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Sugerencia $data)
	{		
		try 
		{
		$sql = "INSERT INTO sugerencias (nombre,email,sugerencia) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)->execute(
			array(
					$data->__GET('nombre'), 
					$data->__GET('email'),
					$data->__GET('sugerencia')				
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function prueba(){
		echo "atencion esto es una pruba";
	}
}