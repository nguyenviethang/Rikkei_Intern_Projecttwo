<?php
ob_start();
require "Models/Department.php";
class DepartmentController
{
    function getAll()
    {
        /** thêm file Department trong Model/gọi Model */
        $depart = new Departments();
        /** khởi tạo class */
        $dataDepart = $depart->getData();
        /** gọi hàm getData */
        require "Views/Department/viewDepartment.php";
        /** trả về view */
    }
    function editDepart()
    {
        if ($_SESSION['role'] == 'Admin') {
            $id = $_GET['id'];
            $editDepart = new Departments();
            $dataDepart = $editDepart->getDepartById($id);
            require "Views/Department/editDepartment.php";
        } else {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=department');
            } else {
                header('location:/');
            }
        }
    }
    function updateDepart()
    {

        $id = $_POST['id'];
        if (isset($_POST['update_depart'])) {
            $name = $_POST['name'];
            $updateDepart = new Departments();
            $result = $updateDepart->editDepart($id, $name);

            if ($result === true) {
                $_SESSION['message'] = " Update thành công!";
            } else {
                $_SESSION['message'] = "Update thất bại";
            }

            header('location:/?url=department');
        }
    }
    function deleteDepart()
    {
        if ($_SESSION['role'] == 'Admin') {
            $id = $_GET['id'];
            $deleteDepart = new Departments();
            $result = $deleteDepart->deleteDepart($id);


            if ($result === true) {
                $_SESSION['message'] = " Xoá thành công!";
            } else {
                echo "Xoá thất bại ";
            }
            header('location:/?url=department');
        } else {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=department');
            } else {
                header('location:/');
            }
        }
    }
    function addDepart()
    {
        require_once('Views/Department/addDepartment.php');
        if ($_SESSION['role'] == 'Admin') {
            $id = $_POST['id'];
            if (isset($_POST['add_depart'])) {

                $name = $_POST['name'];
                $addDepart = new Departments();

                $result = $addDepart->addDepart($name);

                $conn = new mysqli("mysql", "root", "root", "rikkeisoft");
                // Check connection
                if ($result === true) {
                    $_SESSION['message'] = " Thêm thành công!";
                } else {
                    $_SESSION['message'] = "Thêm thất bại";
                }
                header('location:/?url=department');
            }
        } else {
            if ($_SESSION['role'] == 'Member') {
                header('location:/?url=department');
            } else {
                header('location:/');
            }
        }
    }
}
