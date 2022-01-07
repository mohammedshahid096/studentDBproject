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
                <a href="deleteeditfile.php"> <span class="navitems">DELETE</span></a>
            </nav>
        </header>
     
        <div id="updatepage">
            <span id="headingedit">Edit Record</span>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post" >
            <div id="idcontainer">
                <span id="idname">Id:</span> <input type="text" name="sid" id="idtextbox" placeholder="Enter the id name">
                <br>
                <input type="submit" name="show" id="updatebutton" value="Show">
            </div>
            </form>

            <div id="updateeditshow">
                <div id="updatename1">
                   Stud_Id:
                    Name:

                    Age/old:

                    City:

                    Phone:

                    Branch:


                </div>
                <form action="editsavedata.php" method="post">
                <div id="updateinput2">
                        <?php 
                    
                    if(isset($_POST["show"]))
                    {
                        include 'connectdb.php';//connection
                        $std_id= $_POST["sid"];

                        $sql= "select * 
                        from student1
                        where sid={$std_id}";
                        
                        $result = mysqli_query($conn,$sql);

                            
                            if(mysqli_num_rows($result)>0)
                            {

                            while($row= mysqli_fetch_assoc($result))
                            {
                    
                    ?>
                    <input type="hidden" class="textbox2" value="<?php echo $row["sid"]; ?>"   name="id"  >
                    <input type="text" class="textbox2" value="<?php echo $row["sid"]; ?>"  disabled >
                    <input type="text" class="textbox2" value="<?php echo $row["name"] ?>" name="sname">

                    <input type="text" class="textbox2" value="<?php echo $row["age"] ?>" name="sage">
                    <br>
                    <select name="scity" class="textbox2">
                        <?php 
                        $sql1= "select *
                        from citytable
                        ";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row1 = mysqli_fetch_assoc($result1)){
                            if($row["city"]==$row1["cid"])
                            {
                                $select = "selected";
                            }
                            else{
                                $select = "";
                            }

                           echo "<option value='{$row1['cid']}' $select> {$row1['cityname']} </option>" ;
                        }
                        ?>
                        </select>


                        <input type="text" class="textbox2" value="<?php echo $row["phone"] ?>" name="sphone">
                        <br>

                        <select name="sbranch" class="textbox2" >
                            <?php

                          $sql2= "select *
                        from branchtable
                        ";
                        $result2 = mysqli_query($conn, $sql2);
                        while($row2 = mysqli_fetch_assoc($result2)){
                            if($row["branch"]==$row2["bid"])
                            {
                                $select = "selected";
                            }
                            else{
                                $select = "";
                            }

                           echo "<option value='{$row2['bid']}' $select> {$row2['course']} </option>" ;
                        }
                        ?>
                        </select>
                        <br>
                        <input type="submit" id="submitbutton" value="submit">

                        <?php 
                            }
                        }
                    }
                    
                 
                        ?>
                </div>
                </form>

            </div>
        </div>

    </div>
    <script>
        // document.getElementById("updateeditshow").style.visibility= "hidden";
        document.getElementById("updatebutton").onclick = function () {
            document.getElementById("updateeditshow").style.visibility = "visible";
        }
    </script>
</body>

</html>