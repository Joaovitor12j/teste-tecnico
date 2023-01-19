<?php 
/**
* 
*/
class ClienteController
{
	function __construct()
	{
		
	}

	function index(){
		$listaCliente = Cliente::all();

		require_once('Views/Cliente/cliente.php');
	}

	function save(){
		try{
			$cliente = new Cliente(
				NULL, 
				$_POST['nome'], 
				$_POST['endereco'], 
				$_POST['complemento'], 
				$_POST['numero'], 
				$_POST['bairro'], 
				$_POST['cep'], 
				$_POST['cidade'],
				$_POST['estado']
			);
			
			Cliente::save($cliente);

			return $this->index();

		} catch (\Throwable $erro) {

			return $this->index();
		}
	}

}

?>