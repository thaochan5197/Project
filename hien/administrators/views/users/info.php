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
                <h3>Info User</h3>
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
                      <input type="hidden" value="<?php echo $_SESSION['data']['id']?>" name="id"/>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name" >User Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['user']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Mã nhân viên 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['MaNV']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Họ và tên 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['HoVaTen']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Ngày sinh 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['NgaySinh']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Địa chỉ 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['DiaChi']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Số điện thoại 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['SDT']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['Email']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Chức vụ 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['ChucVu']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">Bộ phận 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['DonViCongTac']?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php if($_SESSION['data']['status'] == USER_STATUS_UN_ACTIVE){
                          	echo 'Disable';
                          }
                          else if($_SESSION['data']['status'] == USER_STATUS_ACTIVE){
                          	echo 'Active';
                          }?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php if($_SESSION['data']['group_id'] == GROUP_ADMIN){
                          	echo 'Admin';
                          }
                          else if($_SESSION['data']['group_id'] == GROUP_EMPLOYEE){
                          	echo 'Nhân viên';
                          }
                          else if($_SESSION['data']['group_id'] == GROUP_MANAGER){
                            echo 'Quản lý';
                          }
                          else if($_SESSION['data']['group_id'] == GROUP_COUNTER){
                            echo 'Kế Toán';
                          }?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <?php if($_SESSION['data']['GioiTinh'] == MALE){
                          	echo 'Male';
                          }
                          else if($_SESSION['data']['GioiTinh'] == FEMALE){
                          	echo 'Female';
                          }?>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Create <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                          <?php echo $_SESSION['data']['ngaytao']?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="?action=list" class="btn btn-primary">Cancel</a>
                          <a href="?action=editPage&id=<?php echo $_SESSION['data']['MaNV']?>" class="btn btn-primary">Edit</a>
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
