<?php


$x = $_REQUEST["x"];
$y = $_REQUEST["y"];
$z = $x + $y;
sleep(1); //user discomfort

$conn = mysqli_connect("localhost:3306","root","","cyb4");
$sql = "INSERT INTO Calcs(Num1,Num2,User) VALUES($x,$y,'Anonym')";

mysqli_query($conn, $sql);
mysqli_close($conn);

echo $z;
