<?php
$sql_lietke_dh = "SELECT * FROM tbl_giohang ,tbl_dangky  WHERE tbl_giohang.email=tbl_dangky.email ORDER BY id_cart DESC";
$result_lietke_dh = mysqli_query($connect, $sql_lietke_dh);
?>
<h3>Danh sách đơn hàng của người dùng</h3>
<table class="tbl_danhsachsp" style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Tài khoản</th>
        <th>Hình thức thanh toán</th>
        <th>Điện thoại</th>
        <th>Tinh Trạng </th>
        <th colspan="2">Quản lý </th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke_dh)) {
        $i++;

    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['code_cart'] ?></td>
            <td><?php echo $row['hovaten'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td><?php echo $row['taikhoan'] ?></td>
            <td><?php echo $row['cart_payment'] ?></td>
            <td><?php echo $row['sodienthoai'] ?></td>
            <td>
                <?php if ($row['cart_status'] == 1) {
                    echo '<a href="modules/quanlydonhang/xuly.php?code=' . $row['code_cart'] . '">Đơn hàng mới</a>';
                } else {
                    echo 'Đã xem';
                }
                ?>
            </td>
            <td class="action">
                <a class="delete" href="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row['code_cart'] ?>">Xóa</a>
                <a class="edit" href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn
                    hàng</a>


            </td>
        </tr>

    <?php
    }
    ?>
</table>
</table>