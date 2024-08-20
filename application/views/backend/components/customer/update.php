<style>

        /* Content Wrapper */
    .content-wrapper {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        min-height: 564px; /* Adjust as needed */
    }

    /* Content Header */
    .content-header {
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .content-header h1 {
        font-size: 24px;
        color: #333; /* Adjust text color as needed */
    }

    /* Breadcrumb */
    .breadcrumb {
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    /* Form Styling */
    .form-control {
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 8px;
        transition: border-color 0.3s ease;
        width: 100%;
    }

    .form-control:focus {
        border-color: #5b86e5;
        box-shadow: none;
    }

    .form-group {
        margin-bottom: 20px;
    }

    /* Select Styling */
    .form-control.select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px"><path d="M7 10l5 5 5-5z"/></svg>');
        background-repeat: no-repeat;
        background-position-x: calc(100% - 12px);
        background-position-y: center;
        padding-right: 30px;
    }

    /* Button Styling */
    .btn-primary {
        border-radius: 5px;
        padding: 10px 20px;
        border: none;
        background: linear-gradient(to right, #36d1dc, #5b86e5);
        color: white;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(to right, #5b86e5, #36d1dc);
    }

</style>
<?php echo form_open('admin/customer/update/'.$row['id']); ?>
<div class="content-wrapper">
    <form action="<?php echo base_url() ?>admin/customer/update.html" method="post" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Cập nhật khách hàng</h1>
            <div class="breadcrumb">
                <a class="btn btn-primary btn-sm" href="admin/customer" role="button">
                    <span class="glyphicon glyphicon-remove"></span> Thoát
                </a>
            </div>
        </section>    
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                                    <div class="box">
                        <div class="box-body">
                            <!--ND-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ và tên <span class="maudo">(*)</span></label>
                                    <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Điện thoại <span class="maudo">(*)</span></label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="maudo">(*)</span></label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="form-control" style="width:300px">
                                        <option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Đang hoạt động</option>
                                        <option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ngừng hoạt động</option>
                                    </select>
                                </div>
                            </div>
                            <!--/.ND-->
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </form>        
</div>