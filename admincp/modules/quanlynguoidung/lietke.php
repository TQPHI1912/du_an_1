    <?php
    $sql_lietke_nguoidung = "SELECT * FROM tbl_dangky ORDER BY id_khachhang DESC";
    $result_lietke_nguoidung = mysqli_query($connect, $sql_lietke_nguoidung);
    ?>
    <h3>Danh sách người dùng</h3>
    <table class="tbl_danhsachsp" border="1">
        <tr>
            <th>ID</th>
            <th>Name </th>
            <th>Account</th>
            <th>Email</th>
            <th>Number phone</th>
            <th>Address</th>
            <th>Quản lý</th>
            <th>Chức vụ</th>



        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result_lietke_nguoidung)) {
            $i++;

        ?>

            <tr>
                <td style="height:100px;"> <?php echo $i ?></td>
                <td> <?php echo $row['hovaten'] ?></td>
                <td> <?php echo $row['taikhoan'] ?></td>
                <td> <?php echo $row['email'] ?></td>
                <td> <?php echo $row['sodienthoai'] ?></td>
                <td style="width:100px;"> <?php echo $row['diachi'] ?></td>
                <td class="action">
                    <a class="delete" href="?action=quanlynguoidung&query=sua&email=<?php echo $row['email'] ?>"> Sửa </a>
                    <a class="edit" href="modules/quanlynguoidung/xuly.php?email=<?php echo $row['email'] ?>">Xóa</a>
                </td>

                <td><?php if ($row['chucvu'] == 1) {
                        echo "Bán hàng";
                    } else {
                        echo "Không";
                    } ?>
                </td>
            </tr>


        <?php
        }
        ?>
    </table>