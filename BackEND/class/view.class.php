<?php

class view extends config {

    public function viewData(){

        $con = $this->con();
        
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING' LIMIT 5";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        echo "<table class = 'table table-light table-striped table-sm'>";

        echo "<thead>
                <tr>
                    <th>Pending Tasks</th>
                    <th>Action</th>
                </tr>
        
              </thead>
              <tbody>";
                foreach($result as $data) {
                    echo "<tr>";
                    echo "<td>$data[task]</td>";
                    echo "<td><a href ='index.php?edit=$data[id]' class = 'btn btn-primary'><i class = 'fa fa-check'></i></a>
                              <a href ='index.php?delete=$data[id]' class = 'btn btn-danger'><i class = 'fa fa-trash'></i></a>
                          </td>";
                    echo "</tr>";
                    
                }
        echo "</tbody>
              </table>";
        
    }
    public function viewCompletedData(){

        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        echo "<table class = 'table table-light table-striped table-sm'>";

        echo "<thead>
                <tr>
                    <th>Completed Tasks</th>
                    <th>Date Completed</th>
                </tr>
        
              </thead>
              <tbody>";
                foreach($result as $data) {
                    echo "<tr>";
                    echo "<td>$data[task]</td>";
                    echo "<td>$data[date_completed]</td>";
                    echo "</tr>";
                }
        echo "</tbody>
              </table>";
        
    }
}