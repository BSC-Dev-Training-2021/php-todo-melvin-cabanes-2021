<?php

//inheritance

class insert extends config{
    public $task;

    public function __construct($task){
        $this->task = $task;
    }

    public function insertTask(){
        $con = $this->con();     //declare connection
        $sql = "INSERT INTO `tbl_todolist`(`task`) VALUES ('$this->task')";//INSERT QUERY
        $data = $con->prepare($sql);   

        
        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }

    
}