<?php
/* Smarty version 3.1.30, created on 2022-05-04 17:39:23
  from "C:\xampp\htdocs\shop_hoa\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62729e2b43f4c9_27274771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc292db215046b19c46fb8546404cae8ac392765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop_hoa\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_62729e2b43f4c9_27274771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160742544262729e2b43e055_01000425', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33147383862729e2b43f0a1_56431353', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_160742544262729e2b43e055_01000425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_33147383862729e2b43f0a1_56431353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
