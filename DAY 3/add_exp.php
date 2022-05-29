<?php
    session_start();
    require("connection.php");
    if(isset($_POST['submit'])) {
        $usn = $_SESSION['usn'];
        $syear = $_POST['syear'];
        $eyear = $_POST['eyear'];
        $comp_name = $_POST['comp_name'];
        $info = $_POST['info'];

        $sql = "insert into exp values('$usn',$syear,$eyear,'$comp_name','$info')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header("location:add_exp.php");
        }else {
            echo "error in adding the experience";
        }
    }

?>

<?php include("header.php"); ?>
<div class="w-100 mt-2 d-flex justify-content-center align-items-center">
    <form action="add_exp.php" method="post"
        class="w-75 ps-5 pe-5 pt-4 pb-3 border border-success border-2 rounded bg-light">
        <div class="mb-5 text-center">
            <h2>ADD EXPERIENCE</h2>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="comp_name" class="form-label">start year</label>
            <input type="number" style="width:400px;"  name="syear" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="comp_name" class="form-label">end year</label>
            <input type="number" style="width:400px;"  name="eyear" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="comp_name" class="form-label">Comapny Name</label>
            <input type="text" style="width:400px;"  name="comp_name" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="email" class="form-label">description</label>
            <input type="text" style="width:400px;"  name="info" required>
        </div>
        <div class="pt-2 row justify-content-center">
            <button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
        </div>
    </form>
</div>
    <?php include("footer.php"); ?>
