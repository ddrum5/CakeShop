<?php
/* Smarty version 3.1.30, created on 2022-05-10 14:01:01
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_check_hoa_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627a53fd46bb95_43306599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba0a14ed023bfdf77ac15bf8708144a6c86297b' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_check_hoa_don.tpl',
      1 => 1652183908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a53fd46bb95_43306599 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="bsm_contact">
        <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        </div>
    </div>
    <div class="container">

        
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form method="POST">
                    <div id="imaginary_container">
                        <div class="input-group stylish-input-group">
                            <input type="text" name="search" class="form-control"
                                placeholder="Nhập số điện thoại để tìm hóa đơn">
                            <span class="input-group-addon">
                                <button type="submit" name="btn_search">
                                    <span class="fa fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="w3-responsive">
            <table class="w3-table-all">
                <thead>
                    <tr class="w3-blue">
                        <th class="w3-text-white">Mã ĐH</th>

                        <th class="w3-text-white">Họ và tên</th>
                        <th class="w3-text-white">Sản phẩm đặt</th>
                        <th class="w3-text-white">Số lượng</th>
                        <th class="w3-text-white">Tổng tiền</th>
                        <th class="w3-text-white">Trạng thái</th>
                        <th class="w3-text-white">Thời gian</th>
                    </tr>
                </thead>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hoa_dons']->value, 'hoa_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->value) {
?>
                    <tr>
                        <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_hoa_don;?>
</td>
                        <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
                        <td><a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->MaHoa;?>
.html"
                                class="w3-text-black w3-hover-text-orange w3-large hidden_text"
                                target="_blank"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->TenHoa;?>
</a></td>
                        <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->so_luong;?>
</td>
                        <td class="w3-text-black w3-large"><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tong_thanh_tien);?>
 đ</td>

                        <?php if ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 0) {?>
                            <td class="w3-text-black w3-large">Chưa xác nhận</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 1) {?>
                            <td class="w3-text-black w3-large">Đã xác nhận</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai == 2) {?>
                            <td class="w3-text-black w3-large">Đang giao hàng</td>
                        <?php } else { ?>
                            <td class="w3-text-black w3-large">Đã giao hàng</td>
                        <?php }?>
                        <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat;?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
        </div>
        

        <?php if (isset($_SESSION['status'])) {?>
            <?php echo '<script'; ?>
>
                swal("<?php echo $_SESSION['status'];?>
");
            <?php echo '</script'; ?>
>
<?php }
}
}
