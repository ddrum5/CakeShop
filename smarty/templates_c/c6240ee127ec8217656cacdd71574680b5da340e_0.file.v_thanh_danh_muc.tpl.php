<?php
/* Smarty version 3.1.30, created on 2022-05-08 08:32:27
  from "D:\Programs\xampp\htdocs\banhngotanan\views\chi_tiet_hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_627763fb012cb8_45701499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6240ee127ec8217656cacdd71574680b5da340e' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\chi_tiet_hoa\\v_thanh_danh_muc.tpl',
      1 => 1651990131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627763fb012cb8_45701499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                    </li>
                <li class="category4">
                    <a href="danh-sach-banh" title=""><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
</a>
                    </li>
                <li class="category22">
                    <strong><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</strong>
                </li>
                <li>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php }
}
