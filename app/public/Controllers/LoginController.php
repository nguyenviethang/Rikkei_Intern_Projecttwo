<?php
class LoginController
{
    public function checkLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require "Models/User.php";
            $username = $_POST['username'];
            $password = $_POST['password'];
            $_SESSION['username'] = "$username";
            $checkLogin = new User();
            $result = $checkLogin->checkLogin($username, $password);
    
            if (is_null($result)) {
                $_SESSION['error'] = "Đăng nhập không thành công";
                header('location:/');
            } else
            /** 
             * trường hipwj đăng nhâp thành công 
             */
            {
                if ($result['role_id'] == 1) {
                    $_SESSION['role'] = "Admin";
                } else {
                    $_SESSION['role'] = "Member";
                }
                $_SESSION['id'] = $result['id'];
                /** check quyền cảu đăng nhập */
                header('location:/?url=user');
            }
        }
    }
    public function Logout()
    {
        session_destroy();
        header('location:/');
    }
}
