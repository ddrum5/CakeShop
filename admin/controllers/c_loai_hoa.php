<?php
session_start();
include("kiem_tra_session.php");
include("kiem_tra_phan_quyen.php"); 

class C_loai_hoa 
{
    function hien_thi_loai_hoa(){
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        //Model
        include("models/m_loai_banh.php");
        $m_loai_banh = new M_loai_banh();
        $doc_loai_banh = $m_loai_banh->doc_tat_ca_loai_banh();
        if(isset($_POST['btn_update'])){
            $tenLoai = $_POST['ten_loai'];
            $maLoai = $_POST['ma_loai'];
            $kiem_tra = $m_loai_banh->kiem_tra_loai_banh($tenLoai);
            if(!$kiem_tra){
                $update = $m_loai_banh->update_loai_banh($tenLoai,$maLoai);
                if($update){
                    $_SESSION['thongBaoThanhCong']="Cập nhật Loại bánh thành công";
                }
            }
        }
        if(isset($_POST['btn_add'])){
            $tenLoai = $_POST['ten_loai'];
            $kiem_tra = $m_loai_banh->kiem_tra_loai_banh($tenLoai);
            if(!$kiem_tra){
                $update = $m_loai_banh->them_loai_banh($tenLoai);
                if($update){
                    $_SESSION['thongBaoThanhCong']="Thêm Loại bánh thành công";
                }
            }
        }

        //Controller
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_loai_hoa.tpl";
        $title = "Danh sách Loại bánh";
        $smarty->assign("title",$title);
        $smarty->assign("doc_loai_banh",$doc_loai_banh);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
        
    }
}
?>