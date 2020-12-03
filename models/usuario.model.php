<?php
class UsuarioModel
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

			$stm = $this->pdo->prepare("SELECT * FROM USUARIOS");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$alm = new Usuario();

				$alm->__SET('id', $r->id);
				$alm->__SET('nombre', $r->nombre);
				$alm->__SET('clave', $r->clave);

				$result[] = $alm;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM USUARIOS WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Usuario $data)
	{
		try 
		{
			$sql = "UPDATE USUARIOS SET 
						clave         = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array( 
					$data->__GET('clave'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Insertar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO USUARIOS (nombre,clave) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('nombre'), 
					$data->__GET('clave')
				
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	public function buscarUsuario($nombre)
	{	$usado=True;
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM USUARIOS WHERE nombre = ?");
			$stm->execute(array($nombre));
			if($stm->rowCount()==0){
				$usado=TRUE;
			}else{
				$usado=FALSE;
			}			
			return $usado;		
		} catch (Exception $e) 
		{	echo "error";
			die($e->getMessage());
		}
	}
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM USUARIOS WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);
			$user=new Usuario();
				$user->__SET('id', $r->id);
				$user->__SET('nombre', $r->nombre);
				$user->__SET('clave', $r->clave);
			return $user;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function ObtenerUsuario($nombre)
	{	
		try 
		{
			$stm = $this->pdo ->prepare("SELECT * FROM USUARIOS WHERE nombre = ?");
			$stm->execute(array($nombre));
			$r = $stm->fetch(PDO::FETCH_OBJ);
			$user=new Usuario();
			$user->__SET('id', $r->id);
			$user->__SET('nombre', $r->nombre);
			$user->__SET('clave', $r->clave);
			return $user;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}