
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
            <span id="headingedit">Delete Record</span>
            <form action="deletefile.php" method="get" >
            <div id="idcontainer">
                <span id="idname">Id:</span> <input type="text" name="id" id="idtextbox" placeholder="Enter the id name">
                <br>
                <input type="submit" name="show" id="updatebutton" value="Delete">
            </div>
            </form>