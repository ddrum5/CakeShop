<?php
/* Smarty version 3.1.30, created on 2022-05-10 13:08:50
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_lich_su_mua_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627a47c29315c5_81536130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69e6b17c0b471bf7716c925d1627c6ea0faf86e' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_lich_su_mua_hang.tpl',
      1 => 1652180928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a47c29315c5_81536130 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div id="bsm_contact">
    <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    </div>
</div>
<?php if ((count($_smarty_tpl->tpl_vars['hoa_dons']->value) == 0)) {?>

    <h1 style="text-align: center;">Bạn chưa có đơn hàng nào</h1>
<?php } else { ?>
    <div class="container">
        <div class="row">
            
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
                        <td class="w3-text-black w3-large"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['hoa_don']->value->ngay_dat,'%H:%M %d-%m-%Y');?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
            
        </div>
    </div>
<?php }?>



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
