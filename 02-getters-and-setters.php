<?php

class Login{
	private $email;
	private $password;
	
	public function SetEmail($e) {
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}
	
	public function SetPassword($p) {
		$this->password = $p;
	}
	 
	public function GetEmail() {
		return $this->email;
	}
	
	public function GetPassword() {
		return $this->password;
	}
	
	public function LoggedIn($e, $p) {
		if($this->email === $e && $this->password === $p):
			echo "Logado com sucesso \n\n";
		else:
			echo "Dados inválidos \n\n";
		endif;
	}
}

$user = new Login();
$user->SetEmail("teste@email()\\\.com");
$user->SetPassword("12345");
echo $user->GetEmail(); 
echo $user->GetPassword();
$user->LoggedIn("teste@email.com", "12345");