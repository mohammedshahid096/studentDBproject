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
        
        <div id="main">
            <span id="headingrecord">All Records  </span> 

            <div id="showingtable">
                <table border="2">
                <tr>
                    <th>sno</th>
                    <th>Sid</th>
                    <th>S.Name</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Branch</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <!-- connecting the servr here s -->
                <?php 
                include 'connectdb.php';
                // $conn = mysqli_connect("localhost","root","","student");
                // if($conn){ #this only for checking purpose
                //     echo "DB is connected";
                // }

                $sql = "SELECT *  # sql query 
                FROM student1 
                INNER JOIN citytable 
                ON student1.city = citytable.cid 
                INNER JOIN branchtable 
                ON student1.branch = branchtable.bid
                ORDER BY sid asc
                "
                ;

                $result = mysqli_query($conn,$sql); #it will run the query            
                $i=0;
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $i++;
                    

                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["sid"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["cityname"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["course"]; ?></td>
                    <td><a href="editfile.php?id=<?php echo $row['sid']; ?>"><button class="button">Edit</button></a></td>
                    <td><a href="deletefile.php?id=<?php echo $row['sid']; ?>"><button class="button">Delete</button></td></a>
                </tr>

        <?php 
                    }
                
                mysqli_close($conn);
        ?>
                </table>
            </div>
        
        </div>

    </div>
</body>

</html>