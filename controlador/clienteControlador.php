<?php

function index(){
	exibir("cliente/index");
}

function adicionarCliente(){
	if(ehPost()){
		require('./servico/validacaoServico.php');

		$dadoBruto = htmlentities($_POST['nomeCliente']);

		if (validarUsuario()){
			$cmd = "INSERT INTO usuario VALUES ('$nomeCliente','$emailCliente','$senhaCliente')";
			if (mysql_query(conn(),$cmd) == true){
				echo "Cliente adicionado com sucesso";
			}
		}else{
			exibir("cliente/formulario",$errors);
		}
	}else{
		exibir("cliente/formulario");
	}
}

function logarCliente(){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		echo "legal";
	}else{
		exibir("cliente/login");
	}
}

?>