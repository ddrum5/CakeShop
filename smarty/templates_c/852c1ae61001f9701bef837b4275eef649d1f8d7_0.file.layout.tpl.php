<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:55:24
  from "C:\xampp\htdocs\Projects\shop_hoa\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b458cb70b09_65743810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852c1ae61001f9701bef837b4275eef649d1f8d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_626b458cb70b09_65743810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1880322899626b458cb6f946_76819772', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138306261626b458cb70634_23327723', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_1880322899626b458cb6f946_76819772 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_1138306261626b458cb70634_23327723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
