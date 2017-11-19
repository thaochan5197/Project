<!DOCTYPE html>
<html>
<head>
    <title>trinhduyen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_FRONT_END_PART?>/views/fontaw/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URL_FRONT_END_PART?>/views/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo URL_FRONT_END_PART?>/views/js/common.js"></script>
    <!--	<script src="effect/scroll_to.js" type="text/javascript" charset="utf-8" async defer></script>-->
</head>
<body>

<!-- start top -->
<div class="border-b-naudat">
    <div class="container bgeee">
        <div class="row">
            <div class="col-md-6">
                <p class="logo reset lineheight72 font-family-san font30"><span class="red">fasion</span>press</p>
            </div>
            <div class="col-md-6">
                <div class="top mid">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="text-center inline"><a href="#">Join</a></li>
                        <li class="text-center inline"><a href="#">Sign In</a></li>
                        <li class="text-center inline"><a href="#" class="red">Shopping bag&nbsp;&nbsp;<span class="fa fa-shopping-bag"></span></a></li>
                        <li class="text-center inline"><?php echo $card_count = (isset($_SESSION['card']['card_count']))?'<a class="red" href="'.URL_FRONT_END_PART.'/controllers/product_controller.php?action=show_card">(' .$_SESSION['card']['card_count'].')</a>': ''?></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- end top -->



<!-- start menu -->
<div id="header" class="reset">
    <nav class="navbar navbar-default bg000 reset">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand text-uppercase font13" style="font-weight: bold;color:#fff;">
                    Home
                </a>
            </div>

            <div class="navbar-collapse collapse" id="main-menu">
                <ul class="nav navbar-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">carrers</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Company Profile</a></li>
                    <li><a href="#">Company Registration </a></li>
                    <li><a href="#">Wish List</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- end menu -->