<?php
require_once('BaseModel.php');

class Departments extends Connection
{
    function getData()
    {
        $sql = "SELECT *  FROM  departments";
        /** là cách lệnh trong myqsl */

        $result = mysqli_query($this->conn, $sql);  /*thực hiện câu lệnh hkhi kết nối DB*/
        mysqli_close($this->conn);
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getDepartById($id)
    {
        $sql = "SELECT * From `departments` WHERE id=$id ";

        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    public function editDepart($id, $name)
    {
        $sql = "UPDATE `departments` SET name='$name' WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        // $row = mysqli_($result);
        return $result;
    }

    public function deleteDepart($department_id)
    {
        $sql = "DELETE FROM departments WHERE id=$department_id";
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function addDepart($name)
    {
        $sql = "INSERT INTO `departments` ( `name`) VALUE('$name') ";

        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
