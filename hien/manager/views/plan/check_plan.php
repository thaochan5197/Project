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
                <h3>Danh sách kế hoạch</h3>
            </div>
            <form name="user_search" action="">
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="hidden" value="list" name="action"/>
                        <input type="text" name="search_data" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Kế hoạch</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <div class="-align-right">
                                <a href="user_controller.php?action=addNew" class="btn btn-primary">Add new</a>
                            </div>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <th class="x_content">

                        <p>Projects listing editing options</p>
                        <div class="form-group">
                            <label class="dz-error-message red">
                                <?php
                                if(isset($_SESSION['messages']))
                                    echo $_SESSION['messages']
                                ?>
                            </label>
                        </div>

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th>Mã kế hoạch</th>
                                <th>Thời gian bắt dầu</th>
                                <th>Thời gian kết thúc</th>
                                <th>Nội dung chính công tác</th>
                                <th>Tình trạng</th>
                               
                                
                                <th style="width: 20%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if(isset($_SESSION['data'])) {
                                foreach ($_SESSION['data'] as $value) {?>
                                    <tr>
                                        <td>#</td>
                                        <td>
                                            <a><?php echo $value['MaKH']?></a>
                                        </td>
                                        <td>
                                            <?php echo $value['ThoiGianBatDau']?>
                                        </td>
                                        <td>
                                            <?php echo $value['ThoiGianKetThuc']?>
                                        </td>
                                        <td class="project_progress">
                                            <?php echo $value['NoiDungChinhCongTac']?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="">
                                                    <label>
                                                        <?php if($value['TinhTrang'] == USER_STATUS_UN_ACTIVE){
                            echo 'Chưa duyệt';
                          }
                          else if($value['TinhTrang'] == USER_STATUS_ACTIVE){
                            echo 'Đã duyệt';
                          }?>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <a href="?action=view&id=<?php echo $value['MaKH']?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                            <a href="?action=editPage&id=<?php echo $value['MaKH']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="?action=delete&id=<?php echo $value['MaKH']?>" onclick="return confirmDelete()" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                            </tbody>
                        </table>
                        <!-- end project list -->
                        <?php
                        if(isset($_SESSION['paging'])){
                            echo $_SESSION['paging'];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script>
    function confirmDelete(){
        return confirm("Are You want delete!");
    }
</script>
<?php
if(isset($_SESSION['messages']))
    unset($_SESSION['messages']);
if(isset($_SESSION['paging']))
    unset($_SESSION['paging']);
require '../views/template/footer.php';
?>
