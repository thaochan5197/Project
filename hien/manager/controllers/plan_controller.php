<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once '../../configs/config.php';
require_once '../models/plan_model.php';
require_once '../../admin/libs/functions.php';

class PlanControllers {
    public $plan_model;
    public $ctr_name = 'plans';
    public function __construct(){

        $this->plan_model = new PlanModel();
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



    function listAction(){

        $data_search = '';
        if(isset($_SESSION['user_info'])){
            $page = 1;
            if(isset($_REQUEST['page'])){
                $page = $_REQUEST['page'];
            }
            if(isset($_REQUEST['search_data'])){
                $data = $this->plan_model->searchUser($_REQUEST['search_data']);
                $data_search = $_REQUEST['search_data'];
            }else{
                $data = $this->plan_model->getAllUsers();
            }
            if(count($data) > NUMBER_RECORDS_IN_PAGE ){
                $result = pagination($page, $data,NUMBER_RECORDS_IN_PAGE, 'users', '../controllers/plan_controller.php?action=list&page=', $this->user_model, $data_search);
                $_SESSION['paging'] = $result['paging'];
                $_SESSION['data'] = $result['data'];
            }else{
                $_SESSION['data'] = $data;
            }


            require_once '../views/plan/list_plan.php';
        }else{
            header('Location:user_controller.php?action=login');
        }
    }

    //show add new page
    function addNewPageAction(){
        require_once '../views/plan/add_plan.php';
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
        $result = $this->plan_model->deleteUserById($id);
        if($result){
            $_SESSION['messages'] = 'Delete is success!';
        }else{
            $_SESSION['messages'] = 'Can not delete this user, please check user info again!';
        }
        header('Location:plan_controller.php?action=list');
    }

    //show edit page
    public function showEditPageAction($id){
        $result = $this->plan_model->getUserInfoById($id);
        if($result){
            $_SESSION['data'] = $result;
            require_once '../views/plan/edit_plan.php';
        }else{
            $_SESSION['messages'] = 'This user not exist, please check user in for again!';
            header('Location:plan_controller.php?action=list');
        }
    }
    //view page
    public function view($id){
        $result = $this->plan_model->getUserInfoById($id);
        if($result){
            $_SESSION['data'] = $result;
            require_once '../views/plan/info.php';
        }else{
            $_SESSION['messages'] = 'This user not exist, please check user in for again!';
            header('Location:plan_controller.php?action=list');
        }
    }
    //edit user info
    function editAction($data){
            $result = $this->plan_model->checkUserInfoUpdate($data);
            if ($result) {
                    $this->plan_model->updateUserById($data);
                    header('Location:plan_controller.php?action=list');
            } else {
                $_SESSION['messages'] = 'This user be existed, please check user in for again!';
                header('Location:plan_controller.php?action=editPage&id=' . $data['MaKH']);
            }


    }
	function showCheckPlanAction(){

        $data_search = '';
        if(isset($_SESSION['user_info'])){
            $page = 1;
            if(isset($_REQUEST['page'])){
                $page = $_REQUEST['page'];
            }
            if(isset($_REQUEST['search_data'])){
                $data = $this->plan_model->searchUser($_REQUEST['search_data']);
                $data_search = $_REQUEST['search_data'];
            }else{
                $data = $this->plan_model->getAllUsers();
            }
            if(count($data) > NUMBER_RECORDS_IN_PAGE ){
                $result = pagination($page, $data,NUMBER_RECORDS_IN_PAGE, 'plans', '../controllers/plan_controller.php?action=list&page=', $this->plan_model, $data_search);
                $_SESSION['paging'] = $result['paging'];
                $_SESSION['data'] = $result['data'];
            }else{
                $_SESSION['data'] = $data;
            }


            require_once '../views/plan/check_plan.php';
        }else{
            header('Location:user_controller.php?action=login');
        }
    }    
   
}


//create new object UserController
$admin = new PlanControllers();

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
    case 'showCheck':
    	$admin->showCheckPlanAction();
    	break;
    default:
        $admin->indexAction();
        break;
}