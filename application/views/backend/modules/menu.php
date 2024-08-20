<style>

    /* For WebKit-based browsers */
.main-sidebar {
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: #495057 #343a40; /* For Firefox */
}

.main-sidebar::-webkit-scrollbar {
    width: 8px; /* Width of the scrollbar */
}

.main-sidebar::-webkit-scrollbar-track {
    background: #343a40; /* Background of the scrollbar track */
}

.main-sidebar::-webkit-scrollbar-thumb {
    background-color: #495057; /* Color of the scrollbar thumb */
    border-radius: 10px; /* Roundness of the scrollbar thumb */
    border: 2px solid #343a40; /* Padding around the thumb */
}

/* General Sidebar Styles */
.main-sidebar {
    width: 250px;
    background-color: #343a40;
    color: #ffffff;
    position: fixed;
    height: 100%;
    overflow-y: auto;
}

.main-sidebar a {
    color: #c2c7d0;
    display: block;
    padding: 10px 15px;
    text-decoration: none;
}

.main-sidebar a:hover {
    background-color: #495057;
    color: #ffffff;
}

.sidebar {
    padding: 0;
}

.sidebar-menu {
    list-style: none;
    margin: 0;
    padding: 0;
}

.sidebar-menu .header {
    font-size: 14px;
    color: #c2c7d0;
    padding: 10px 15px;
    text-transform: uppercase;
}

.sidebar-menu .treeview > a {
    position: relative;
}

.sidebar-menu .treeview-menu {
    display: none;
    list-style: none;
    padding: 0;
}

.sidebar-menu .treeview-menu li {
    padding-left: 15px;
}

.sidebar-menu .treeview-menu li a {
    padding: 10px 15px;
    display: block;
    color: #adb5bd;
}

.sidebar-menu .treeview-menu li a:hover {
    background-color: #495057;
    color: #ffffff;
}

.sidebar-menu .treeview > a .pull-right-container {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
}

.sidebar-menu .treeview:hover .treeview-menu {
    display: block;
}

.sidebar-menu .treeview-menu .active > a {
    background-color: #495057;
    color: #ffffff;
}

.sidebar-menu i {
    width: 20px;
}

.fa-angle-left {
    transition: transform 0.3s ease;
}

.treeview:hover .fa-angle-left {
    transform: rotate(-90deg);
}

/* Specific styles for active state */
.sidebar-menu .treeview-menu .active > a,
.sidebar-menu .treeview > a:hover {
    background-color: #495057;
    color: #ffffff;
}

</style>
<aside class="main-sidebar">

    <section class="sidebar" >
        <ul class="sidebar-menu" >
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="fa fa-bar-chart"></i> <span>Thống kê</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ CỬA HÀNG</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/content">
                    <i class="glyphicon glyphicon-list"></i><span>Tin tức</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/product">
                    <i class="fa fa-leaf"></i><span>Sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/category">
                    <i class="fa fa-indent"></i><span>Loại sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url()?>admin/producer">
                    <i class="fa fa-gift"></i><span>Nhà cung cấp</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ BÁN HÀNG</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/coupon">
                    <i class="fa fa-diamond"></i> <span>Mã giảm giá</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/contact">
                    <i class="fa fa-envelope"></i> <span>Liên hệ</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/orders">
                    <i class="fa fa-shopping-cart"></i> <span>Đơn hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/customer">
                    <i class="fa fa-user"></i><span>Khách hàng</span>
                </a>
            </li>
            <li class="treeview">
             <a href="<?php echo base_url() ?>admin/sliders">
                <i class="fa fa-cogs"></i> <span>Giao diện</span>
            </a>
        </li>
        <li class="header">CÀI ĐẶT</li>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
                    <a href="<?php echo base_url() ?>admin/configuration/update">
                        <i class="fa fa-cogs"></i> Cấu hình
                    </a>
                </li>
                <?php if($user['role'] == 1){
                echo  '<li>
                    <a href="admin/useradmin">
                        <i class="fa fa-users"></i> Nhân viên
                    </a>
                </li>';
                } ?>
            </ul>
        </li>
        <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->
</aside>