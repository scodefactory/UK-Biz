<?php
	class Helper{
		public static function getErrorMessages($errors){
			if(is_array($errors)){
				return $errors[0];
				// return implode("; &nbsp;", $errors);
			}
			else{
				return $errors;
			}
		}
	}

?>