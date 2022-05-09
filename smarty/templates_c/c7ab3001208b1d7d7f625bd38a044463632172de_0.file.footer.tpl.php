<?php
/* Smarty version 3.1.30, created on 2022-05-09 13:31:53
  from "D:\Programs\xampp\htdocs\banhngotanan\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6278fba9096997_15686321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ab3001208b1d7d7f625bd38a044463632172de' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1652095912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/script.tpl' => 1,
  ),
),false)) {
function content_6278fba9096997_15686321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
  <div class="container">
    <div class="col-sm-5 text-left">
      © Bản quyền thuộc về <?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>

    </div>
    <div class="col-sm-7 text-right">
      <?php echo $_smarty_tpl->tpl_vars['address']->value;?>
 | Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 | Hotline: <?php echo $_smarty_tpl->tpl_vars['phone_number']->value;?>

    </div>
  </div>
</footer>
<?php $_smarty_tpl->_subTemplateRender("file:layouts/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!--Start of Tawk.to Script-->
<?php echo '<script'; ?>
 type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6275e6fdb0d10b6f3e7101ca/1g2e8sk3k';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
<?php echo '</script'; ?>
>





<?php if (isset($_SESSION['thongBao'])) {?>
  <?php echo '<script'; ?>
>
    swal("<?php echo $_SESSION['thongBao'];?>
");
  <?php echo '</script'; ?>
>
<?php }
if (isset($_SESSION['thongBaoThanhCong'])) {?>
  <?php echo '<script'; ?>
>
    swal({
      title: "Thành công!",
      text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
      icon: "success"
    }).then(function() {
      $.ajax({
        success: function() {
          window.location = "thong_tin_ca_nhan.php";
        }
      });
    });
  <?php echo '</script'; ?>
>
<?php }?>

</body>

</html><?php }
}
