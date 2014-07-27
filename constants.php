<?php
//define('BASE_PATH',"http://localhost.intranet.com/uttrakhandBizz");

// define('BASE_PATH',"http://uttarakhandbizz.com");
//define('BASE_PATH',"http://dev.employers.com");
if(($_SERVER["HTTP_HOST"] == "dev.employers.com") || ($_SERVER["HTTP_HOST"] == "http://localhost.intranet.com/uttrakhandBizz")){
	define('BASE_PATH',"http://" . $_SERVER["HTTP_HOST"]);	
}
else{
	define('BASE_PATH',"http://" . $_SERVER["HTTP_HOST"] . "/employers");		
}
define('BASE_DIR', __DIR__);
?>