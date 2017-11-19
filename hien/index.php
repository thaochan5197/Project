<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'configs/config.php';
require 'models/db.php';

header('Location:'.URL_FRONT_END_PART.'/controllers/index_controller.php?action=index');

