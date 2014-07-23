<?php
	require_once BASE_DIR . '/classes/php-activerecord/ActiveRecord.php';

	ActiveRecord\Config::initialize(function($cfg)
 	{
	     $cfg->set_model_directory(BASE_DIR . '/classes/models');
	     $cfg->set_connections(array(
	        	'development' => 'mysql://root:root@localhost/employers-db'
        	));
 	});
?>