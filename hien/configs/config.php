<?php
/**
 * Created by PhpStorm.
 * User: thangnm
 * Date: 12/17/2016
 * Time: 8:43 PM
 */
if(!defined('GROUP_ADMIN')){define('GROUP_ADMIN', 0);}
if(!defined('GROUP_EMPLOYEE')){define('GROUP_EMPLOYEE', 1);}
if(!defined('GROUP_MANAGER')){define('GROUP_MANAGER', 2);}
if(!defined('GROUP_COUNTER')){define('GROUP_COUNTER', 3);}
if(!defined('WROOT')){define('WROOT', '../'.dirname(__FILE__));}

//User role
if(!defined('USER_STATUS_ACTIVE')){define('USER_STATUS_ACTIVE',1);}
if(!defined('USER_STATUS_UN_ACTIVE')){define('USER_STATUS_UN_ACTIVE',0);}

//Status
if(!defined('STATUS_ACTIVE')){define('STATUS_ACTIVE',1);}
if(!defined('STATUS_UN_ACTIVE')){define('STATUS_UN_ACTIVE',0);}

//Payment status
if(!defined('STATUS_PAYMENT_COMPLETE')){define('STATUS_PAYMENT_COMPLETE',1);}
if(!defined('STATUS_PAYMENT_NOT_COMPLETE')){define('STATUS_PAYMENT_NOT_COMPLETE',0);}

//Gender option
if(!defined('MALE')){define('MALE',1);}
if(!defined('FEMALE')){define('FEMALE',0);}

if(!defined('URL_ADMIN_PART')){define('URL_ADMIN_PART', 'http://localhost:8888/hien/admin');}
if(!defined('URL_MANAGER_PART')){define('URL_MANAGER_PART', 'http://localhost:8888/hien/manager');}
if(!defined('URL_FRONT_END_PART')){define('URL_FRONT_END_PART', 'http://localhost:8888/hien');}

//Image upload load parth
if(!defined('URL_ADMIN_UPLOAD_PART')){define('URL_ADMIN_UPLOAD_PART', $_SERVER['DOCUMENT_ROOT'].'/hien/admin/uploads');}
//Url image part
if(!defined('URL_ADMIN_IMAGE_PART')){define('URL_ADMIN_IMAGE_PART', 'http://localhost:8888/hien/admin/uploads');}
//Paging config
if(!defined('NUMBER_RECORDS_IN_PAGE')){define('NUMBER_RECORDS_IN_PAGE', 10);}

