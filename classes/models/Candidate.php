<?php
	class Candidate extends ActiveRecord\Model{
		static $belongs_to = array(
			"Industry"
		);
	}