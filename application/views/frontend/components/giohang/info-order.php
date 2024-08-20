<style>
.btn-checkout1:hover
{
    background-color: #0f9ed8;
}
</style>

<?php
// Check if the cart is empty and redirect if it is
if (!$this->session->userdata('cart')) {
    redirect('gio-hang');
} else {
    $user = $this->session->userdata('sessionKhachHang');
}
?>

<section id="checkout-cart">
    <div class="container" style="background-color: white; border-radius: 10px; height: 100vh;">
        <div class="col-md-12">
            <div class="wrapper overflow-hidden">
                <?php echo form_open('info-order', ['name' => 'info-order', 'enctype' => 'multipart/form-data', 'method' => 'post', 'novalidate' => '']); ?>
                <?php
                // Prompt login if the user is not logged in
                if (!$this->session->userdata('sessionKhachHang')) {
                    echo '<div style="font-size: 16px; padding-top: 10px; color: #ccc;">
                    Bạn có tài khoản? <a href="dang-nhap" style="color: ">Ấn vào đây để đăng nhập</a>
                    </div>';
                }
                ?>
                <div class="checkout-content">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-login-checkout" style="margin-bottom: 20px">
                        <p class="text-center">Địa chỉ giao hàng của quý khách</p>
                        <div class="wrap-info" style="width: 100%; min-height: 1px; overflow: hidden; padding: 10px;">
                            <table class="table tinfo" style="width: 80%;">
                                <tbody>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Khách hàng: <span class="require_symbol">*</span></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Họ và tên" name="name" value="<?php echo isset($user['fullname']) ? $user['fullname'] : ''; ?>" <?php echo $this->session->userdata('sessionKhachHang') ? 'readonly' : ''; ?>>
                                            <div class="error"><?php echo form_error('name'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Email: <span class="require_symbol">*</span></td>
                                        <td>
                                            <input type="text" class="form-control" name="<?php echo $this->session->userdata('sessionKhachHang') ? 'tv' : 'email'; ?>" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" placeholder="Email" <?php echo $this->session->userdata('sessionKhachHang') ? 'readonly' : ''; ?>>
                                            <div class="error"><?php echo form_error('email'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Số điện thoại: <span class="require_symbol">*</span></td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Số điện thoại" name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>" <?php echo $this->session->userdata('sessionKhachHang') ? 'readonly' : ''; ?>>
                                            <div class="error"><?php echo form_error('phone'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Tỉnh/Thành phố: <span class="require_symbol">*</span></td>
                                        <td>
                                            <select name="city" id="province" onchange="renderDistrict()" class="form-control next-select">
                                                <option value="">--- Chọn tỉnh thành ---</option>
                                                <?php $list = $this->Mprovince->province_all();
                                                foreach ($list as $row) : ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <div class="error"><?php echo form_error('city'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Quận/Huyện: <span class="require_symbol">*</span></td>
                                        <td>
                                            <select name="DistrictId" id="district" class="form-control next-select">
                                                <option value="">--- Chọn quận huyện ---</option>
                                            </select>
                                            <div class="error"><?php echo form_error('DistrictId'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Địa chỉ giao hàng: <span class="require_symbol">*</span></td>
                                        <td>
                                            <textarea name="address" placeholder="Địa chỉ giao hàng:" class="form-control" rows="4" style="height: auto !important;"><?php echo isset($user['address']) ? $user['address'] : ''; ?></textarea>
                                            <div class="error"><?php echo form_error('address'); ?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width30 text-right td-right-order">Mã giảm giá (nếu có):</td>
                                        <td>
                                            <input id="coupon" style="border-radius: 5px; border-color: #0f9ed8;" type="text" class="form-control" placeholder="Mã giảm giá" name="coupon">
                                            <div class="error" id="result_coupon"></div>
                                        </td>
                                        <td colspan="1">
                                            <a class="check-coupon btn btn-success  "  title="mã giảm giá" onclick="checkCoupon()">Sử dụng</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: none;"></td>
                                        <td style="border: none;">
                                            <div class="btn-checkout frame-100-1 overflow-hidden border-pri" style="float: right; ">    
                                                <button type="submit" style="width: 300px; background-color: #333;" class="btn-checkout1 btn btn-danger bg-pri border-pri col-fff" name="dathang">Đặt hàng</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 products-detail">
                        <div class="no-margin-table col-login-checkout" style="width: 95%;">
                            <p>Thông tin đơn hàng</p>
                            <table class="table" style="color: #333">
                                <tbody>
                                    <tr class="text-transform font-weight-600">
                                        <td style="width: 150px;"><h4>Sản phẩm</h4></td>
                                        <td class="text-center"><h4>Số lượng</h4></td>
                                        <td class="text-center"><h4>Giá</h4></td>
                                        <td class="text-center"><h4>Tổng</h4></td>
                                    </tr>
                                    <?php if ($this->session->userdata('cart')) :
                                        $data = $this->session->userdata('cart');
                                        $money = 0;
                                        foreach ($data as $key => $value) :
                                            $row = $this->Mproduct->product_detail_id($key); ?>
                                            <tr>
                                                <td><?php echo $row['name']; ?></td>
                                                <td class="text-center"><?php echo $value; ?></td>
                                                <td>
                                                    <?php
                                                    $price_end = $row['price_sale'] > 0 ? $row['price_sale'] : $row['price'];
                                                    echo number_format($price_end) . ' VNĐ';
                                                    ?>
                                                </td>
                                                <td style="float: right;">
                                                    <?php
                                                    $total = $price_end * $value;
                                                    $money += $total;
                                                    echo number_format($total) . ' VNĐ';
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="3">Tổng cộng :</td>
                                        <td style="float: right;"><?php echo number_format($money) . ' VNĐ'; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p style="font-size: 12px;">(Phí giao hàng)</p>
                                        </td>
                                        <td style="float: right;"><?php echo number_format($this->Mconfig->config_price_ship()) . ' VNĐ'; ?></td>
                                    </tr>
                                    <?php if ($this->session->userdata('coupon_price')) :
                                        $price_coupon_money = $this->session->userdata('coupon_price');
                                        $price_coupon = number_format($price_coupon_money); ?>
                                        <tr>
                                            <td colspan="3">Voucher giảm giá:</td>
                                            <td>
                                                <p style="float:right;">-<?php echo $price_coupon; ?> VNĐ</p>
                                                <td style="cursor: pointer;"><a onclick="removeCoupon()"><i class="fas fa-times"></i></a></td>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <tr style="background: #f4f4f4">
                                        <td colspan="3">
                                            <p style="font-size: 15px; color: red;">Thành tiền</p>
                                            <span style="font-weight: 100; font-style: italic;">(Tổng số tiền thanh toán)</span>
                                        </td>
                                        <td class="text-center">    
                                            <p style="font-size: 15px; color: red;">
                                                <?php
                                                $money_pay = isset($price_coupon_money) ? ($money + $this->Mconfig->config_price_ship()) - $price_coupon_money : $money + $this->Mconfig->config_price_ship();
                                                echo number_format($money_pay) . ' VNĐ';
                                                ?>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

<script>
    function renderDistrict() {
        var provinceid = $("#province").val();
        var strurl = "<?php echo base_url(); ?>" + 'giohang/district';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: { 'provinceid': provinceid },
            success: function(data) {
                $('#district').html(data);
            }
        });
    };

    function checkCoupon() {
        var code = $("input[name='coupon']").val();
        var strurl = "<?php echo base_url(); ?>" + 'giohang/coupon';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: { code: code },
            success: function(data) {
                $('#result_coupon').html(data);
            }
        });
    }

    function removeCoupon() {
        var strurl = "<?php echo base_url(); ?>" + '/giohang/removecoupon';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#result_coupon').html(data);
                document.location.reload(true);
            }
        });
    }
</script>
