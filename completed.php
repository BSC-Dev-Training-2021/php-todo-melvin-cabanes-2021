<?php
require_once '../php-todo-melvin-cabanes-2021/BackEND/php/init.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>To Do List - Completed</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">To Do</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="completed.php">Completed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <header class="mt-5 ml-3">
                    <h2>
                        Completed Tasks
                        <span class="badge badge-pill badge-info">25</span>
                    </h2>
                </header>
                <div class="col-lg-12 mt-5">
                <?php viewCompletedTable();?>
                    <!-- Tasks section-->
                    <!-- <section>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Buy groceries</li>
                            <li class="list-group-item">Pay bills</li>
                            <li class="list-group-item">Take dog for a walk</li>
                            <li class="list-group-item">Fix broken chair</li>
                            <li class="list-group-item">Do laundry</li>
                            <li class="list-group-item">Buy groceries</li>
                            <li class="list-group-item">Pay bills</li>
                            <li class="list-group-item">Take dog for a walk</li>
                            <li class="list-group-item">Fix broken chair</li>
                            <li class="list-group-item">Do laundry</li>
                        </ul>
                    </section> -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>