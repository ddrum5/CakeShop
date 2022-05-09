<?php
session_start();
class C_thong_tin_ca_nhan
{
    public function hienThiThongTinCaNhan()
    {
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);

        $makh = $_SESSION['makh'];
        include("models/m_khach_hang.php");
        $m_khach_hang = new M_khach_hang();
        $khach_hang = $m_khach_hang->Doc_khach_hang_theo_ma_kh($makh);

        if (isset($_POST['updateTT'])) {
            $makh = $_SESSION['makh'];
            $_SESSION['hoTen'] = $hoten = $_POST['hoTen'];
            $phai = $_POST['phai'];
            $_SESSION['email'] = $email = $_POST['email'];
            $dia_chi = $_POST['diaChi'];
            $dien_thoai = $_POST['dienThoai'];
            $mat_khau = $_POST['matKhau'];
            $mat_khau_cu = $_POST['matKhauCu'];


            $kq = $m_khach_hang->Sua_khach_hang($makh, $hoten, $phai, $email, $dia_chi, $dien_thoai, $mat_khau, $mat_khau_cu);

            $_SESSION['thongBaoThanhCong'] = "Cập nhật thông tin thành công";

        }
        include("c_data_contact.php");
        include("Smarty_shop_hoa.php");

        $smarty = new Smarty_Shop_Hoa();
        $title = "Chỉnh sửa thông tin cá nhân";
        $view = "views/v_thong_tin_ca_nhan.tpl";
        include("c_smarty_info.php");
        $smarty->assign('kh', $khach_hang);
        $smarty->display("layout.tpl");
    }
}
