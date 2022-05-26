<?php
/* Smarty version 3.1.30, created on 2022-05-21 17:05:35
  from "D:\Programs\xampp\htdocs\banhngotanan\smarty\templates\layouts\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6288ffbfe5c4d2_89792996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349ccf335aef1d2b0863ad1a576863596cc99e5e' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\smarty\\templates\\layouts\\head.tpl',
      1 => 1653145535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6288ffbfe5c4d2_89792996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/banhngotanan/" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- WEBSITE TITLE & DESCRIPTION -->
  <link rel="icon" href="public/images/<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon">
  <link rel="shortcut icon" href="public/images/<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
</title>
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description_website']->value;?>
" />
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords_website']->value;?>
">
  <meta itemprop="image" content="<?php echo $_smarty_tpl->tpl_vars['image_seo']->value;?>
" />
  <meta property="og:url" itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['url_seo']->value;?>
" />
  <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['title_website']->value;?>
" /> 
  <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description_website']->value;?>
" />
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['image_seo']->value;?>
" />
  <!-- STYLE CSS -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css/animate.css">
  <link rel="stylesheet" type="text/css" href="public/css/css-font.css" media="all" />
  <link rel="stylesheet" href="public/css/danh-muc-css.css">
  <link rel="stylesheet" href="public/css/style.css" />
  <link rel="stylesheet" href="public/css/cart.css">
  <link rel="stylesheet" href="public/css/aos.css">
  <link rel="stylesheet" href="public/css/jquery.range.css">
  <link rel="stylesheet" href="public/css/responsive.css">
  <!-- STYLE FONTS -->
  
  
  <!-- JS alert -->
  <?php echo '<script'; ?>
 src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"><?php echo '</script'; ?>
>

</head>

<body id="bsm_page_home" class="bsm_style_pink_violet bsm_page_home container-fluid">
  <div id="fb-root"></div>
  <?php echo '<script'; ?>
>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1925421851050773';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
<?php echo '</script'; ?>
><?php }
}
