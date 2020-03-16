<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-15 11:07:34
  from 'F:\htdocs\core-php-boilerplate\templates\pages\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6dfe66bf8c54_03050633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63526bfc12fd4724101362fc352762b0faca7f38' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\pages\\registration.tpl',
      1 => 1584266849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6dfe66bf8c54_03050633 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="<?php echo BASE_URL;?>
/app/registration.php">
  <div class="form-group">
    <label for="first_name">First name <span class="text-danger pull-right">*</span></label>
    <input type="text" class="form-control" id="first_name"  name="first_name" value="<?php echo isset($_smarty_tpl->tpl_vars['first_name']->value) ? $_smarty_tpl->tpl_vars['first_name']->value : '';?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['first_name_error']->value)) {?><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['first_name_error']->value;?>
</span><?php }?>
  </div>
  <div class="form-group">
    <label for="last_name">Last name</label>
    <input type="text" class="form-control" id="last_name"  name="last_name" value="<?php echo isset($_smarty_tpl->tpl_vars['last_name']->value) ? $_smarty_tpl->tpl_vars['last_name']->value : '';?>
">
  </div>
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
  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form><?php }
}
