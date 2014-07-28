<?php
	include_once "header.php";
	if(Auth::check() && Auth::user()->type == "ADMIN"){
		$id = $_GET["id"];
		$employer = Employer::find($id);
		$user = $employer->user;
		$status = ($user->status == true) ? false : true;
		$user->status = $status;
		$user->save();
		$url = BASE_PATH . "/viewEmployers.php";
	}
	else{
		$url = BASE_PATH . "/login.php";
	}
	exit(header("Location: $url"));
?>