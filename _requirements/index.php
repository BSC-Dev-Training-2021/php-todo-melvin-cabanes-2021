<?php
require_once '../BackEND/php/init.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>To Do List</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="completed.php">Completed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="settings.php">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container py-5">
          
            <?php crud();?>

            <div class="row">
                <div class="col-lg-12">
                    
                    <form action="" method = "GET">
                        <div class="input-group input-group-lg mt-5">
                            <input type="text" name = "taskinput" class="form-control" aria-label="Text input with segmented dropdown button">
                            <div class="input-group-append" required>
                                <button type="submit" class="btn btn-primary">Create Todo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">

                    <?php viewTable();?>
                        
                    <!-- Tasks section-->
                    <!-- <section>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Buy groceries
                                <button type="button" class="btn btn-light fa fa-trash-o float-right ml-1" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            <li class="list-group-item">
                                Pay bills
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Take dog for a walk
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Fix broken chair
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Do laundry
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Wash the dishes
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Feed the rabbits
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Checkout items in Shopee
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Cook dinner
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
                            <li class="list-group-item">
                                Create Tiktok video
                                <button type="button" class="btn btn-light fa fa-trash-o float-right" data-toggle="modal" data-target="#deleteConfirmModal"></button>
                                <button type="button" class="btn btn-light fa fa-check float-right"></button>
                            </li>
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
            <section>
                <div class="modal" id="deleteConfirmModal" tabindex="-1" data-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete Task?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this task?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>