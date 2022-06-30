<?php

session_start();

$user = $_REQUEST["txtUser"];
$pwd = $_REQUEST["txtPwd"];
$hash = hash("sha256", $pwd);


// if ($pwd == "332e97ea8384d7625256a2a0cfb0d5af982b4d508f9083154d616cccac394f6f"){

// 	echo "<h1>Hi , $user</h1>";
// }
// else{
// 	echo "<h2>Incorrect password !!</h2>";
// }




//$conn = mysqli_connect("localhost:3306","root","","cyb4");
// $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
// //echo $sql;
// $query = mysqli_query($conn, $sql);
// $result = mysqli_fetch_all($query);
// //echo $result;
// //var_dump($result);
// $numRows = count($result);
// //echo $numRows;

//Проблема слабого пароля и превышенного логина делегируется администратору сервера
//Устраняем проблему секрета в коде
$server = getenv("cyb4_db_server");
$login = getenv("cyb4_db_user");
$pwd = trim(getenv("cyb4_db_pwd"));
$conn = mysqli_connect($server,$login,$pwd,"cyb4");

//Устраняем Sql injection
$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows = mysqli_num_rows($result);



if($numRows == 0) {
		echo"<h2>Incorrect login or password !!</h2>";

}
else {

		echo "<h1>Hi , $user</h1>";
		$_SESSION["user"] = $user;
}

mysqli_close($conn);

