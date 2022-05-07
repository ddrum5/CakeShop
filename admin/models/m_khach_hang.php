
<?php
require_once("database.php");
class M_khach_hang extends database
{
    function doc_tong_don_khach_hang()
    {
        $sql =
            "SELECT khach_hang.*, sum(hoa_don.tong_thanh_tien) as tong_chi_tieu, 
        count(hoa_don.ma_hoa_don) as don_hang, max(hoa_don.ma_hoa_don) as don_hang_gan_nhat 
        fROM khach_hang inner join hoa_don on hoa_don.ma_khach_hang =khach_hang.ma_khach_hang 
        group by hoa_don.ma_khach_hang";

        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_tat_ca_khach_hang()
    {
        $sql = "SELECT * FROM khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function update_khach_hang($maKH, $tenKH, $email, $dia_chi, $dienThoai, $matKhauMoi, $matKhauCu)
    {
        if ($matKhauMoi == '') {
            $matKhau = $matKhauCu;
        }
        else {
            $matKhau = $matKhauMoi;
        }
        $sql = "UPDATE khach_hang SET ten_khach_hang=?, email=?, dia_chi=?, dien_thoai=?, matKhau=? 
        WHERE ma_khach_hang=?";

        $this->setQuery($sql);
        return $this->execute(array($tenKH, $email, $dia_chi, $dienThoai, md5($matKhau), $maKH));
    }

    function add_khach_hang( $gioiTinh, $tenKH, $email, $dia_chi, $dienThoai, $matKhau)
    {

        $sql = "INSERT INTO khach_hang( ten_khach_hang, phai, email, dia_chi, dien_thoai, matKhau)
        VALUES ( '$tenKH', $gioiTinh, '$email', '$dia_chi', '$dienThoai', '$matKhau') ";
        $this->setQuery($sql);
        return $this->execute();
    }



}
?>