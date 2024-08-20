<style>
    /* Content Wrapper */
    .content-wrapper {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    /* Content Header */
    .content-header {
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .content-header h1 {
        font-size: 24px;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    /* Breadcrumb */
    .breadcrumb {
        display: flex;
        gap: 10px;
    }

    .breadcrumb .btn {
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .breadcrumb .btn-primary {
        background: linear-gradient(to right, #36d1dc, #5b86e5);
        border: none;
        color: white;
    }

    .breadcrumb .btn-primary:hover {
        background: linear-gradient(to right, #5b86e5, #36d1dc);
    }

    .breadcrumb .btn .glyphicon {
        margin-right: 5px;
    }

    /* Form Styling */
    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 7px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #5b86e5;
        box-shadow: none;
    }

    .error {
        font-size: 14px;
        margin-top: 5px;
    }

    /* Select Styling */
    .select2-container--default .select2-selection--single {
        height: 38px;
        border-radius: 5px;
        border: 1px solid #ddd;
        padding: 8px;
    }

    .select2-container--default .select2-selection--single:focus {
        border-color: #5b86e5;
        outline: 0;
        box-shadow: none;
    }

    /* File Input Styling */
    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        display: inline-block;
        cursor: pointer;
    }

    .custom-file-upload:hover {
        background-color: #f0f0f0;
    }

</style>
<?php echo form_open_multipart('admin/useradmin/insert'); ?>
<div class="content-wrapper">
    <form action="admin/useradmin/insert.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Thêm thành viên</h1>
            <div class="breadcrumb">
                <button type = "submit" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-floppy-save"></span>
                    Lưu[Thêm]
                </button>
                <a class="btn btn-primary btn-sm" href="admin/useradmin" role="button">
                    <span class="glyphicon glyphicon-remove do_nos"></span> Thoát
                </a>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box" id="view">
                        <div class="box-body">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Họ và tên <span class = "maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="fullname" >
                                    <div class="error" id="password_error" style="color: red;"><?php echo form_error('fullname')?></div>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class = "maudo">(*)</span></label>
                                    <input type="email" class="form-control" name="email" >
                                    <div class="error" id="password_error" style="color: red;"><?php echo form_error('email')?></div>
                                </div>
                                <div class="form-group">
                                    <label>Tên đăng nhập <span class = "maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="username" >
                                    <div class="error" id="password_error"  style="color: red;"><?php echo form_error('username')?></div>
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu <span class = "maudo">(*)</span></label>
                                    <input type="password" class="form-control" name="password" >
                                    <div class="error" id="password_error"  style="color: red;"><?php echo form_error('password')?></div>
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại <span class = "maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="phone" >
                                    <div class="error" id="password_error" style="color: red;"><?php echo form_error('phone')?></div>
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ <span class = "maudo">(*)</span></label>
                                    <input type="text" class="form-control" name="address" >
                                    <div class="error" id="password_error" style="color: red;"><?php echo form_error('address')?></div>
                                </div>
                                
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Quyền<span class = "maudo">(*)</span></label>
                                    <select name="role" class="form-control">
                                        <option value = "">[--Chọn quyền--]</option>
                                            <?php  
                                                $list=$this->Muser->groupadmin_list();
                                                $option_parentid="";
                                                foreach ($list as $row) {
                                                    $option_parentid.="<option value='".$row['id']."'>".$row['name']."</option>";
                                                }
                                                echo $option_parentid;
                                            ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ảnh đại diện</label>
                                    <input type="file"  id="image_list" name="img">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control">
                                        <option value = "1">Kích hoạt</option>
                                        <option value = "0">Chưa kích hoạt</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box -->
                </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
    </form>
<!-- /.content -->
</div><!-- /.content-wrapper -->