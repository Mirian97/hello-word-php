<?php
// when the methods and attributes are statics, we don't need to create a class instance,
// instead of this, we access them, like this: ClassName::FunctionName() or ClassName::$attrName = "Mirian"
// $this doesn't work with static methods, we use self::$attrName to access them

class Login {
	static public $name;
	
	static public function VerifyLogin() {
		echo "O usuário ".self::$name." está logado!";
	}
	
	public function Logout() {
		echo "O usuário ".self::$name." está deslogado!";
	}
}

Login::$name = "Mirian"; 
echo Login::$name."\n";
Login::VerifyLogin();
echo "\n";

// create a class instance to access not static methods
$login = new Login();
$login->Logout();