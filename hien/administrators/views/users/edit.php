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
                <h3>Form Edit User</h3>
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
                    <h2>Edit User</h2>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user-name">User Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?php echo $_SESSION['data']['user']?>" id="user-name" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Họ và tên</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['HoVaTen']?>" id="HoVaTen" name="HoVaTen" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['NgaySinh']?>" id="NgaySinh" name="NgaySinh" class="form-control col-md-7 col-xs-12" type="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['DiaChi']?>" id="DiaChi" name="DiaChi" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Số điện thoại</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['SDT']?>" id="sdt" name="sdt" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['Email']?>" id="email" name="email" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Chức vụ</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['ChucVu']?>" id="ChucVu" name="ChucVu" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Bộ phận</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php echo $_SESSION['data']['DonViCongTac']?>" id="BoPhan" name="BoPhan" class="form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="status" class="form-control">
                            <?php
                             $selected = $_SESSION['data']['status'];
                              $disable = '';
                              $enable = '';
                            if($selected  == USER_STATUS_UN_ACTIVE){
                              $disable = 'selected = "selected"';
                            }
                            if($selected  == USER_STATUS_ACTIVE){
                              $enable = 'selected = "selected"';
                            }
                            ?>
                            <option <?php echo $selected = ($_SESSION['data']['status'] == USER_STATUS_UN_ACTIVE)?'selected = "selected"':'';?> value="<?php echo USER_STATUS_UN_ACTIVE?>">Disable</option>
                            <option <?php echo $selected = ($_SESSION['data']['status'] == USER_STATUS_ACTIVE)?'selected = "selected"':'';?> value="<?php echo USER_STATUS_ACTIVE?>">Active</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="status" class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="group_name" class="form-control">
                            <option value="<?php echo GROUP_ADMIN?>">Admin</option>
                            <option value="<?php echo GROUP_EMPLOYEE?>">Nhân viên</option>
                            <option value="<?php echo GROUP_MANAGER?>">Quản lý</option>
                            <option value="<?php echo GROUP_COUNTER?>">Kế toán</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="<?php echo MALE?>" checked="checked"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="<?php echo FEMALE?>"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Create <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="date_created" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $_SESSION['data']['ngaytao']?>" required="required" type="text" readonly="readonly">
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
