<?php
$sql_lietke = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$result_lietke = mysqli_query($connect, $sql_lietke);
?>
<h3>Liệt kê danh mục sản phẩm</h3>
<table class="tbl_danhsachsp" style="width: 100%;" border="1" style="border-collapse:collapse;">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($result_lietke)) {
        $i++;

    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['thutu'] ?></td>
        <td class="action">
            <a class="delete" href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">
                Xoá
            </a>
            <a class="edit"
                href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
        </td>
    </tr>

    <?php
    }
    ?>
</table>