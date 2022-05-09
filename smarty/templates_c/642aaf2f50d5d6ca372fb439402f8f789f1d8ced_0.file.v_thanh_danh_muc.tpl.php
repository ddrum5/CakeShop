<?php
/* Smarty version 3.1.30, created on 2022-05-08 08:31:42
  from "D:\Programs\xampp\htdocs\banhngotanan\views\hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627763ceb1b770_71830241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642aaf2f50d5d6ca372fb439402f8f789f1d8ced' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\hoa\\v_thanh_danh_muc.tpl',
      1 => 1651986273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627763ceb1b770_71830241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                </li>
                <li class="category4">
                    <a href="danh-sach-banh" title="">Danh sách bánh</a>
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
