<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-20 06:44:14
  from 'F:\htdocs\core-php-boilerplate\templates\components\search-head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e74582eee87c2_70702039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a66f1bf9d0d6165af58546859ea649ad4da499' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\search-head.tpl',
      1 => 1584683048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e74582eee87c2_70702039 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Masthead -->
<header class="masthead text-white text-center">
  <div class="container">
    <div class="row">
      <div class="col-xl-11 mx-auto">
        <h1 class="mb-5">Let us help you find an National or International Internship</h1>
      </div>
      <div class="col-md-12 col-lg-10 col-xl-9 mx-auto">
        <form target="_blank" class="header-form" action="<?php echo BASE_URL;?>
/app/search.php#search" method="post" accept-charset="UTF-8" id="job_search_form">
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0 flexme">
              <input type="text" name="keyword" value="<?php echo isset($_smarty_tpl->tpl_vars['keyword']->value) ? $_smarty_tpl->tpl_vars['keyword']->value : '';?>
" class="form-control form-control-lg" placeholder="Search for a job description......">
      <input type="text" name="location" value="<?php echo isset($_smarty_tpl->tpl_vars['location']->value) ? $_smarty_tpl->tpl_vars['location']->value : '';?>
" class="form-control form-control-lg" placeholder="Country...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</header><?php }
}
