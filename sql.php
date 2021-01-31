<?php 
    function connection() {
        $connection = null;
        try {
            $connection = new PDO("mysql:host=localhost;dbname=banbalo", "root", "");
        } catch (Exception $e) {
            
        }
        return $connection;
    }
    function showsanpham() {
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
                    ON sanpham.iddanhmuc = danhmuc.iddanhmuc LIMIT 8";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function showinfosanpham($id) {
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
        ON sanpham.iddanhmuc = danhmuc.iddanhmuc WHERE sanpham.id = '" . $id ."'";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function showdanhmuc() {
        $truyvan = "SELECT iddanhmuc,tendanhmuc FROM danhmuc ";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function arrdanhmuc() {
        $arr = showdanhmuc();
        $arrNew = array();
        for ($i=0; $i < sizeof($arr); $i++) { 
            $arrNew[$i] = " WHERE sanpham.iddanhmuc = '" . $arr[$i]['iddanhmuc'] ."'";
        }
        $arrNew[sizeof($arr)] = "";
        return $arrNew;
    }
    function showsanphamsortbydanhmuc($type) {
        $arr = arrdanhmuc();
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
        ON sanpham.iddanhmuc = danhmuc.iddanhmuc " . $arr[$type];
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function showsanphambanchay() {
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
        ON sanpham.iddanhmuc = danhmuc.iddanhmuc WHERE sanpham.kieu = 1 LIMIT 5 ";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function showsanphammoira() {
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
        ON sanpham.iddanhmuc = danhmuc.iddanhmuc WHERE sanpham.kieu = 2 LIMIT 8 ";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function showsanphamlienquan($type) {
        $arr = arrdanhmuc();
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
        ON sanpham.iddanhmuc = danhmuc.iddanhmuc " . $arr[$type] . "  LIMIT 8";
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
    function filter($type,$fil) {
        $arr = arrdanhmuc();
        $str = "";
        switch ($fil) {
            case 'love':
                $str = $arr[$type] . " AND sanpham.kieu = 3 ";
                break;
            case 'desc':
                $str = $arr[$type] . " ORDER BY sanpham.gia DESC";
                break;
            case 'asc':
                $str = $arr[$type] . " ORDER BY sanpham.gia ASC";
                break;    
        }
        return $str;
    }
    function sp($str) {
        $truyvan = "SELECT * FROM sanpham INNER JOIN danhmuc 
                    ON sanpham.iddanhmuc = danhmuc.iddanhmuc " . $str;
        $connection = connection();
        $st = $connection->prepare($truyvan);
        $st->execute();
        $kq = $st->fetchAll(PDO::FETCH_ASSOC);
        return $kq;
    }
?>