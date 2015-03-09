<?php
// phpinfo();
// error_reporting(0);
// echo "hello world";
if (isset($_REQUEST['name']) && isset($_REQUEST['pwd'])) {
	$db = new mysqli('localhost', 'root', 'linjonh', 'app');
	if ($db) {
		// echo "connect_error:",$db->connect_error;
		if ($db->connect_errno == 2002) {
			die($db->connect_error);
		}
	}
	$name = trim($_REQUEST['name']);
	$pwd = trim($_REQUEST['pwd']);
	$sql = "select * from user where username='" . $name . "' and pwd ='" . $pwd . "'";
// echo $sql;
	$res = $db->query($sql);
// var_dump($res);
	// print_r($res);
	/*$res=$db->prepare("select username,pwd from user where username=? and pwd =?");
	$res->bind_param('ss',$name,$pwd);
	$res->execute();
	// print_r($res);
	$res->bind_result($n,$p);*/

	// $result = $res->fetch_all(MYSQLI_ASSOC);
	// echo '<pre>', print_r($result), '</pre>';
	$rows = array();
	$i = 0;
	while ($row = $res->fetch_assoc()) {
		$rows[$i] = $row;
		$i++;
		// $array=new array();
		// var_dump($row);
		// $json_data = json_encode($row);
		// exit($json_data);
		// print_r($row);
		# code...
		// echo "name: ",$n ," pwd: ",$p;
	}
	$json_data = json_encode($rows);
	exit($json_data);
/*while ($row=$res->fetch_object()) {
exit('name '.$row->name." pwd".$row->pwd);
}*/

}
// print_r($res);

// 获取表所有行数据
/*
$result= $res->fetch_all();
$result= $res->fetch_all(MYSQLI_ASSOC);
$result= $res->fetch_all(MYSQLI_NUM);
 */
// 获取数据库表单行数组数据
/*
$result= $res->fetch_array(MYSQLI_BOTH);
$result= $res->fetch_assoc();
 */
// 方式一 逐个获取
/*
while ($result= $res->fetch_array()) {
echo '<pre>',print_r($result),'</pre>';
}
 */
// 方式二 逐个获取
/*
while ($result= $res->fetch_assoc()) {
echo '<pre>',print_r($result),'</pre>';
}
 */
// 方式三 逐个获取
/*
while ($result= $res->fetch_object()) {
// echo '<pre>',print_r($result),'</pre>';
echo 'id: ',$result->id,'<br>';
echo 'name: ',$result->username,'<br>';
echo 'passwod: ',$result->pwd,'<br>';
echo 'birth day: ',$result->birth,'<br>';
echo 'create time: ',$result->createtime,'<br>';
echo '<br>';
}
 */
?>



<!-- sample -->
<!--<?php
// // phpinfo();
// // error_reporting(0);
// // echo "hello world";
// if(@$_REQUEST['name'] && @$_REQUEST['pwd']){
// $db = new mysqli('localhost','root','linjonh','app');
// if($db){
// 	// echo "connect_error:",$db->connect_error;
// 	if($db->connect_errno==2002){
// 		die($db->connect_error);
// 	}
// }

// $res=$db->query("select * from user");
// }
// // print_r($res);

// // 获取表所有行数据
// /*
// $result= $res->fetch_all();
// $result= $res->fetch_all(MYSQLI_ASSOC);
// $result= $res->fetch_all(MYSQLI_NUM);
// */
// // 获取数据库表单行数组数据

// $result= $res->fetch_array(MYSQLI_BOTH);
// $result= $res->fetch_assoc();

// // 方式一 逐个获取
// /*
// while ($result= $res->fetch_array()) {
// 	echo '<pre>',print_r($result),'</pre>';
// }
// */
// // 方式二 逐个获取
// /*
// while ($result= $res->fetch_assoc()) {
// 	echo '<pre>',print_r($result),'</pre>';
// }
// */
// // 方式三 逐个获取
// /*
// while ($result= $res->fetch_object()) {
// 	// echo '<pre>',print_r($result),'</pre>';
// 	echo 'id: ',$result->id,'<br>';
// 	echo 'name: ',$result->username,'<br>';
// 	echo 'passwod: ',$result->pwd,'<br>';
// 	echo 'birth day: ',$result->birth,'<br>';
// 	echo 'create time: ',$result->createtime,'<br>';
// 	echo '<br>';
// }
// */
// ?>