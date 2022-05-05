<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:27:38
  from "C:\xampp\htdocs\Projects\shop_hoa\admin\smarty\templates\layouts\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3f0a599b79_99157876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd202514b3d733a112c7b97f115fb9d3abba2dbff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\admin\\smarty\\templates\\layouts\\body.tpl',
      1 => 1651195237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/content/navbar_content.tpl' => 1,
    'file:layouts/content/footer_content.tpl' => 1,
    'file:layouts/content/logout_modal.tpl' => 1,
  ),
),false)) {
function content_626b3f0a599b79_99157876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <div id="fb-root"></div>
    <?php echo '<script'; ?>
>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1925421851050773';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
  <!-- Navigation-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001376474626b3f0a590520_23658293', "navbar_content");
?>

    <div class="content-wrapper ">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb print ">
          <li class="breadcrumb-item ">
            <a href=".">Trang quản lý</a>
          </li>
          <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ol>
        <div class="container-fluid">
            <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php }?>
        </div>
    </div>
  <!-- /.container-fluid-->
  <!-- /.content-wrapper-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690847403626b3f0a598706_48157279', "footer_content");
?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549516389626b3f0a599749_87866718', "logout_modal");
}
/* {block "navbar_content"} */
class Block_2001376474626b3f0a590520_23658293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/navbar_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "navbar_content"} */
/* {block "footer_content"} */
class Block_1690847403626b3f0a598706_48157279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/footer_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer_content"} */
/* {block "logout_modal"} */
class Block_1549516389626b3f0a599749_87866718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:layouts/content/logout_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "logout_modal"} */
}
