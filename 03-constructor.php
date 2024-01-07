<!-- We call the constructor when we instance a class, we can call with parameters -->

<?php

class Login{
	private $name;
	private $email;
	private $password;
	
	public function __construct($name, $email, $password){
		$this->name = $name;
		$this->SetEmail($email);
		$this->SetPassword($password);
	}
	
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

$user = new Login("Mirian Quispe","teste@email\\\\().com", "12345");
echo $user->GetEmail(); 
echo "\n\n";
echo $user->GetPassword();
echo "\n\n";
$user->LoggedIn("teste@email.com", "12345");

?>