<?php

    function index(){
        exibir("cliente/index");
    }

    function adicionarCliente(){
        if(ehPost()){
            exibir("cliente/visualizar",$_POST);
        }else{
            exibir("cliente/formulario");
        }
    }

?>