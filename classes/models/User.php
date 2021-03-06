<?php
	class User extends ActiveRecord\Model{
		static $attr_accessible = array(
			"name",
			"user_name",
			"email",
			"password",
			"type"
		);
		static $has_one = array(
			array(
				"Employer"
			),
		);

		var $password_confirmation = false;

		static $validates_presence_of = array(
			array('name', "message" => "Field can not be blank!"),
			array('email', "message" => "Field can not be blank!"),
			array('user_name', "message" => "Field can not be blank!")
		);


		static $validates_format_of = array(
		     	array('email', 'with' =>
		       	'/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/',
		       	'message' => "Invalid email!"
	       	)
		);

		static $validates_uniqueness_of = array(
		     	array('user_name', "message" => 'Username already taken', "on" => "create"),
		     	array('email', "message" => 'Email already taken', "on" => "create")
		);

		

		public function validate() 
		{
			if(!isset($this->id)){
				if(trim($this->password) == ""){
					$this->errors->add('password', "Password Field cannot be blank");
				}
				else{
					if ($this->password != $this->password_confirmation)
		      		{
			      		$this->errors->add('password', "Password and Confirm Password fields does not match!");
				     	}
				}
			}
	  	}

	  	function before_save(){
	  		if($this->password && $this->password_confirmation){
	  			$this->password = $this->hashPassword($this->password);
	  		}
	  	}


		public static function hashPassword($raw_password){
			$hashed_password = crypt($raw_password);
			return $hashed_password;
		}


		public function checkPassword($raw_password){
			return (crypt($raw_password, $this->password) == $this->password);
		}


		
	}
?>