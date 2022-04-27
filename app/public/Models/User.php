<?php
require('BaseModel.php');

class User extends Connection
{
    public function getAll()
    {
        $sql = "SELECT users.*, d.name as department_name, roles.name as role_name FROM users 
        join departments as d on d.id = users.department_id 
        join roles on roles.id = users.role_id 
        ORDER BY users.id asc";
    
        $result = mysqli_query($this->conn, $sql);
        // $result->fetch_all(MYSQLI_ASSOC);
        mysqli_close($this->conn);
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getUserById($id)
    {
        $sql = "SELECT * From `users` WHERE id=$id ";

        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function editUser($id, $file_name, $fullname, $username, $password)
    {
        $sql = "UPDATE `users` SET username='$username', fullname='$fullname', password='$password', avatar='$file_name' WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        // $row = mysqli_($result);
        return $result;
    }

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM users WHERE id=$user_id";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function addUser($username, $fullname, $password, $file_name, $department_id, $role_id)
    {
        $sql = "INSERT INTO `users` ( `username`, `fullname`, `password`, `avatar`,`department_id`, `role_id`) 
        VALUE('$username', '$fullname', '$password', '$file_name', $department_id, $role_id ) ";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function checkLogin($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);

        return $row;
    }
}
