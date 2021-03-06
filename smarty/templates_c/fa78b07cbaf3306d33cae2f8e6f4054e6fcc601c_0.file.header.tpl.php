<?php
/* Smarty version 3.1.30, created on 2022-05-21 17:56:38
  from "D:\Programs\xampp\htdocs\banhngotanan\smarty\templates\layouts\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62890bb603aee2_67452563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa78b07cbaf3306d33cae2f8e6f4054e6fcc601c' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\smarty\\templates\\layouts\\header.tpl',
      1 => 1653148597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62890bb603aee2_67452563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header class="row">
    

    <div id="bsm_header_top_bar">
        <div class="container">
            <div class="col-md-9 col-sm-8">
                <ul>
                    <li>
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
">Gọi ngay: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>
</a>
                    </li>
                    <li>
                        <div class="khung-tim-kiem-pc">
                            <form class="form-inline" method="post" autocomplete="off">
                                <input name="search" id="search" class="form-control mr-sm-2" type="text"
                                    placeholder="Tìm kiếm bánh">
                            </form>
                            <div class="hien-thi-tim-kiem">
                                <div id="result-tenHoa"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-8 canh_trai">
                <ul>
                    <?php if (isset($_SESSION['hoTen'])) {?>
                        <li>
                            
                            <div class="dropdown_text">
                                

                                <a  class="dropbtn"> <b> <?php echo $_SESSION['hoTen'];?>
 </b> </a>
                                <div class="dropdown-content">
                                    <a href="thong_tin_ca_nhan.php">Thông tin cá nhân</a>
                                    <a href="lich_su_mua_hang.php">Lịch sử mua hàng</a>
                                </div>
                            </div>

                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#exampleModal" href="">Đăng Xuất</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="dang-nhap.html">Đăng Nhập</a>
                        </li>
                        <li>
                            <a href="dang-ki.html">Đăng Kí</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <div id="bsm_header_navigation" class="container">
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li><a href=".">Trang chủ</a></li>
                    <li><a href="gioi_thieu.php">Giới thiệu</a></li>
                    <li><a href="danh-sach-banh">Danh sách bánh</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-5">
            <a href=".">
                <img src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="" style="width: 165px;height: 130px;">
            </a>
        </div>
        <div class="col-md-5">
            <nav>
                <ul class="bsm_header_nav_left">
                    <li><a href="tin-tuc.html">Tin Tức</a></li>
                    <li><a href="check_hoa_don.php">Tìm kiếm đơn hàng</a></li>
                    <li><a href="lien-he.html">Liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><?php }
}
