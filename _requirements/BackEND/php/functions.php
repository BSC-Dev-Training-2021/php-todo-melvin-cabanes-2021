<?php
function insertTask(){
    
    if(!empty($_GET['taskinput'])){
        $insert = new insert($_GET['taskinput']);
        if($insert->insertTask()){
            echo "<script type='text/javascript'>alert('Task Inserted Successfully');
            window.location='index.php';
            </script>";
        
        }
}
}

function deleteTask(){
    
    if(!empty($_GET['delete'])){
        $delete = new delete($_GET['delete']);
        if($delete->deleteTask()){
            echo "<script type='text/javascript'>alert('Task Deleted Successfully');
            window.location='index.php';
            </script>";
        
        }
}
}
function editTask(){
    
    if(!empty($_GET['edit'])){
        $edit = new edit($_GET['edit']);
        if($edit->editTask()){
            echo "<script type='text/javascript'>alert('Task Completed Successfully');
            window.location='index.php';
            </script>";
        
        }
}
}
function viewTable(){
    $view = new view();
    $view->viewData();
    
}
function viewCompletedTable(){
    $view = new view();
    $view->viewCompletedData();
}
function crud(){ //function within a function
    insertTask();
    deleteTask();
    editTask();
}
