<?php
ob_start();
session_start();
$id = $_GET['id'];

switch ($_GET['url']) {
  case 'department':
    require('Controllers/DepartmentController.php');
    $departs = new DepartmentController();
    $departs->getAll();
    break;

  case 'save-updateDepart':
    require('Controllers/DepartmentController.php');
    $saveDepart = new DepartmentController();
    $saveDepart->updateDepart();
    break;

  case 'editDepart':
    require('Controllers/DepartmentController.php');
    $editDepart = new DepartmentController();
    $editDepart->editDepart();
    break;

  case 'deleteDepart':
    require('Controllers/DepartmentController.php');
    $deleteDepart = new DepartmentController();
    $deleteDepart->deleteDepart($id);
    break;

  case 'addDepart':
    require('Controllers/DepartmentController.php');
    $addDepart = new DepartmentController();
    $addDepart->addDepart();
    break;

  case 'save-addDepart':
    require('Controllers/DepartmentController.php');
    $addDepart = new DepartmentController();
    $addDepart->addDepart();
    break;

  case 'user':
    require('Controllers/UserController.php');
    $user = new UserController();
    $user->getAll();
    break;

  case 'save-update':
    require('Controllers/UserController.php');
    $saveUser = new UserController();
    $saveUser->updateUser();
    break;

  case 'editUser':

    require('Controllers/UserController.php');
    $edit = new UserController();
    $edit->editUser();
    break;

  case 'deleteUser':

    require('Controllers/UserController.php');
    $deleteUser = new UserController();
    $deleteUser->deleteUser($id);
    break;

  case 'addUser':

    require('Controllers/UserController.php');
    $addUser = new UserController();
    $addUser->addUser();
    break;

  case 'save-add':
    require('Controllers/UserController.php');
    $addUser = new UserController();
    $addUser->addUser();
    break;

  case 'login':
    require('Controllers/LoginController.php');
    $login = new LoginController();
    $login->checkLogin();
    break;

  case 'logout':
    require('Controllers/LoginController.php');
    $login = new LoginController();
    $login->Logout();
    break;


  default:
    require('Views/login.php');
    break;
}
