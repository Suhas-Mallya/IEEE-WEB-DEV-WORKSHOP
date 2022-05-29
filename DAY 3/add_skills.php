<?php
    session_start();
    require("connection.php");
    if(isset($_POST['submit'])) {
        $usn = $_SESSION['usn'];
        $skill = $_POST['skill'];
        $percent = $_POST['percent'];

        $sql = "insert into skills values('$usn','$skill',$percent)";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header("location:add_skills.php");
        }else {
            echo "error in adding the skills";
        }
    }

?>

<?php include("header.php"); ?>
<div class="w-100 mt-2 d-flex justify-content-center align-items-center">
    <form action="add_skills.php" method="post"
        class="w-75 ps-5 pe-5 pt-4 pb-3 border border-success border-2 rounded bg-light">
        <div class="mb-5 text-center">
            <h2>ADD SKILLS</h2>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="comp_name" class="form-label">SKILL</label>
            <input type="text" style="width:400px;"  name="skill" required>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="email" class="form-label">PERCENTAGE</label>
            <input type="number" style="width:400px;"  name="percent" required>
        </div>
        <div class="pt-2 row justify-content-center">
            <button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
        </div>
    </form>
</div>
    <?php include("footer.php"); ?>
