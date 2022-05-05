<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:22:56
  from "C:\xampp\htdocs\Projects\Project_shop_hoa\smarty\templates\layouts\body\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b3df0c148d5_98065336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0fafe5d1374a7cd24511c39bc991c5ffb9fec2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\Project_shop_hoa\\smarty\\templates\\layouts\\body\\contact.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626b3df0c148d5_98065336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="send-email">
    <div class="container">
        <div class="col-sm-9">
            <div class="col-sm-4 text-left">
                <span>Nhận tin khuyến mãi</span>
            </div>
            <div class="input-group col-sm-4">
                <input type="text" class="form-control" placeholder="Nhập email...">
                <span class="input-group-btn nopadd">
                    <button class="btn btn-default" type="button"><span class="fa fa-send-o"></span></button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>
</section>
    <div id="bsm_contact_and_map"><?php echo $_smarty_tpl->tpl_vars['google_map']->value;?>
</div>
<?php }
}
