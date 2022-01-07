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
        <!-- <div w3-include-html="content.html"></div> -->
        <div id="addmain">
            <span id="headingadd">Add Record:</span>

            <div id="addmain2">
                <div id="addtextdiv">
                    Name:

                    Age/old:

                    City:

                    Phone:

                    Branch:


                </div>
                <?php 
                #here we will connect the DB
                include 'connectdb.php';
                // $conn = mysqli_connect("localhost","root","","student");

                $sql1 = "SELECT *  # sql query1 
                FROM citytable
                 ";

                $sql2 = "SELECT *  # sql query2
                FROM branchtable
                 ";



                $result1 = mysqli_query($conn,$sql1); #it will run the query
                $result2 = mysqli_query($conn,$sql2);

                ?>
                <div id="addinputdiv">
                    <form action="addsavedata.php" method="post">

                    
                    <input type="text" class="textbox" name="sname">

                    <input type="text" class="textbox" name="sage">


                    <select name="scity" class="textbox">
                        <option value="" selected disabled>select city</option>
                        <?php
                         while($row1=mysqli_fetch_assoc($result1))
                            { 
                         ?>
                         <option value="<?php echo $row1['cid']; ?>"><?php echo $row1["cityname"]; ?></option>
                           <?php 
                            }
                           ?>

                        <input type="text" class="textbox" name="sphone">

                        <select name="sbranch" class="textbox">
                            <option value="" selected disabled>select city</option>
                            <?php
                         while($row2=mysqli_fetch_assoc($result2))
                            { 
                         ?>
                            <option value="<?php echo $row2['bid']; ?>"><?php echo $row2["course"]; ?></option>
                            <?php 
                            }
                             ?>
                        </select>
                        <br>
                        <input type="submit" id="submitbutton" value="submit">

                        </form>
                </div>


            </div>
        </div>

    </div>
</body>

</html>