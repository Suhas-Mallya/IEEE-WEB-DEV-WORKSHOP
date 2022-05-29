<?php
    include("connection.php");
    session_start();
    $usn = $_SESSION['usn'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="profile-img">
                <img src="mypic.jpg" alt="profile picture" width="200">
            </div>
            <div class="box1">
                <?php
                    $sql = "select * from student where usn='$usn';";
                    $res = mysqli_query($conn,$sql);
                    $r1 = mysqli_fetch_assoc($res);
                ?>
                <div class="heading">
                    CONTACT
                </div>
                <p class="p1">
                    <i class="fa-solid fa-envelope"></i> <?php echo $r1['email'];?>
                </p>
                <p class="p1">
                    <i class="fa-solid fa-phone"></i> <?php echo $r1['phno'];?>
                </p>
                <p class="p1">
                    <i class="fa-solid fa-location-dot"></i> <?php echo $r1['place'];?>
                </p>
            </div>
            <div class="box1">
                <div class="heading">
                    SKILLS
                </div>
                <?php 
                    $sql = "select * from skills where usn='$usn';";
                    $r2 = mysqli_query($conn,$sql);
                ?>
                <?php
                    while($row = mysqli_fetch_assoc($r2)) {
                ?>
                    <div class="p1"> <?php echo $row['skname'];?>
                        <div class="skill-container">
                            <div class="skill" style="width: <?php echo $row['percent'];?>%;"></div>
                        </div>
                    </div>
                <?php } ?>
                    
            </div>
        </div>
        <div class="right">
            <div class="name-div">
                <h1><?php echo $r1['name'];?></h1>
                <P>FULL STACK WEB DEVELOPER</P>
            </div>

            <div class="box-2">
                <h2>ABOUT ME</h2>
                <p class="content">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus mollitia voluptates quos a iure sit adipisci similique, soluta unde vel.
                </p>
            </div>
            <div class="box-2">
                <h2>EDUCATION</h2>
                <div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p>
                <div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p>
                <div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p>
            </div>
            <div class="box-2">
                <h2>WORK EXPERIENCE</h2>
                <div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p><div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p><div class="year"> 2017 - 2019
                    <span>Sri Vyshanvi Chetana PU College</span>
                </div>
                <p class="content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, consequatur!
                </p>
            </div>
            <div class="box-2">
                <h2>PROJECTS</h2>
                <p class="project-title"> WHITE BOARD</p>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, nihil.
                </p>
                <p class="project-title"> WHITE BOARD</p>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, nihil.
                </p>
                <p class="project-title"> WHITE BOARD</p>
                <p class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, nihil.
                </p>
            </div>
        </div>
    </div>
</body>
</html>