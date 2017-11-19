<?php
require_once '../views/template/header.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Đề nghị thanh toán</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tạo đề thanh toán</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-group">
                      <label class="dz-error-message red">
                        <?php
                        if(isset($_SESSION['messages']))
                          echo $_SESSION['messages']
                        ?>
                      </label>
                    </div>
                    <form id="addPayment" name="addPayment" method="post" action="<?php echo URL_ADMIN_PART?>/controllers/advance_controller.php" data-parsley-validate class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
                      <input type="hidden" value="createPayment" name="action"/>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Mã kế hoạch<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="MaKH" name="MaKH" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phí đi lại
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="PhiDiLai" name="PhiDiLai" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Phí lưu trú</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="PhiLuuTru" name="PhiLuuTru" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Phí phát sinh</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="PhiPhatSinh" name="PhiPhatSinh" class="form-control col-md-7 col-xs-12"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Số tiền đã tạm ứng</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="TienTamUng" name="TienTamUng" class="form-control col-md-7 col-xs-12"> 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày tạo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="NgayTao" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="?action=list" class="btn btn-primary">Cancel</a>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


<?php
if(isset($_SESSION['messages']))
  unset($_SESSION['messages']);
require '../views/template/footer.php';
?>
