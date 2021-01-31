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
    <link rel="stylesheet" href="css/infoProduct.css">
    <link rel="stylesheet" href="css/product.css">
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
                        <li><a href="product.php?type=0">Balo đeo chéo</a></li>
                        <li><a href="product.php?type=1">Balo du lịch</a></li>
                        <li><a href="product.php?type=2">Balo học sinh</a></li>
                        <li><a href="product.php?type=3">Balo laptop</a></li>
                        <li><a href="product.php?type=4">Balo máy ảnh</a></li>
                        <li><a href="product.php?type=5">Balo thể thao</a></li>
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
            <p></p>
            <div class="info">
                <div class="info-left">
                    <p>
                    <h3>TIN TỨC</h3>
                    </p>

                    <div class="news">
                        <div class="news-left">
                            <a href=""><img src="pic/news1.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="">Top 7 balo hàng hiệu giá rẻ chính hãng 2018</a></h2>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-left">
                            <a href=""><img src="pic/news3.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="">Địa chỉ shop bán balo hàng hiệu Hà Nội cực chất</a></h2>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-left">
                            <a href=""><img src="pic/news4.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="">Top 7 balo laptop giá rẻ tại cửa hàng chính hãng 2018</a></h2>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-left">
                            <a href=""><img src="pic/news4.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="">Cập nhật top 5 shop balo nam đẹp TPHCM 2018</a></h2>
                        </div>
                    </div>
                    <div class="news">
                        <div class="news-left">
                            <a href=""><img src="pic/news5.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="">Mua balo đeo chéo cực chất của Seliux</a></h2>
                        </div>
                    </div>
                    <p>
                    <h3>SẢN PHẨM BÁN CHẠY</h3>
                    </p>

                    <?php $arr1 = showsanphambanchay();
                        for ($i=0; $i < sizeof($arr1); $i++) { 
                    ?>
                    <div class="news">
                        <div class="news-left">
                            <a href="info-product.php?ma=<?= $arr1[$i]['id'] ?>"><img src="pic/picsub/<?= $arr1[$i]['pic'] ?>.jpg" alt=""></a>
                        </div>
                        <div class="news-right">
                            <h2><a href="info-product.php?ma=<?= $arr1[$i]['id'] ?>"><?= $arr1[$i]['tensp'] ?></a></h2>
                            <h3 style="color: red;padding-left: 10px;"><?= number_format($arr1[$i]['gia']) ?>đ</h3>
                        </div>
                    </div>
                    <?php } ?>

                </div>

                <div class="info-right">
                    <?php 
                        $type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 6;
                        $arr = null;
                        if (isset($_POST['filter'])) {
                            $arr = sp(filter($type,$_POST['filter']));
                        }
                        else {
                            $arr = showsanphamsortbydanhmuc($type);
                        }
                    ?>
                    <h1></h1>
                    <form action="" method="post">
                        <input type="hidden" value="<?= $type ?>">
                        <select name="filter" id="">
                            <option value="love">
                                Yêu Thích
                            </option>
                            <option value="asc">
                                Sắp Xếp Tăng Dần Theo Giá
                            </option>
                            <option value="desc">
                                Sắp Xếp Giảm Dần Theo Giá
                            </option>
                        </select>
                        <button id="ls" type="submit">Lọc</button>
                    </form>
                    <div class="spproduct">
                    <?php 
                        for ($i=0; $i < sizeof($arr); $i++) { 
                    ?>
                    <div class="sub-product">
                        <a href="info-product.php?ma=<?= $arr[$i]['id'] ?>"><img src="pic/picsub/<?= $arr[$i]['pic']. ".jpg" ?>" alt=""></a><br>
                        <p><a href="info-product.php?ma=<?= $arr[$i]['id'] ?>"><?= $arr[$i]['tensp'] ?></a></p>
                        <p style="color:red;"><?= number_format($arr[$i]['gia']) ?> đ</p>
                    </div>
                    <?php } ?>

                    </div>
                </div>
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