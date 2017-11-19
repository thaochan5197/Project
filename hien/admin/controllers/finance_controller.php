  <?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once '../../configs/config.php';
require_once '../models/finance_model.php';
require_once '../libs/functions.php';

class FinanceControllers {
    public $advance_model;
    public $ctr_name = 'finance';
    public function __construct(){

        $this->advance_model = new FinanceModel();
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

    function addNewAdvanceAction(){
        require_once '../views/finance/add_advance.php';
    }

    function addAdvanceAction($data, $obj_file){
        
            $result = $this->advance_model->insertAdvance($data);
            if ($result) {
                $_SESSION['messages'] = 'Gửi yêu cầu thành công!';
                header('Location:finance_controller.php?action=addAdvance');
            } else {
                $_SESSION['messages'] = 'Add new fail , please check user info again!';
                header('Location:finance_controller.php?action=addAdvance');
            }
    }

    function addNewPaymentAction(){
        require_once '../views/finance/add_payment.php';
    }

    function addPaymentAction($data, $obj_file){
        
            $result = $this->advance_model->insertPayment($data);
            if ($result) {
                $_SESSION['messages'] = 'Gửi yêu cầu thành công!';
                header('Location:finance_controller.php?action=addPayment');
            } else {
                $_SESSION['messages'] = 'Add new fail , please check user info again!';
                header('Location:finance_controller.php?action=addPayment');
            }
    }

}
//create new object AdvanceController
$admin = new FinanceControllers();

if(isset($_REQUEST['action'])){
    $_SESSION['ctr_name'] = $admin->ctr_name;
    $_SESSION['sub_menu'] = $action = $_REQUEST['action'];
}else{
    $action = 'index';
}

switch ($action){
	case 'addAdvance':
		$admin->addNewAdvanceAction();
		break;
    case 'createAdvance':
        $admin->addAdvanceAction($_REQUEST, $_FILES);
        break;
    case 'addPayment':
		$admin->addNewPaymentAction();
		break;
    case 'createPayment':
        $admin->addPaymentAction($_REQUEST, $_FILES);
        break;
    default:
        $admin->indexAction();
        break;
    }
