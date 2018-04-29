<?php /* Smarty version Smarty-3.1.6, created on 2018-03-31 09:18:20
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78825abf363c8d1726-88956686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1522412272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78825abf363c8d1726-88956686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'teplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5abf363cce644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abf363cce644')) {function content_5abf363cce644($_smarty_tpl) {?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/main.css" type="text/css" />
    </head>
    <body>
        <div id="header">
            <h1>My Shop - интернет магазин.</h1>
        </div>
        
        
<?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       
        
        <div id="centerColumn">
            
            centerColumn<?php }} ?>