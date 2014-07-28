<?php
	include_once "header.php";
	if(Auth::check() && Auth::user()->type == "ADMIN"){
		$id = $_GET["id"];
		$employer = Employer::find($id);
		$user = $employer->user;
		$employer->delete();
		$user->delete();
		$url = BASE_PATH . "/viewEmployers.php";
	}
	else{
		$url = BASE_PATH . "/login.php";
	}
	exit(header("Location: $url"));
?>