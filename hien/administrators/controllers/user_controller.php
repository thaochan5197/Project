<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once '../../configs/config.php';
require_once '../models/user_model.php';
require_once '../../admin/libs/functions.php';

class UserControllers {
    public $user_model;
    public $ctr_name = 'users';
    public function __construct(){

        $this->user_model = new UserModel();
        if(!isset($_SESSION['user_info'])){
            $this->loginAction();
        }
    }

    function indexAction(){
        if(isset($_SESSION['user_info'])){
            $this->listAction();
        }else{
            $this->loginAction();
        }
    }

    

    function showLoginPageAction(){
        require_once '../views/users/login.php';
    }
    

    function listAction(){

        $data_search = '';
        if(isset($_SESSION['user_info'])){
            $page = 1;
            if(isset($_REQUEST['page'])){
                $page = $_REQUEST['page'];
            }
            if(isset($_REQUEST['search_data'])){
                $data = $this->user_model->searchUser($_REQUEST['search_data']);
                $data_search = $_REQUEST['search_data'];
            }else{
                $data = $this->user_model->getAllUsers();
            }
            if(count($data) > NUMBER_RECORDS_IN_PAGE ){
                $result = pagination($page, $data,NUMBER_RECORDS_IN_PAGE, 'users', '../controllers/user_controller.php?action=list&page=', $this->user_model, $data_search);
                $_SESSION['paging'] = $result['paging'];
                $_SESSION['data'] = $result['data'];
            }else{
                $_SESSION['data'] = $data;
            }


            require_once '../views/users/list.php';
        }else{
            header('Location:user_controller.php?action=login');
        }
    }

    //show add new page
    function addNewPageAction(){
        require_once '../views/users/add_new.php';
    }
    function createAction($data, $obj_file){
        
            $result = $this->user_model->insertNewUser($data);
            if ($result) {
                $_SESSION['messages'] = 'Add new success!';
                header('Location:user_controller.php?action=list');
            } else {
                $_SESSION['messages'] = 'Add new fail , please check user info again!';
                header('Location:user_controller.php?action=addNew');
            }
    }

    function deleteAction($id){
        $result = $this->user_model->deleteUserById($id);
        if($result){
            $_SESSION['messages'] = 'Delete is success!';
        }else{
            $_SESSION['messages'] = 'Can not delete this user, please check user info again!';
        }
        header('Location:user_controller.php?action=list');
    }

    //show edit page
    public function showEditPageAction($id){
        $result = $this->user_model->getUserInfoById($id);
        if($result){
            $_SESSION['data'] = $result;
            require_once '../views/users/edit.php';
        }else{
            $_SESSION['messages'] = 'This user not exist, please check user in for again!';
            header('Location:user_controller.php?action=list');
        }
    }
    //view page
    public function view($id){
        $result = $this->user_model->getUserInfoById($id);
        if($result){
            $_SESSION['data'] = $result;
            require_once '../views/users/info.php';
        }else{
            $_SESSION['messages'] = 'This user not exist, please check user in for again!';
            header('Location:user_controller.php?action=list');
        }
    }
    //edit user info
    function editAction($data){
            $result = $this->user_model->checkUserInfoUpdate($data);
            if ($result) {
                    $this->user_model->updateUserById($data);
                    header('Location:user_controller.php?action=list');
            } else {
                $_SESSION['messages'] = 'This user be existed, please check user in for again!';
                header('Location:user_controller.php?action=editPage&id=' . $data['id']);
            }

    }
}

//create new object UserController
$admin = new UserControllers();

if(isset($_REQUEST['action'])){
    $_SESSION['ctr_name'] = $admin->ctr_name;
    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

//Progress controller
switch ($action){
    case 'index':
        $admin->indexAction();
        break;
    case 'login':
        $admin->loginAction();
        break;
    case 'logout':
        $admin->logoutAction();
        break;
    case 'showLoginPageAction':
        $admin->showLoginPageAction();
        break;
    case 'list':
        $admin->listAction();
        break;
    case 'addNew':
        $admin->addNewPageAction();
        break;
    case 'create':
        $admin->createAction($_REQUEST, $_FILES);
        break;
    case 'editPage':
        $admin->showEditPageAction($_REQUEST['id']);
        break;
    case 'edit':
        $admin->editAction($_REQUEST, $_FILES);
        break;
    case 'delete':
        $admin->deleteAction($_REQUEST['id']);
        break;
    case 'view':
        $admin->view($_REQUEST['id']);
        break;
    default:
        $admin->indexAction();
        break;
}