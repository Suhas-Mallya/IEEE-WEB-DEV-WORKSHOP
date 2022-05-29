<?php
    session_start();
    require("connection.php");
    if(isset($_POST['submit'])) {
        $usn = $_POST['usn'];
        $pwd = $_POST['pwd'];

        $sql = "select * from student where usn='$usn' and pwd='$pwd';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1) {
            $_SESSION['usn'] = $usn;
            header("location:home.php");
        }else {
            echo "invalid credentials";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <link rel="stylesheet" href="sign_page.css">
    <title>Document</title>
</head>

<body>
    <div class="page">
        <div class="container">
            <form action="signin.php" method="post">
                <div class="login-form">
                    <div class="title">SIGN IN</div>
                    <div class="input-boxes">

                        <div class="input-box">
                            <input type="text" placeholder="USN" name="usn" required>
                        </div>
                        <div class="input-box">
                            <input type="password" placeholder="PASSWORD" name="pwd" required>
                        </div>

                        <div class="input-box button">
                            <input type="submit" value="Submit" name="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</body>

</html>
