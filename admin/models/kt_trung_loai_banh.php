<?php
if(isset($_POST['tenLoai'])){
    $tenLoai = $_POST["tenLoai"];
    include("m_loai_banh.php");
    $m_loai_hoa = new M_loai_banh();
    $kiem_tra = $m_loai_hoa->kiem_tra_loai_banh($tenLoai);
    if($kiem_tra){
        die("Trùng Loại bánh");
    }
}
?>