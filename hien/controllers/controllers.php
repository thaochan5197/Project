
<?php
session_start();
require_once '../../configs/config.php';
class Controllers{
    public $user_model;
    public $ctr_name = 'users';


    function loginAction(){

            if(!isset($_SESSION['user_info'])){
                if (isset($_REQUEST['login_submit'])) {
                    $user_info = $this->user_model->checkUserInfo($_REQUEST['user_name'], $_REQUEST['password']);
                    if (count($user_info) > 0) {
                        $_SESSION['user_info'] = $user_info;
                        header('Location:user_controller.php?action=list');
                    } else {
                        //login fail
                        $_SESSION['messages'] = 'Please check user info again!';
                        header('Location:user_controller.php?action=showLoginPageAction');
                    }
                }else{
                    require_once '../views/users/login.php';
                }
            }else{
                header('Location:user_controller.php?action=list');
            }
        }
    }
}