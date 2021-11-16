<?php

//inheritance

class delete extends config{
    public $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function deleteTask(){
        $con = $this->con();    //declare connection
        $sql = "DELETE FROM `tbl_todolist` WHERE `id` = $this->id";//DELETE QUERY
        $data = $con->prepare($sql);   

        
        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }
}