<?php
require_once('BaseModel.php');

class Roles extends Connection
{
    function getData()
    {
        $sql = "SELECT *  FROM  roles";
        /** là cách lệnh trong myqsl */

        $result = mysqli_query($this->conn, $sql);  /*thực hiện câu lệnh hkhi kết nối DB*/
        mysqli_close($this->conn);
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}