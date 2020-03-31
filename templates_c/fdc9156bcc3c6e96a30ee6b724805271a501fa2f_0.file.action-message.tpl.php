<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 13:47:31
  from 'F:\htdocs\core-php-boilerplate\templates\components\action-message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b52e33c8333_73096558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc9156bcc3c6e96a30ee6b724805271a501fa2f' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\action-message.tpl',
      1 => 1585140445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b52e33c8333_73096558 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['success']->value)) {?>
<div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 99;">
  <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['danger']->value)) {?>
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 99;">
  <?php echo $_smarty_tpl->tpl_vars['danger']->value;?>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php }?>

<!-- ajax request taoster top right -->
<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" style="position: fixed;
    top: 0;
    z-index: 99;
    right: 0;" data-delay="500">
  <div class="toast-header">
    <button type="button" class="ml-2 mb-1 close pull-right" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed;
    bottom: 0;
    width: 80%;
    z-index: 99;">
  dfgfdgfg
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><?php }
}
