<?php require_once 'header.php'?>
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
			<?php require_once 'side_bar_left.php'?>
			<!-- end left -->
			

			<!-- start right -->
			<div class="col-md-9 col-sm-12">
                <?php
                foreach($_SESSION['data'] as $key => $value){
                ?>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php echo URL_ADMIN_PART?>/uploads/galleries/<?php echo $value['image']?>" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="<?php echo URL_FRONT_END_PART?>/controllers/product_controller.php?id=<?php echo $value['id']?>" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-xs-12 margin-top7xs"></div>
                <?php }?>
				<!--<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/hoa.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-md-8  col-sm-12 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/5nguoi.png" style="width: 100%;">
							<div class="margin-top10"></div>
							<span class="font16 text56 float-left margin-top15">Serax fibrepots</span>
							<span class="float-right">
								<strong><span class="font24 margin-right38">$24.<sup class="font17">99</sup></span></strong>
								<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff">get it</a>
							</span>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>-->

				<!--<div style="margin-top: 7px;"></div>-->
				<!-- start row bộ 6 -->
				<!--<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo61.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo62.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-12 margin-top7sm"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo63.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-md-12 margin-top7md"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo64.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-12 margin-top7sm"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo65.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/bo66.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>-->
				<!-- end row bộ 6 -->

				<!--<div style="margin-top: 24px;"></div>	-->


				<!-- start popular -->
				<!--<div class="row">
					<div class="col-md-12">
						<p class="font-20 bold"><span class="texte7">POPULAR</span>&nbsp;PRODUCTS NOW</p>
					</div>
					<div style="margin-top: 20px;"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200 sp-hot">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/now1.png" style="width: 100%;" class="">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
							<div id="my-div">
								<span class="text-uppercase hot fff">hot</span>
							</div>
						</div>
					</div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/now2.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-12 margin-top7sm"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/now3.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-md-12 margin-top7md"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/now4.png" style="width: 100%;">
							<p class="margin-top20"></p>
							<p class="font13 text56">Kids Moon Colorblock</p>
							<p class="font13 text56">Footed Tights</p>
							<p class="float-left"><strong><span class="font24">$8.<sup class="font17">99</sup></span></strong></p>
							<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff float-right">get it</a>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-12 margin-top7sm"></div>
					<div class="col-xs-12 margin-top7xs"></div>

					<div class="col-md-8  col-sm-12 col-xs-12">
						<div class="padding-tb6-lr4 bgfff min-height200">
							<img src="<?php /*echo URL_FRONT_END_PART*/?>/views/imgs/now5.png" style="width: 100%;">
							<div class="margin-top10"></div>
							<span class="font16 text56 float-left margin-top15">Serax fibrepots</span>
							<span class="float-right">
								<strong><span class="font24 margin-right38">$24.<sup class="font17">99</sup></span></strong>
								<a href="#" class="btn text-uppercase bgda282e padding-tb26-lr33 textfff">get it</a>
							</span>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>-->
				<!-- end popular
			</div>
			<!-- end right -->
		</div>
	</div>
	<!-- end content -->

	<!-- start ngăn cách -->
	<div style="width: 100%;height: 37px;margin-top: 15px;" class="bg"></div>
	<!-- end ngăn cách -->
<?php require_once 'footer.php'?>