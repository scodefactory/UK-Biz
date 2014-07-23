<?php
	class Industry extends ActiveRecord\Model{
		static $has_many = array(
			array(
				"Employer"
			),
		);
	}
?>