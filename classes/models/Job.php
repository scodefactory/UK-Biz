<?php
	class Job extends ActiveRecord\Model{
		static $table_name = "listjobs";
		static $belongs_to = array(
			array(
				"Employer"
			),
			array(
				"Industry"
			),
		);

		static $validates_presence_of = array(
			array('title', "message" => "Field can not be blank!"),
			array('description', "message" => "Field can not be blank!"),
			array('location', "message" => "Field can not be blank!"),
			array('eligibility', "message" => "Field can not be blank!"),
			array('experience', "message" => "Field can not be blank!"),
			array('job_type', "message" => "Field can not be blank!"),
			array('industry_id', "message" => "Field can not be blank!"),
			array('employer_id', "message" => "Field can not be blank!"),
			array('publish_date', "message" => "Field can not be blank!"),
			array('expiry_date', "message" => "Field can not be blank!"),
		);	
	}
?>