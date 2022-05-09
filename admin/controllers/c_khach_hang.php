<?php
session_start();
include("kiem_tra_session.php");
class C_khach_hang
{
    function hien_thi_trang_khach_hang()
    {

        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        include("models/m_khach_hang.php");
        $m_khach_hang = new M_khach_hang();
        $ds_khach_hang_da_mua = $m_khach_hang->doc_tong_don_khach_hang();
        $ds_tat_ca_khach_hang = $m_khach_hang->doc_tat_ca_khach_hang();

        if (isset($_POST['btn_update'])) {
            $maKH = $_POST['maKH'];
            $tenKH = $_POST['tenKH'];
            $email = $_POST['email'];
            $dia_chi = $_POST['diaChi'];
            $dienThoai = $_POST['dienThoai'];
            $matKhau = $_POST['matKhau'];
            $matKhauCu = $_POST['matKhauCu'];

            $update = $m_khach_hang->update_khach_hang($maKH, $tenKH, $email, $dia_chi, $dienThoai, $matKhau, $matKhauCu);
            if ($update) {
                $_SESSION['thongBaoThanhCong'] = "Cập nhật khách hàng thành công";
            }
            else {
                $_SESSION['thongBao'] = "Cập nhật thất bại";

            }

        }

        if (isset($_POST['btn_add'])) {
            $gioiTinh = $_POST['gioiTinh'];
            $tenKH = $_POST['tenKH'];
            $email = $_POST['email'];
            $dia_chi = $_POST['diaChi'];
            $dienThoai = $_POST['dienThoai'];
            $matKhau = $_POST['matKhau'];


            $update = $m_khach_hang->add_khach_hang( $gioiTinh, $tenKH, $email, $dia_chi, $dienThoai, $matKhau);
            if ($update) {
                $_SESSION['thongBaoThanhCong'] = "Thêm khách hàng thành công";
            }
            else {
                $_SESSION['thongBao'] = "Thêm khách thất bại";

            }

        }



        include("Smarty_admin.php");
        $smarty = new Smarty_Admin();
        $view = "views/v_khach_hang.tpl";
        $title = "Trang khách hàng";
        $smarty->assign("ds_khach_hang_da_mua", $ds_khach_hang_da_mua);
        $smarty->assign("ds_tat_ca_khach_hang", $ds_tat_ca_khach_hang);
        $smarty->assign("title", $title);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");



    }
}
?>
