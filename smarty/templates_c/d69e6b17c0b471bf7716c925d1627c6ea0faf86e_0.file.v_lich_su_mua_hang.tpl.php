<?php
/* Smarty version 3.1.30, created on 2022-05-09 16:59:47
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_lich_su_mua_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62792c63e10b81_90262575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69e6b17c0b471bf7716c925d1627c6ea0faf86e' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_lich_su_mua_hang.tpl',
      1 => 1652108386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62792c63e10b81_90262575 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div " class=" container">
    <div class="row">
        <div class="col-lg-8">
            <table class="w3-table-all">
                <thead>
                    <tr class="w3-green">
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
                    <td class="w3-text-black w3-large"><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->trang_thai;?>
</td>
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
</div>
<?php }?>



<?php if (isset($_SESSION['status'])) {
echo '<script'; ?>
>
    swal("<?php echo $_SESSION['status'];?>
");
    <?php echo '</script'; ?>
>
<?php }
}
}
