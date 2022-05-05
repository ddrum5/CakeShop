<?php
/* Smarty version 3.1.30, created on 2022-05-04 16:36:20
  from "C:\xampp\htdocs\shop_hoa\views\chi_tiet_hoa\v_thanh_danh_muc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62728f6463a083_03509617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3a3b3621b551287679db6befff1dad74fd67c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\views\\chi_tiet_hoa\\v_thanh_danh_muc.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62728f6463a083_03509617 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                    </li>
                <li class="category4">
                    <a href="" title=""><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenLoai;?>
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
