<?php
function TinMoiNhat_MotTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 0,1
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TinMoiNhat_BonTin() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by idTin desc
            limit 1,6
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TinXemNhieuNhat() {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            order by SoLanXem desc
            limit 0,4
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn,$qr);

    return $result;
    }
    function TinMoiNhat_TheoLoaiTin_MotTin($idLT) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idLT
            order by idTin desc
            limit 0,1
    ";
    
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TinMoiNhat_TheoLoaiTin_BonTin($idLT) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idLT
            order by idTin desc
            limit 1,4
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TenLoaiTin($idLT) {
    $conn = myConnect();
   $qr =  "
           select Ten
         from loaitin
            where idLT=$idLT
           
   ";
    mysqli_set_charset($conn, 'utf8');
    $loaitin = mysqli_query($conn,$qr);
   $row = mysqli_fetch_array($loaitin);
    return $row['Ten'];
}
function QuangCao($vitri)
{
      $conn = myConnect();
    $qr = "
            select * 
            from quangcao
            where vitri=$vitri
            
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
    
}
function DanhSachTheLoai()
{
      $conn = myConnect();
    $qr = "
            select * 
            from theloai
            
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
    
}
function DanhSachLoaiTin_Theo_TheLoai($idTL)
{
      $conn = myConnect();
    $qr = "
            select * 
            from loaitin
            where idTL=$idTL
            
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
    
}
function TinMoi_BenTrai($idTL) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idTL=$idTL
            order by idTin desc
            limit 0,1
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TinMoi_BenPhai($idTL) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idTL=$idTL
            order by idTin desc
            limit 1,2
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
}
function TinTheoLoaiTin($idLT) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idLT
            order by idTin desc
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 
function TinTheoLoaiTin_PhanTrang($idLT,$from,$sotin1trang) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idLT=$idLT
            order by idTin desc
            LIMIT $from,$sotin1trang
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 
function breadCrumb($idLT) {
    $conn = myConnect();
    $qr = "
            select TenTL,Ten
            from theloai,loaitin
            where theloai.idTL=loaitin.idTL
            AND idLT=$idLT
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 
function ChiTietTin($idTin) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idTin=$idTin
            
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 
function TinCungLoaiTin($idTin,$idLT) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where idTin <> $idTin
            AND idLT =$idLT
            ORDER BY RAND()
            LIMIT 0,3
            
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 


// function CapNhatSoLanXemTin($idTin) {
//      $conn = myConnect();
//     $qr = "
//             UPDATE tin
//             SET SoLanXem = SoLanXem + 1
//             where idTin=$idTin
//     ";
//  mysqli_set_charset($conn, 'utf8');

//  $result = mysqli_query($conn, $qr);
//   return $result;
// } 

function TimKiem($tukhoa) {
    $conn = myConnect();
    $qr = "
            select * 
            from tin
            where TieuDe REGEXP '$tukhoa'
            order by idTin desc
    ";
mysqli_set_charset($conn, 'utf8');
$result = mysqli_query($conn, $qr);

    return $result;
} 
?>