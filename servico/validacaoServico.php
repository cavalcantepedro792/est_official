<?php

	# VALIDAR USUARIO #

	function validarUsuario($nome){	}

        // alterar para tipo booleano
        
	function validar_elementos_obrigatorios($nome) {
		if (strlen(trim($nome))==0) {
			//$errors = "Campo obrigatório.<br>";
			return false;
		}
	}

	function validar_email($email) {
		$input['email'] = filter_var($email, FILTER_VALIDATE_EMAIL);
		if ($input['email'] == FALSE) {
			//return 'Informe um e-mail válido.<br>';
                    return false;
		}
	}

	function validar_elementos_especificos($valor) {
		$input['valor'] = filter_var($valor, FILTER_SANITIZE_NUMBER_INT);
		if ($input['valor'] == FALSE) {
			//return 'Informe valor(es) numérico(s).<br>';
                        return false;
		}
	}

?>