<?php
ob_start();
require "Models/User.php";

class UserController
{
    function getAll()
    {
        $user = new User();
        $dataUser = $user->getAll();
        require "Views/User/viewUser.php";
    }
    function editUser()
    {
        if ($_SESSION['role'] == 'Admin') {
            $id = $_GET['id'];
            $editUser = new User();
            $dataUser = $editUser->getUserById($id);

            require "Views/User/editUser.php";
        } else {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=user');
            } else {
                header('location:/');
            }
        }
    }
    function updateUser()
    {
        $id = $_POST['id'];
        if (isset($_POST['update_user'])) {
            $file = $_FILES['avatar'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'], "./Library/Uploads/." , $file_name);
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $updateUser = new User();
            $result = $updateUser->editUser($id, $file_name, $fullname, $username, $password);

            if ($result === true) {
                $_SESSION['message'] = " Update thành công!";
            } else {
                $_SESSION['message'] = "Update thất bại";
            }

            header('location:/?url=user');
        }
    }
    function deleteUser($user_id)
    {
        if( $_SESSION['id'] == $user_id)
        {
        if ($_SESSION['role'] == 'Admin') {
            $id = $_GET['id'];
            $deleteUser = new User();
            $result = $deleteUser->deleteUser($id);


            if ($result === true) {
                $_SESSION['message'] = " Xoá thành công!";
            } else {
                echo "Xoá thất bại ";
            }
            header('location:/?url=user');
        } else {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=user');
            } else {
                header('location:/');
            }
        }
    }
    }
    function addUser()
    {
        if ($_SESSION['role'] == 'Admin') 
        {
            require_once 'Models/Department.php';
            
            $depart = new Departments();
            $listDepart = $depart->getData();

            require_once 'Models/Role.php';
            $role = new Roles();
            $listRole = $role->getData();

            require('Views/User/addUser.php');
            $id = $_POST['id'];
            if (isset($_POST['add_user'])) 
            {
                $file = $_FILES['avatar'];
                $file_name = $file['name'];
                move_uploaded_file($file['tmp_name'], "./Library/Uploads/" . $file_name);
                $username = $_POST['username'];
                $fullname = $_POST['fullname'];
                $password = $_POST['password'];
                $department_id = $_POST['department'];
                $role_id = $_POST['role'];
                $addUser = new User();

                $result = $addUser->addUser($username, $fullname, $password, $file_name, $department_id, $role_id);

                $conn = new mysqli("mysql", "root", "root", "rikkeisoft");
                // Check connection
                if ($result === true) {
            
                    $_SESSION['message'] = " Thêm thành công!";
                    
                } else {
                    $_SESSION['message'] = "Thêm thất bại";
                }
                header('location:/?url=user');
            }
        }
         else 
         {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=user');
            } else {
                header('location:/');
            }
        }
    }
}
