<?php
	class Employer extends ActiveRecord\Model{
		static $validates_presence_of = array(
			array('contact_person', "message" => "Field can not be blank!"),
			array('address', "message" => "Field can not be blank!"),
			array('industry_id', "message" => "Field can not be blank!")
		);

		static $belongs_to = array(
			array(
				"User"
			),
			array(
				"Industry"
			),
		);
	}
?>