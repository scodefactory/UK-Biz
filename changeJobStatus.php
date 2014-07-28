<?php
	include_once "header.php";
	if(Auth::check()){
		$id = $_GET["id"];
		$job = Job::find($id);
		$status = ($job->status == true) ? false : true;
		$job->status = $status;
		$job->save();
		$url = $_SERVER["HTTP_REFERER"];
	}
	else{
		$url = BASE_PATH . "/login.php";
	}
	exit(header("Location: $url"));
?>