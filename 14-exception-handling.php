<?php

class Newsletter {
	public function registerEmail($email) {
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			throw new Exception ("Não foi possível cadastrar o e-mail", 400);
		else:
			echo "E-mail cadastrado com sucesso!";
		endif;
	}
}

$newsletter = new Newsletter();

try{
	$newsletter->registerEmail("teste@email.");
}catch (Exception $e) {
	echo "Mensagem: ".$e->getMessage()."\n";
	echo "Código: ".$e->getCode()."\n";
	echo "Linha: ".$e->getLine()."\n";
	echo "Arquivo: ".$e->getFile()."\n";
}

// console:
// Mensagem: Não foi possível cadastrar o e-mail
// Código: 400
// Linha: 6
// Arquivo: /home/user/scripts/code.php
