<!-- start left -->
<div class="col-md-3 col-sm-12">
    <div class="row border-top-right">
        <div class="col-md-12 reset">
            <div class="product-menu">
                <p class="text-center fff lineheight40 reset">product menu</p>
            </div>
            <?php
            foreach($_SESSION['menu'] as $key => $value){
                if(isset($value[0])){
                    foreach($value as $key => $value){
                        echo '<p class="bgf4 bor text33 font15"><span class="vangnhe" style="padding-left: 40px"></span>&nbsp;&nbsp;<a href="cate_controller?cate_id='.$value['id'].'&action=list">'.$value['name'].'</a></p>';
                    }
                }else{
                    echo '<p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="cate_controller?cate_id='.$value['id'].'&action=list" class="bold">'.$value['name'].'</a></p>';
                }
            }
            ?>
            <!--<p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Man</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Women</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Fashion 2013</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Kids</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Jeans</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Tshirt</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Top Fasion</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Summber collection</a></p>
            <p class="bgf4 bor text33 font15"><span class="glyphicon glyphicon-play vangnhe"></span>&nbsp;&nbsp;<a href="#">Special Offer</a></p>-->
        </div>

        <!-- start location -->
        <div class="col-md-12">
            <div style="margin-top:32px;"></div>
            <img src="<?php echo URL_FRONT_END_PART?>/views/imgs/location.png" style="width:100%;">
            <p class="font37 text-uppercase text-center c90">DELIVERING</p>
            <p class="font37 text-uppercase text-center c90 bold">WORLD WIDE</p>
        </div>
        <!-- end location -->


        <!-- start twitter -->
        <div class="col-md-12">
            <p class="font18 bold textred">Latest From Twitter</p>

            <div class="row margin-top20">
                <div class="col-md-2 col-sm-2">
                    <span class="fa fa-twitter colord8 font28"></span>
                </div>
                <div class="col-md-10 col-sm-10 texti">
								<span class="font13 text83">
								<span class="textred">@crucio</span>
								what an incredible site!
								</span>
                    <br>
                    <span class="textred">less than a minute ago</span>
                </div>
            </div>

            <div class="row margin-top20">
                <div class="col-md-2 col-sm-2">
                    <span class="fa fa-twitter colord8 font28"></span>
                </div>
                <div class="col-md-10 col-sm-10 texti">
								<span class="font13 text83">
								<span class="textred">@lukebeck l</span>
								ove this theme, tons of options, lots of goodies and crazy good support.  I cant ask for anything better!
								</span>
                    <br>
                    <span class="textred">about 3 hours ago</span>
                </div>
            </div>


            <div class="row margin-top20">
                <div class="col-md-2 col-sm-2">
                    <span class="fa fa-twitter colord8 font28"></span>
                </div>
                <div class="col-md-10 col-sm-10 texti">
								<span class="font13 text83">
								<span class="textred">@harikumar </span>
								where do you get support for account issues?
								</span>
                    <br>
                    <span class="textred">http://t.co/sr324nLrQw</span>
                    <br>
                    <span class="textred">less than a minute ago</span>
                </div>
            </div>

        </div>
        <!-- end twitter -->


        <!-- start happy -->
        <div class="col-md-12 margin-top20">
            <p class="font18 text-uppercase bold textred">Our Happy Clients</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="bgf6 padding-tb30-lr24">
                        <em class="font13 text74">
                            “Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit, sed quia non numquam eius labore et dolore magnam ets aliquam quaerat voluptatemser. Enim ad minimas venians amets
                        </em>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tamgiac"></div>
                </div>

                <div class="col-md-12">
                    <span class="fa fa-user text33 font28"></span>
                    <span class="font13 text33">&nbsp;&nbsp;&nbsp;&nbsp;Jon Doe, Company Inc.</span>
                </div>
            </div>
        </div>
        <!-- end happy -->



        <!-- start khung trống -->
        <div class="col-md-12">
            <div class="min-width-md-trong"></div>
        </div>
        <!-- end khung trống -->
    </div>
</div>
<!-- end left -->