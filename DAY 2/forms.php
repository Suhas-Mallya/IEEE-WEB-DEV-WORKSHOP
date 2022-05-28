<?php
    /* 
    CRUD - CREATE, READ, UPDATE, DELETE
    PHP MYSQL OPERATIONAL STEPS
    1. MAKE CONNECTION TO DATABASE IN SEPERATE FILE
    2. WHEREVER REQUIRED INCLUDE THAT FILE
    3. DO THE OPERATION (CRUD)
    4. CLOSE
    */
    include("connection.php");
    if(isset($_POST['submit'])){
        $name = $_REQUEST['stu_name'];
        $usn = $_REQUEST['stu_usn'];
        $branch = $_REQUEST['stu_branch'];
        $sem = $_REQUEST['stu_sem'];
        $pwd = $_REQUEST['pwd'];

        $sql = "insert into student values('$name','$usn','$branch',$sem,'$pwd');";
        $result = mysqli_query($conn,$sql);
        if($result) {
            echo "insertion succesful";
        }else {
            echo "error in inserting values";
        }

        /* conditional execution of the query
            if(strlen($usn) > 0)
                $sql = "insert into student values('$name','$usn','$branch',$sem,'$pwd');";
            else 
                $sql = "insert into student values('$name','','$branch',$sem,'$pwd');";
            $result = mysqli_query($conn,$sql);
            if($result) {
                echo "insertion succesful";
            }else {
                echo "error in inserting values";
            }
        */
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forms.php" method="POST">
        name : <input type="text" name="stu_name" required> <br>
        usn : <input type="text" name="stu_usn"> <br>
        branch : <input type="text" name="stu_branch" required> <br>
        sem : <input type="number" min="1" max="8" name=" stu_sem" required> <br>
        password : <input type="password" name="pwd" required> <br>
        <input type="submit" name="submit">
    </form>

    <?php
            $sql = "select * from student;";
            $result = mysqli_query($conn,$sql);
            echo "<table>";
            echo "<tr>";
            echo "<th>name</th>";
            echo "<th>usn</th>";
            echo "<th>branch</th>";
            echo "<th>sem</th>";
            echo "<th>password</th>";
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['usn']."</td>";
                echo "<td>".$row['branch']."</td>";
                echo "<td>".$row['sem']."</td>";
                echo "<td>".$row['pwd']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
</body>
</html>

