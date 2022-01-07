<?php 
 $stud_id = $_GET["id"];
 include 'connectdb.php';

$sql= "delete
from student1
where sid='{$stud_id}'
";

$result = mysqli_query($conn,$sql);


header("location: http://localhost/php%20learn/projects/index.php");
mysqli_close($conn);


?>