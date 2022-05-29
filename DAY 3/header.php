<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
        <link rel="stylesheet" href="dashboard.css" />

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
        </style>
        <title>placement cell</title>
    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-3 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                        class="fas fa-user-shield me-1"></i>HELLO</div>
                <div class="list-group list-group-flush my-3">
                    <a href="add_skills.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-chart-bar me-2"></i>ADD SKILLS</a>
                   
                    <a href="add_education.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-laptop-medical me-2"></i>ADD EDUCATION</a>
                    <a href="add_exp.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-laptop-medical me-2"></i>ADD EXPERIENCE</a>
                    <a href="index.php"
                        class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-laptop-medical me-2"></i>show resume</a>
                    <a href="logout.php"
                        class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>Logout</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid pt-4">