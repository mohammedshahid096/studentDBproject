<?php 
 $stud_id=$_POST["id"];
 $stud_name= $_POST["sname"];
 $stud_age= $_POST["sage"];
 $stud_city= $_POST["scity"];
 $stud_phone= $_POST["sphone"];
 $stud_branch= $_POST["sbranch"];

 include 'connectdb.php';//connection
$sql=" update student1
set 
name= '{$stud_name}', age='{$stud_age}', city='{$stud_city}', phone='{$stud_phone}', branch='{$stud_branch}'
where sid='{$stud_id}'
";
$result = mysqli_query($conn,$sql);

header("location: http://localhost/php%20learn/projects/index.php");
mysqli_close($conn);
?>