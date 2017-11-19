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
                <h3>Thông tin kế hoạch</h3>
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
                    <h2>Info User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="form-group">
                      <label class="dz-error-message red">
                        <?php
                        if(isset($_SESSION['messages']))
                          echo $_SESSION['messages']
                        ?>
                      </label>
                    </div>
                    <br />
                    <form name="addNew" method="post" action="<?php echo URL_ADMIN_PART?>/controllers/user_controller.php" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      <input type="hidden" value="edit" name="action"/>
                      <input type="hidden" value="<?php echo $_SESSION['data']['MaKH']?>" name="id"/>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Mã kế hoạch <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['MaKH']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Người đi công tác</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['NguoiDiCongTac']?>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Mã nhân viên</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['MaNV']?>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Bộ phận</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['BoPhan']?>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung chính công tác</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['NoiDungChinhCongTac']?>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Nơi đến</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['NoiDen']?>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian bắt đầu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['ThoiGianBatDau']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Thời gian kết thúc</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['ThoiGianKetThuc']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Ngày Tạo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['NgayTao']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Tình trạng</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php if($_SESSION['data']['TinhTrang'] == USER_STATUS_UN_ACTIVE){
                          	echo 'Chưa duyệt';
                          }
                          else if($_SESSION['data']['TinhTrang'] == USER_STATUS_ACTIVE){
                          	echo 'Đã duyệt';
                          }?>
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
