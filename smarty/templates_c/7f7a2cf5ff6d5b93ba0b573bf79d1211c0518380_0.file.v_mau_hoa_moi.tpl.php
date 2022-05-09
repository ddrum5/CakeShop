<?php
/* Smarty version 3.1.30, created on 2022-05-08 08:29:34
  from "D:\Programs\xampp\htdocs\banhngotanan\views\trang_chu\v_mau_hoa_moi.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6277634e452232_68646277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7a2cf5ff6d5b93ba0b573bf79d1211c0518380' => 
    array (
      0 => 'D:\\Programs\\xampp\\htdocs\\banhngotanan\\views\\trang_chu\\v_mau_hoa_moi.tpl',
      1 => 1651986273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6277634e452232_68646277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu1" class="tab-pane fade in active">
    <div class="category-products">
        <ul class="products-grid row aos-all" id="aos-demo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa_moi']->value, 'hoa_moi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_moi']->value) {
?>
                <li class="item hoa " data-aos="fade-up-right">
                    <div class="category-products-grid">
                        <div class="images-container">
                            <div class="product-hover">
                                <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html" style="max" title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
"
                                    class="product-image">
                                    <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->Hinh;?>
"
                                        alt="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
">
                                </a>
                            </div>
                            <h2 class="product-name">
                                <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
.html"
                                    title="<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->TenHoa;?>
</a>
                            </h2>
                            <div class="actions-no hover-box">
                                <div class="actions">
                                    <div class="price-box">
                                        <a class="minimal-price-link">
                                            <span class="mua_online">Mua online:</span>
                                            <span class="price"
                                                id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa_moi']->value->GiaKhuyenMai;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>

                                                ₫</span>
                                        </a>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['hoa_moi']->value->SoLuongSP > 0) {?>
                                    <div class="notify-dat-hang">
                                        <button onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['hoa_moi']->value->MaHoa;?>
,1)">Thêm vào giỏ hàng</button>
                                    </div>
                                <?php } else { ?>
                                    <div class="notify">
                                        <button>Đã hết hàng</button>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <div class="cta">
            <button onclick="location.href='danh-sach-banh'">Xem thêm bánh <i class="fa fa-angle-double-right"
                    aria-hidden="true"></i></button>
        </div>
    </div>
</div><?php }
}
