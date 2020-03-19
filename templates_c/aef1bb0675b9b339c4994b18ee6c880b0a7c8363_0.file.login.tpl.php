<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-19 16:08:13
  from 'F:\htdocs\core-php-boilerplate\templates\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e738adda39024_41814715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef1bb0675b9b339c4994b18ee6c880b0a7c8363' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\pages\\login.tpl',
      1 => 1584507218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e738adda39024_41814715 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo BASE_URL;?>
/app/login.php">
  <div class="form-group">
    <label for="email">Email <span class="text-danger pull-right">*</span></label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_smarty_tpl->tpl_vars['email']->value) ? $_smarty_tpl->tpl_vars['email']->value : '';?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['email_error']->value)) {?><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</span><?php }?>
  </div>
  <div class="form-group">
    <label for="password">Password <span class="text-danger pull-right">*</span></label>
    <input type="password" class="form-control" id="password" name="password">
    <?php if (isset($_smarty_tpl->tpl_vars['password_error']->value)) {?><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['password_error']->value;?>
</span><?php }?>
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="Login">
</form><?php }
}
