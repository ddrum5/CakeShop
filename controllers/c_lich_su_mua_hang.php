
<?php
session_start();


error_reporting(0);
class C_lich_su_mua_hang
{
    public function hien_thi_trang_lich_su_mua_hang()
    {
        $maKH = $_SESSION['makh'];
        include("c_data_contact.php");
        //Model
        include("models/m_check_hoa_don.php");
        $m_check_hoa_don = new M_check_hoa_don();
        $hoa_dons = $m_check_hoa_don->timHoaDonTheoMaKH($maKH);
       
        
        //View
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Lịch sử mua hàng";
        $smarty->assign('title', $title);
        $view = "views/v_lich_su_mua_hang.tpl";
        include("c_smarty_info.php");
        //Smarty check hoa don
        $smarty->assign('hoa_dons', $hoa_dons);
        $smarty->display("smarty/templates/gioi_thieu/layout.tpl");
    }
}
