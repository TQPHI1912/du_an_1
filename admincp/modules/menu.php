<ul class="admincp_list">

    <li class="dashboard"><i class="fa-solid fa-suitcase"></i>Dashboard</li>
    <li><a href="index.php?action=quanlysanpham&query=them"><i class="fa-brands fa-product-hunt"></i>Quản lý sản phẩm
        </a></li>

    <?php
    if (isset($_SESSION['dangnhap'])) {
        if ($_SESSION['dangnhap'] == 'admin') {
    ?>
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them"><i class="fa-solid fa-bars"></i>Quản lý
            danh mục sản phẩm </a></li>
    <li><a href="index.php?action=quanlynguoidung&query=them"><i class="fa-solid fa-user"></i>Quản lý người dùng</a>
    </li>

    <?php

        }
    }

    ?>
    <li class="qldh"><a href="index.php?action=quanlydonhang&query=them"><i class="fa-regular fa-book"></i>Quản lý đơn
            hàng </a></li>
</ul>
</div>