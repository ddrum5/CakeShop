<?php
/* Smarty version 3.1.30, created on 2022-05-05 10:17:36
  from "C:\xampp\htdocs\shop_hoa\views\hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627388205d6296_62488651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '835bb43f4dc24359bed8aba372a82507760a8b30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\hoa\\v_thanh_danh_muc.tpl',
      1 => 1651738653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627388205d6296_62488651 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                </li>
                <li class="category4">
                    <a href="danh-sach-hoa" title="">Danh sách bánh</a>
                </li>
                <?php if (isset($_GET['loai_hoa'])) {?>
                <li class="category4">
                    <a class="ten_loai_hoa" title="<?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ten_loai']->value;?>
</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<?php }
}
