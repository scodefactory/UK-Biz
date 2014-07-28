<?php
	class Auth{

		public static function setMessage($message){
			$_SESSION["__AUTH"]["message"] = $message;
		}

		public static function getMessage(){
			if(isset($_SESSION["__AUTH"]) && isset($_SESSION["__AUTH"]["message"])){
				$message = $_SESSION["__AUTH"]["message"];
				unset($_SESSION["__AUTH"]["message"]);
			}
			else{
				$message = false;
			}
			return $message;
		}
		public static function check(){
			return isset($_SESSION["__AUTH"]["user"]);
		}

		public static function setUser($user){
			$_SESSION["__AUTH"]["user"] = serialize($user);
		}

		public static function authenticate($user_name_OR_email, $password, $user_type){
			$isEmail = false;
			$user = null;
			if(strpos($user_name_OR_email, '@')){
				$isEmail = true;
			}
			if($isEmail){
				$user = User::find_by_email($user_name_OR_email);
			}
			else{
				$user = User::find_by_user_name($user_name_OR_email);
			}
			if($user){
				if($user->checkPassword($password)){
					if($user->type == $user_type){
						if($user->status == true){
							Auth::setUser($user);
							return true;
						}
						else{
							Auth::setMessage("Inactive Account, Please contact Administrator!");
							return false;
						}
					}
					else{
						Auth::setMessage("Please select correct user type");
						return false;
					}
				}
				else{
					Auth::setMessage("username/email or password does not match");
					return false;
				}
			}
			else{
				Auth::setMessage("username/email or password does not match");
				return false;
			}
		}

		public static function logout(){
			if(Auth::check()){
				unset($_SESSION["__AUTH"]);
			}
		}

		public static function user(){
			if(Auth::check()){
				return unserialize($_SESSION["__AUTH"]["user"]);
			}
			else{
				return false;
			}
		}

		


	}

?>