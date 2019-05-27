<?php

require("servico/validacaoServico.php");
require_once "modelo/clienteModelo.php";

function index(){
	exibir("cliente/index");
}

function logarCliente(){
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		echo "legal";
	}else{
		exibir("cliente/login");
	}
}

function adicionar(){
   if (ehPost()){
       
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $cpf = $_POST["cpf"];
       $nome = $_POST["nome"];
       $sobrenome = $_POST["sobrenome"];
       $data_de_nascimento = $_POST["data_de_nascimento"];
       $sexo = $_POST["sexo"];
       $telefone = $_POST["telefone"];
              
       /*echo validar_email($email);
       echo validar_elementos_obrigatorios($senha);
       echo validar_elementos_especificos($cpf);
       echo validar_elementos_obrigatorios($nome);  
       echo validar_elementos_obrigatorios($sobrenome);
       echo validar_elementos_especificos($data_de_nascimento);
       echo validar_elementos_especificos($telefone);*/
       
       /*
       lembrar de verificar o retorno da função booleana e armazenar o erro no vetor
       if(validar_email($email) == false){
           $errors[] = "Adicione um email válido";
       }
       */
       
       if
       (
          (validar_email($email))&&
          (validar_elementos_obrigatorios($senha))&&
          (validar_elementos_especificos($cpf))&&
          (validar_elementos_obrigatorios($nome))&&
          (validar_elementos_obrigatorios($sobrenome))&&
          (validar_elementos_especificos($data_de_nascimento))&&
          (validar_elementos_especificos($telefone))
       )
       {
           $msg = adicionarCliente($email,$senha,$cpf,$nome,$sobrenome,$data_de_nascimento,$sexo,$telefone);
           echo $msg;
       }else{
           echo "Refaça o cadastro";
           exibir("cliente/formulario");
       }
       
   } else{
       exibir("cliente/formulario");
   }
}

function contato(){
   if (ehPost()){
       
       $nome = $_POST["nome"];
       $email = $_POST["email"];
       $assunto = $_POST["assunto"];
       $telefone = $_POST["telefone"];
       $endereco = $_POST["endereco"];
       $mensagem = $_POST["mensagem"];
       
       echo validar_elementos_obrigatorios($nome);
       echo validar_email($email);
       echo validar_elementos_obrigatorios($assunto);
       echo validar_elementos_especificos($telefone); 
       echo validar_elementos_obrigatorios($endereco);
       echo validar_elementos_obrigatorios($mensagem);
       
       echo "<pre>";
       print_r($_POST);
       echo "</pre>";
       
   } else{
       exibir("cliente/contato");
   }
}

?>