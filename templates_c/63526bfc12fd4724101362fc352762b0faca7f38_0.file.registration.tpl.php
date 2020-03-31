<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-25 10:31:24
  from 'F:\htdocs\core-php-boilerplate\templates\pages\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e7b24eca130e1_89830296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63526bfc12fd4724101362fc352762b0faca7f38' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\pages\\registration.tpl',
      1 => 1585128560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b24eca130e1_89830296 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous" />
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.full.min.js" integrity="sha256-vucLmrjdfi9YwjGY/3CQ7HnccFSS/XRS1M/3k/FDXJw=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<style type="text/css">
  
    .select2-container .select2-selection--single{height: 38px !important;}
  
</style>

<form method="post" action="<?php echo BASE_URL;?>
/app/registration.php">
  <div class="form-group">
      <label for="university_id">University<span class="text-danger pull-right">*</span></label>
      <select class="form-control" id="university_id"  name="university_id">
        <?php if (isset($_smarty_tpl->tpl_vars['university_id']->value)) {?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['university_id']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['university_id']->value;?>
</option>
        <?php }?>
      </select>
      <?php if (isset($_smarty_tpl->tpl_vars['university_id_error']->value)) {?><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['university_id_error']->value;?>
</span><?php }?>
  </div>
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
</form>

<?php echo '<script'; ?>
>
  var uni_id = "<?php echo isset($_smarty_tpl->tpl_vars['university_id']->value) ? $_smarty_tpl->tpl_vars['university_id']->value : '';?>
";
  $(function(){
      $('#university_id').select2({
          placeholder: 'Please select Universit',
          allowClear: true,
          ajax: {
              url: '<?php echo BASE_URL;?>
/app/ajax/search-university.php',
              processResults: function (data) {
                  return {
                      results: JSON.parse(data)
                  };
              }
          }
      });
      $('#university_id').change(function(){
        localStorage.setItem('university_email', $(this).find(':selected').text())
      });
      if(uni_id){
        $('#university_id').find(':selected').text(localStorage.getItem('university_email'));
        $('#university_id').select2().trigger("change");
      }
  });
<?php echo '</script'; ?>
><?php }
}
