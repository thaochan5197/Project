<?php require_once '../views/header.php'?>
    <!-- start slide -->
    <div class="reset" style="width:100%;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="<?php echo URL_FRONT_END_PART?>/views/imgs/banner.png" alt="Chania" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo URL_FRONT_END_PART?>/views/imgs/banner.png" alt="Chania" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo URL_FRONT_END_PART?>/views/imgs/banner.png" alt="Flower" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo URL_FRONT_END_PART?>/views/imgs/banner.png" style="width:100%;">
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- end slide -->



    <!-- start search -->
    <div class="bgradients" style="width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-inline padding-t-b-5 borderradius0">
                        <span class="red text-uppercase">Search Product</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="form-group borderradius0">
                            <div class="input-group borderradius0 width300">
                                <input type="text" class="form-control borderradius0 bgc9">
                                <div class="input-group-addon borderradius0 bg-red border-red"><span class="glyphicon glyphicon-search fff"></span></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="right padding-t-b-5 font25">
                        <span class="glyphicon glyphicon-th-list red pointer"></span>&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-th-list red pointer"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search -->


    <div style="margin-top:2px;"></div>


    <!-- start content -->
    <div class="container font15 left-menu">
        <div class="row">
            <!-- start left -->
            <?php require_once '../views/side_bar_left.php'?>
            <!-- end left -->


            <!-- start right -->
            <div class="col-md-9 col-sm-12">

this is content categories list



            </div>
            <!-- end right -->
        </div>
    </div>
    <!-- end content -->

    <!-- start ngăn cách -->
    <div style="width: 100%;height: 37px;margin-top: 15px;" class="bg"></div>
    <!-- end ngăn cách -->
<?php require_once '../views/footer.php'?>