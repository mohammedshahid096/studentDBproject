<?php 
$stud_name = $_POST["sname"];
$stud_age = $_POST["sage"];
$stud_city = $_POST["scity"];
$stud_phone = $_POST["sphone"];
$stud_branch = $_POST["sbranch"];

include 'connectdb.php';
$sql= "insert into student1(name,age,city,phone,branch)
values
('{$stud_name}','{$stud_age}','{$stud_city}','{$stud_phone}','{$stud_branch}')
";
$result =mysqli_query($conn,$sql);

header("location: http://localhost/php%20learn/projects/index.php");
mysqli_close($conn);


?>