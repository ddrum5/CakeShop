<?php
/* Smarty version 3.1.30, created on 2022-05-08 08:29:34
  from "D:\Programs\xampp\htdocs\banhngotanan\smarty\templates\layouts\body\contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6277634e8d9767_89203090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0566a7a392e5a786da9aa410d37a69e6a45fa67c' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\smarty\\templates\\layouts\\body\\contact.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6277634e8d9767_89203090 (Smarty_Internal_Template $_smarty_tpl) {
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
