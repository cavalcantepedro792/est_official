<?php 

    function index() {
        exibir("produto/index");
    }

    function visualizar(){
        $dadosProduto = array(
            'nome' => "Asus Zenfone 5",
            'preco' => "2.199,00",
            'descricao' => "Smartphone Asus Zenfone 5 64GB Dual Chip Android Oreo Tela 6.2* Snapdragon 636 Octacore 4G Câmera 12MP + 8MP (Dual Traseira) 3300mAh - Preto"
        );
        exibir("produto/visualizar", $dadosProduto);
    }

    function adicionar() {
        if(ehPost()){
            exibir("produto/visualizar",$_POST);
        }else{
            exibir("produto/formulario");
        }
    }

?>