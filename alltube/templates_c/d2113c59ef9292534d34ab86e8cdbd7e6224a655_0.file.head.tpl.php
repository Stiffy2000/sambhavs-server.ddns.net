<?php
/* Smarty version 3.1.33, created on 2019-02-08 15:19:11
  from '/var/www/html/alltube/templates/inc/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5de43f3b5a89_97474396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2113c59ef9292534d34ab86e8cdbd7e6224a655' => 
    array (
      0 => '/var/www/html/alltube/templates/inc/head.tpl',
      1 => 1547998432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5de43f3b5a89_97474396 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_locale(array('path'=>"../i18n",'domain'=>"Alltube"),$_smarty_tpl);?>

<!Doctype HTML>
<html <?php if (isset($_smarty_tpl->tpl_vars['locale']->value)) {?>lang="<?php echo $_smarty_tpl->tpl_vars['locale']->value->getBcp47();?>
"<?php }?>>
<head>
<meta charset="UTF-8" />
<meta name=viewport content="width=device-width, initial-scale=1">
<?php if (isset($_smarty_tpl->tpl_vars['description']->value)) {?>
    <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/dist/main.css" />
<title><?php echo $_smarty_tpl->tpl_vars['config']->value->appName;
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);
}?></title>
<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
" />
<link rel="icon" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/img/favicon.png" />
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->appName;
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);
}?>" />
<meta property="og:image" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/img/logo.png" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->appName;
if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);
}?>" />
<meta name="twitter:image" content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/img/logo.png" />
<meta name="twitter:creator" content="@Tael67" />
<meta name="theme-color" content="#4F4F4F">
<link rel="manifest" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0], array( array(),$_smarty_tpl ) );?>
/resources/manifest.json" />
</head>
<body class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
<?php }
}
