<?php
/* Smarty version 3.1.33, created on 2019-02-08 15:19:11
  from '/var/www/html/alltube/templates/inc/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5de43f3c1e69_06508108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88483bfc994bca7b74b36025a0b675ef8388f9a' => 
    array (
      0 => '/var/www/html/alltube/templates/inc/header.tpl',
      1 => 1536629300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5de43f3c1e69_06508108 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <?php if (isset($_smarty_tpl->tpl_vars['supportedLocales']->value) && count($_smarty_tpl->tpl_vars['supportedLocales']->value) > 1) {?>
        <div class="locales small-font">
            <button class="localesBtn small-font" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Switch language<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>">
                <?php if (isset($_smarty_tpl->tpl_vars['locale']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['locale']->value->getCountry()->getEmoji();?>

                <?php } else { ?>
                    Set language
                <?php }?>
            </button>
            <ul class="supportedLocales">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportedLocales']->value, 'supportedLocale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['supportedLocale']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['supportedLocale']->value != $_smarty_tpl->tpl_vars['locale']->value) {?>
                        <li><a hreflang="<?php echo $_smarty_tpl->tpl_vars['supportedLocale']->value->getBcp47();?>
" lang="<?php echo $_smarty_tpl->tpl_vars['supportedLocale']->value->getBcp47();?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0], array( array('name'=>'locale','data'=>array('locale'=>$_smarty_tpl->tpl_vars['supportedLocale']->value->getIso15897())),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['supportedLocale']->value->getCountry()->getEmoji();?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['supportedLocale']->value->getFullName());?>
</a></li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <div class="social">
        <a class="twitter" rel="noopener" href="http://twitter.com/home?status=<?php echo urlencode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) ));?>
" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Share on Twitter<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>" target="_blank">
            <div class="twittermask"></div></a>
        <a class="facebook" rel="noopener" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) ));?>
" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Share on Facebook<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>" target="_blank"><div class="facebookmask"></div></a>
    </div>
</header>
<div class="wrapper">
<?php }
}
