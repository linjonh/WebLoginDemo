<?php
class Mydatabase{
	private static $_instance=null;
	private $_db =null;

	private function __construct(){
		$this->$_db=new mysqli('localhost', 'root', 'linjonh', 'app');
		var_dump($thi->$_db);
		// try{
		// 	global $_db;
		// 	$_db = new mysqli('localhost', 'root', 'linjonh', 'app');
		// } catch(PDOException $e){
		// 	die($e->getMessage());
		// }
	}
	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new Mydatabase();
		}		
		return self::$_instance;
	}
	public function update(){

	}

	public function insert($name,$pwd,$email){
		$name = trim($name);
		$pwd = trim($pwd);
		$email = trim($email);

		$sql="insert into user(name,pwd,email,createtime) values(".$name.",".$pwd.",".$email.")";
		
		return $this->$_db->query($sql);
	}

	public function login($name,$pwd){
		$name = trim($_REQUEST['name']);
		$pwd = trim($_REQUEST['pwd']);
		$sql = "select * from user where username='" . $name . "' and pwd ='" . $pwd . "'";
		$res = $_db->query($sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	public function query($name){
		$result=$_db->query("select name from user where name=".$name);
		if($result){
			$result->close();
			return true;
		}else{
			return false;
		}
	}
}