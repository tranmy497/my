
  
<?php 
	
	class User
	{
		public $name, $email, $phone, $address, $password;

		private function Add(){
			return 'add';
		}
		public function Edit(){
			return 'Edit';
		}
		public function Register(){
			return 'Register';
		}
		public function Login(){
			return 'Login';
		}
		public function View(){
			return 'View';
		}
		private function List(){
			return 'List';
		}
	}
	
	class Customer extends User
	{
		public $address, $no;
		public function Checkout(){
			return 'Checkout';
		}
		public function History(){
			return 'History';
		}
		
	}
	$cus = new Customer();
	echo $cus->Checkout();
	echo '<br>';
	echo $cus->Register();
 ?>
