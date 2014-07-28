<?php
	include_once "header.php";
	if(Auth::check()){
		$id = $_GET["id"]; 
		$job = Job::find($id);
		$job->delete();
		$url = BASE_PATH . "/viewJobs.php";
	}
	else{
		$url = BASE_PATH . "login.php";
	}
	exit(header("Location: $url"));
?>