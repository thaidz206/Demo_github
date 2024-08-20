<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("frontend/Mcoupon");
        $this->data['com']='giamgia';
    }

    // Hiển thị danh sách mã giảm giá
    public function index() {
        $limit = 10; // Số lượng mã giảm giá hiển thị trên mỗi trang
        $first = 0; // Bắt đầu từ mã giảm giá đầu tiên (phân trang)

        // Lấy danh sách mã giảm giá
        $data['coupons'] = $this->Mcoupon->coupon_all($limit, $first);

        // Hiển thị view
        $this->load->view('frontend/layout',$this->data);
    }
}
?>
