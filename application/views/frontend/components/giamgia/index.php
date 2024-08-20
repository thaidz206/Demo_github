<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Mã Giảm Giá</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Danh sách Mã Giảm Giá</h1>

    <?php if (!empty($coupons)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã Giảm Giá</th>
                    <th>Số Tiền Giảm</th>
                    <th>Ngày Bắt Đầu</th>
                    <th>Ngày Kết Thúc</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coupons as $coupon): ?>
                    <tr>
                        <td><?php echo $coupon['id']; ?></td>
                        <td><?php echo $coupon['code']; ?></td>
                        <td><?php echo $coupon['discount']; ?></td>
                        <td><?php echo $coupon['valid_from']; ?></td>
                        <td><?php echo $coupon['valid_to']; ?></td>
                        <td><?php echo $coupon['status'] ? 'Kích Hoạt' : 'Không Kích Hoạt'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Không có mã giảm giá nào.</p>
    <?php endif; ?>
</body>
</html>
