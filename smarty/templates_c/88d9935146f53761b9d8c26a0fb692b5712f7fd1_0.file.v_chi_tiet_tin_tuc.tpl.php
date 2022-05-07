<?php
/* Smarty version 3.1.30, created on 2022-05-07 12:52:40
  from "D:\Programs\xampp\htdocs\banhngotanan\views\v_chi_tiet_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62764f78b36131_92774816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88d9935146f53761b9d8c26a0fb692b5712f7fd1' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\v_chi_tiet_tin_tuc.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/body/quang_cao.tpl' => 1,
  ),
),false)) {
function content_62764f78b36131_92774816 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                    </li>
                <li class="category22">
                    <a href="" title="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenLoaiTin;?>
"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenLoaiTin;?>
</a>
                </li>
                <li class="category22">
                    <strong><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</strong>
                </li>
            </ul>
        </div>
    </div>
</div>

  <div class="container">
    <div class="main">
          <div class="row">
              <div class="container">
                
                <div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left hidden-xs">
                    <div class="anav-container">
                        <div class="block block-anav">
                            <ul class="magictabs">
                                <li class="item active loaded single">
                                    <span class="title">Tin tức liên quan</span>
                                </li>
                            </ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_cung_loai']->value, 'tt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tt']->value) {
?>
                            <div class="thumbnail">
                                <a href="<?php echo makeURL($_smarty_tpl->tpl_vars['tt']->value->TenTT);?>
-<?php echo $_smarty_tpl->tpl_vars['tt']->value->MaTT;?>
.html" target="_blank">
                                <img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tt']->value->Hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tt']->value->TenTT;?>
" style="width:100%">
                                <div class="caption">
                                    <p><?php echo $_smarty_tpl->tpl_vars['tt']->value->TenTT;?>
</p>
                                </div>
                                </a>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    </div>
                </div>
                
                
                <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right chi_tiet_tt">
                    <h1 class="ten_tt"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->TenTT;?>
</h1>
                    <h5 class="ngay_dang"><b>Ngày đăng:</b> <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ThoiGian;?>
</h5>
                    <p><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->NoiDung;?>
</p>
                </div>
                
          </div>
    </div>
      <?php $_smarty_tpl->_subTemplateRender("file:layouts/body/quang_cao.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
<?php }
}
