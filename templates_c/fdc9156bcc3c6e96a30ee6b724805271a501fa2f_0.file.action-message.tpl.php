<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-19 15:58:05
  from 'F:\htdocs\core-php-boilerplate\templates\components\action-message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e73887d0dc809_32623850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc9156bcc3c6e96a30ee6b724805271a501fa2f' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\action-message.tpl',
      1 => 1584507218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e73887d0dc809_32623850 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['danger']->value)) {?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $_smarty_tpl->tpl_vars['danger']->value;?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }
}
}
