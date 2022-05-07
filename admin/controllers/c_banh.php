<?php
session_start();
include("kiem_tra_session.php");
include("kiem_tra_phan_quyen.php");
class C_banh
{
    public function hien_thi_banh()
    {
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        include("models/m_banh.php");
        $m_banh = new M_banh();
        $doc_hoa = $m_banh->doc_tat_ca_banh();
        include("models/m_loai_banh.php");
        $m_loai_hoa = new M_loai_banh();
        $doc_loai_banh = $m_loai_hoa->doc_tat_ca_loai_banh();
        $this->ThemBanh();
        $this->SuaBanh();
        include("Smarty_admin.php");
        $smarty = new  Smarty_Admin();
        $view = "views/v_hoa.tpl";
        $title = "Danh sách bánh";
        $smarty->assign("title", $title);
        $smarty->assign("doc_hoa", $doc_hoa);
        $smarty->assign("doc_loai_banh", $doc_loai_banh);
        $smarty->assign("view", $view);
        $smarty->display("layout.tpl");
    }
    public function ThemBanh(){
      if (isset($_POST["btn_add"]))
      {
          $m_banh = new M_banh();
          $tenHoa = $_POST['ten_hoa'];
          $gia=str_replace(",","",$_POST['gia']);
          $gia_khuyen_mai=str_replace(",","", $_POST['GiaKhuyenMai']);
          $sl=$_POST['sl'];
          $thanhPhan = $_POST['thanh_phan'];
          $noiDung = $_POST['noi_dung'];
          $maLoai = $_POST['loai_hoa'];
          include("UploadFile.php");
          $hinh=UploadFile("",'hoa');
          include("URL.php");
          $tenHoa_URL=makeURL($tenHoa);
          $them = $m_banh->them_banh($tenHoa,$tenHoa_URL, $gia,$gia_khuyen_mai,$thanhPhan, $noiDung, $hinh, $maLoai,$sl);
          if ($them) {
              $_SESSION['thongBaoThanhCong']="Thêm sản phẩm thành công";
          }
      }
    }
    public function SuaBanh(){
      if (isset($_POST['btn_update'])) {
          $m_banh = new M_banh();
          $maHoa = $_POST['ma_hoa'];
          $tenHoa = $_POST['ten_hoa'];
          $tenHoa_URL = $_POST['ten_hoa_url'];
          $gia = $_POST['gia'];
          $sl=$_POST['sl'];
          $gia_km = $_POST['gia_khuyen_mai'];
          $thanhPhan = $_POST['thanh_phan'];
          $noiDung = $_POST['noi_dung'];
          $maLoai = $_POST['loai_hoa'];
          include("UploadFile.php");
          $hinh=UploadFile($m_banh->doc_banh_theo_ma($maHoa)->Hinh,'hoa');
          $update = $m_banh->update_banh($tenHoa,$tenHoa_URL, $gia,$gia_km, $thanhPhan, $noiDung, $hinh, $maLoai,$sl, $maHoa);
          if ($update) {
              $_SESSION['thongBaoThanhCong']="Cập nhật sản phẩm thành công";
          }
        }
    }

}
