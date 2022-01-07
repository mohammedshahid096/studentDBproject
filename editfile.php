<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="student.css" type="text/css">
</head>

<body>
    <div id="container">
             <div id="heading">Student Details</div>
        
            <header id="navbar">
                <nav>
                    <a href="index.php"> <span class="navitems">HOME</span> </a>
                    <a href="addfile.php"> <span class="navitems">ADD</span></a>
                    <a href="updatepage.php"> <span class="navitems">UPDATE</span></a>
                    <a href="deleteeditfile.php">  <span class="navitems">DELETE</span></a>
                </nav>
            </header>
       
            <div id="addmain">
     
                <span id="headingupdate">Update Record:</span>
                <div id="updateblock">
                    <form action="editsavedata.php" method="post">
                            <?php 
                             include 'connectdb.php';//connection
                        
                            $stud_id = $_GET["id"];

                            $sql= "select * 
                            from student1
                            where sid={$stud_id}";
                            
                            $result = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($result)>0)
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {

                

                            ?>
                            <input type="hidden" name="id" value="<?php echo $row['sid']; ?> ">
                            Name: <input type="text" name="sname" class="textbox3" value="<?php echo $row['name']; ?>" >
                            <br><br>

                            Age:&nbsp; &nbsp; <input type="text" name="sage" class="textbox3" value= "<?php echo $row['age']; ?>">
                            <br><br>

                            city: &nbsp;&nbsp;&nbsp;&nbsp;
                            <select name="scity" class="textbox3">
                            <?php 
                            $sql2= "select *
                            from citytable
                            ";
                            $result2=  mysqli_query($conn,$sql2);
                            while($row2= mysqli_fetch_assoc($result2))
                            {
                                if($row["city"]==$row2["cid"])
                                {
                                    $selct = "selected";
                                }
                                else
                                {
                                    $selct= "";
                                }

                                echo "<option value= '{$row2['cid']}' $selct>  {$row2['cityname']}  </option>";
                            }
                            ?>
                            </select>
                            <br><br>


                            Phone: <input type="text" name="sphone" class="textbox3" value="<?php echo $row['phone']; ?>">
                            <br><br>

                            Branch: 
                            <select name="sbranch" class="textbox3">
                            <?php 
                            $sql3= "select *
                            from branchtable
                            ";
                            $result3=  mysqli_query($conn,$sql3);
                            while($row3= mysqli_fetch_assoc($result3))
                            {
                                echo $row3["bid"];
                                if($row["branch"]==$row3["bid"])
                                {
                                    $selct2 = "selected";
                                }
                                else
                                {
                                    $selct2= "";
                                }

                                echo "<option value= '{$row3['bid']}' $selct2>  {$row3['course']}  </option>";
                            }
                            ?>
                        </select>
                            <br><br>
                            <input type="submit" value="Update" id="updatebutton" >
                            <br>
                            &nbsp;

                            <?php
                                    }
                                    }
                                    ?>
                     </form>
               </div>
         </div>
        

    </div>
</body>

</html>