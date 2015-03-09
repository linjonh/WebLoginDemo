<?php 
require_once 'init/initial.php';
$name='';
$email='';
$pwd='';
$confirm_pwd='';
if(isset($_REQUEST["name"])){
	$name=htmlentities(trim($_REQUEST["name"]));
	var_dump($name);
}
if(isset($_REQUEST["email"])){
	$email=htmlentities(trim($_REQUEST["email"]));
	var_dump($name);
}
if(isset($_REQUEST["pwd"])){
	$pwd=htmlentities(trim($_REQUEST["pwd"]));
	var_dump($pwd);
}
if(isset($_REQUEST["confirm_pwd"])){
	$confirm_pwd=htmlentities(trim($_REQUEST["confirm_pwd"]));
	var_dump($confirm_pwd);
}

$Client=Mydatabase::getInstance();	
if($Client){
	if($pwd==$confirm_pwd){
			//login test it if exist one user;
		echo "<br>pwd:",$pwd,"|confirm_pwd:",$confirm_pwd;
		if($Client->query($name)){
			$tip=<<<E
			<h2> already exist user</h2>
E;
			echo $tip;
			die();
		}
		$result=$Client->insert($name,$pwd,$email);
		if($result){
			$tip=<<<success
		<h2> register success!</h2>

success;
		echo $tip;
		die();
		}else{
		$tip=<<<failed
			<h2> register failed!</h2>
failed;
		echo $tip;
		die();
		}
	}else{
		echo "<h2>password is not the same!</h2>";
	}	
}

 