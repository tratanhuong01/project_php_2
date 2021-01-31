<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style-type: none;
            color: black;
        }
    </style>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include 'sql.php'; ?>
    <div id="first">
        <a href=""><img src="" alt=""></a>
    </div>
    <div id="menu">
        <div class="pp menuss">
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="">BẠN MUỐN MUA LOẠI BALO NÀO?</a>
                    <ul class="sub-menu">
                        <li><a href="product.php?type=0">Balo học sinh</a></li>
                        <li><a href="product.php?type=1">Balo laptop</a></li>
                        <li><a href="product.php?type=2">Balo du lich</a></li>
                        <li><a href="product.php?type=3">Balo đeo chéo</a></li>
                        <li><a href="product.php?type=4">Balo thể thao</a></li>
                        <li><a href="product.php?type=5">Balo máy ảnh</a></li>
                    </ul>
                </li>
                <li><a href="">THƯƠNG HIỆU</a></li>
                <li><a href="">KINH NGHIỆM MUA BALO</a></li>
                <li class="sssssssss">
                    <form action="" method="post">
                        <input type="text" name="" id="">
                        <button type="submit">OK</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="pp">
            <div class="content-1">
                <div class="content-1-sub">
                    <p>Balo</p>
                    <p>Giảm Giá Đến 70% Cho Nhiều Sản Phẩm</p>
                    <img src="pic/balo.jpg" alt=""><br>
                    <span class="xem">
                        Xem tất cả sản phẩm
                    </span>
                </div>
                <div class="content-1-sub">
                    <p>Túi Xách</p>
                    <p>Túi Xách Tay Thời Trang, Sang Trọng</p>
                    <img src="pic/tui-xach.jpg" alt=""><br>
                    <span class="xem">
                        Xem tất cả sản phẩm
                    </span>
                </div>
                <div class="content-1-sub">
                    <p>Phụ Kiện BaLo - Túi Xách</p>
                    <p>Sản Phẩm Hổ Trợ Dụng Cho Balo,Túi Xách</p>
                    <img src="pic/phu-kien.png" alt=""><br>
                    <span class="xem">
                        Xem tất cả sản phẩm
                    </span>
                </div>
            </div>
            <div class="content-2">
                <a href="index.php"><button>Nổi Bật</button></a>
                <a href="index.php?st=true"><button>Sản Phẩm Mới</button></a>
            </div>
            <div class="content-3">
            <?php 
                if (isset($_REQUEST['st'])) {
                    $arr = showsanphammoira();
                }
                else {
                    $arr = showsanpham();
                }
                for ($i=0; $i < sizeof($arr); $i++) { 
            ?>
            <div class="sub-product">
                <a href="info-product.php?ma=<?= $arr[$i]['id'] ?>"><img src="pic/picsub/<?= $arr[$i]['pic']. ".jpg" ?>" alt=""></a><br>
                <p><a href="info-product.php?ma=<?= $arr[$i]['id'] ?>"><?= $arr[$i]['tensp'] ?></a></p>
                <p style="color:red;"><?= number_format($arr[$i]['gia']) ?> đ</p>
            </div>
            <?php } ?>
            </div>
            <div style="margin: auto;">
                <h3>Thông Tin Hữu Ích</h3>
            </div>
            <div class="content-4">
                <div class="content-4-sub">
                    <a href=""><img src="pic/tc1.jpg" alt=""></a><br>
                    <p><a href="">Top 7 balo hàng hiệu giá rẻ chính hãng 2018</a></p>
                    <p>Thời gian gần đây xu hướng chọn mua balo hàng hiệu giá rẻ ngày càng tăng. Ai cũng có nhu cầu sở
                        hữu một...</p>
                </div>
                <div class="content-4-sub">
                    <a href=""><img src="pic/tc2.jpg" alt=""></a><br>
                    <p><a href="">Địa chỉ shop bán balo hàng hiệu Hà Nội cực chất</a></p>
                    <p>Thị trường balo hàng hiệu Hà Nội hiện rất sôi động với nhiều cửa hàng uy tín, bán hàng chất
                        lượng. Trong đó phải...</p>
                </div>
                <div class="content-4-sub">
                    <a href=""><img src="pic/tc3.jpg" alt=""></a><br>
                    <p><a href="">Top 7 balo laptop giá rẻ tại cửa hàng chính hãng 2018</a></p>
                    <p>Dạo qua một vòng các shop bán balo chính hãng, nhận thấy nhu cầu mua balo laptop giá rẻ ngày càng
                        tăng. Vì laptop...</p>
                </div>
            </div>
            <div class="content-5">
                <ul>
                    <li><a href=""><img src="pic/logo1.png" alt=""></a></li>
                    <li><a href=""><img src="pic/logo2.png" alt=""></a></li>
                    <li><a href=""><img src="pic/logo3.png" alt=""></a></li>
                    <li><a href=""><img src="pic/logo4.png" alt=""></a></li>
                    <li><a href=""><img src="pic/logo5.png" alt=""></a></li>
                    <li><a href=""><img src="pic/logo6.png" alt=""></a></li>
                </ul>
            </div>
            <div class="content-6">
                <p style="font-size: 20px;">SELIUX - Thương hiệu balo cao cấp hợp thời trang</p>
                <br>
                <p>Balo Seliux là dòng balo chính hãng cao cấp được sản xuất với phương châm “chất lượng sản phẩm được
                    đặt lên trên hết”. Tất cả balo mang thương hiệu Seliux trước khi xuất xưởng đều phải qua khâu kiểm
                    định gắt gao, nghiêm ngặt. Ưu điểm nổi trội của mọi sản phẩm balo Seliux là chất liệu hỗ trợ chống
                    thấm ướt tối đa. Hơn nữa, đường may cũng được trau chuốt và tỉ mỉ vừa tạo nét thẩm mỹ vừa giúp balo
                    bền chắc hơn trong quá trình sử dụng.</p>
                <p>Balo Seliux với thiết kế đa dạng phù hợp với mọi đối tượng người dùng: balo laptop cho giới văn
                    phòng, học sinh, sinh viên, balo du lịch cho những bạn trẻ đam mê dịch chuyển và đi phượt, balo một
                    quai thuận tiện cho những người bận rộn...Chính vì lẽ đó, Seliux đã và đang trở thành thương hiệu
                    tiêu biểu cho sự năng động cửa giới trẻ ngày nay.</p>
            </div>
        </div>
    </div>
    <div class="end">
        <div class="first-widget footer-widget">

            <div class="textwidget">
                <h3 class="widget-title">Kinh Nghiệm Hữu Ích</h3>
                <ul style="display: block;">
                    <li>» <a href="">Những shop bán balo đẹp giá rẻ ở TPHCM</a></li>
                    <li>» <a href="">Nên mua balo online đẹp ở đâu?</a></li>
                    <li>» <a href="">Tìm shop balo dễ thương tại TPHCM</a></li>
                    <li>» <a href="">Những mẫu balo túi xách du lịch cho bạn</a></li>
                    <li>» <a href="">Những kiểu balo laptop nhỏ gọn cực tiện lợi</a></li>
                    <li>» <a href="">Xu hướng balo đẹp cho nam giới</a></li>
                    <li>» <a href="">Mua balo laptop 15.6 inch thương hiệu Seliux</a></li>
                    <li>» <a href="">Tìm shop balo dễ thương tại TPHCM</a></li>
                    <li>» <a href="">Mua balo hàng hiệu giá cực ưu đãi</a></li>
                    <li>» <a href="">Chọn mua balo laptop 13 inch cần lưu ý gì?</a></li>
                </ul>
            </div>

            <div class="textwidget">
                <h3 class="widget-title">Hệ Thống Cửa Hàng</h3>
                <p><b>Hệ thống cửa hàng tại TPHCM</b><br>
                    CH1: 55C Trần Nhật Duật, P Tân Định, Q1 (BALO)<br>
                    CH2: 25/22 Tôn Thất Tùng, Q1, HCM (BALO)<br>
                    CH3: 34 Trần Quang Diệu, P14, Q3, HCM (BALO)<br>
                    (Gần ngã tư Lê Văn Sỹ và Trần Quang Diệu)<br>
                    CH4: 968 Cách Mạng Tháng 8, P5 Q.Tân Bình (BALO)<br>
                    Mở cửa từ 9h-22h<br>
                    <br><b>Hệ thống cửa hàng tại Hà Nội</b><br>
                    CH5: 157 Tây Sơn, Đống Đa, Hà Nội<br>
                    Mở cửa từ 9h-22h
                </p>
            </div>

            <div class="textwidget">
                <h3 class="widget-title">Cam kết</h3>
                <p>✓&nbsp;Bảo hành sản phẩm trọn đời<br>
                    ✓&nbsp;Hoàn tiền nếu không hài lòng<br>
                    ✓&nbsp;Giá tốt cho khách mua số lượng lớn<br>
                    ✓&nbsp;Ship toàn quốc</p>
            </div>
        </div>
    </div>
</body>

</html>