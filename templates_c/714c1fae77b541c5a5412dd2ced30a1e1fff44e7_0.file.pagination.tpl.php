<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-13 11:55:05
  from 'E:\htdocs\core-php-boilerplate\templates\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6b6689595171_09927628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714c1fae77b541c5a5412dd2ced30a1e1fff44e7' => 
    array (
      0 => 'E:\\htdocs\\core-php-boilerplate\\templates\\pagination.tpl',
      1 => 1584086902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6b6689595171_09927628 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['search_result']->value['jobs']['pages'] != 0)) {
$_smarty_tpl->_assignInScope('paging_info', $_smarty_tpl->tpl_vars['search_result']->value['jobs']['pagination']);
$_smarty_tpl->_assignInScope('max', 8);?>
<nav aria-label="Page navigation example">
  <ul class="pagination pull-right">
  	<?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] > 1)) {?>
    	<li class="page-item"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['paging_info']->value['curr_page']-1;?>
">Previous</a></li>
    <?php }?>
     
    <?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] < $_smarty_tpl->tpl_vars['max']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('sp', 1);?>
    <?php } elseif (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] >= ($_smarty_tpl->tpl_vars['paging_info']->value['pages']-floor($_smarty_tpl->tpl_vars['max']->value/2)))) {?>
        <?php $_smarty_tpl->_assignInScope('sp', ($_smarty_tpl->tpl_vars['paging_info']->value['pages']-$_smarty_tpl->tpl_vars['max']->value+1));?>
    <?php } elseif (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] >= $_smarty_tpl->tpl_vars['max']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('sp', ($_smarty_tpl->tpl_vars['paging_info']->value['curr_page']-floor($_smarty_tpl->tpl_vars['max']->value/2)));?>
    <?php }?>
   
    <?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] >= $_smarty_tpl->tpl_vars['max']->value)) {?>
    	<li class="page-item"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=1">1</a></li>
    	<li class="page-item">..</li>
    <?php }?>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? ($_smarty_tpl->tpl_vars['sp']->value+$_smarty_tpl->tpl_vars['max']->value-1)+1 - ($_smarty_tpl->tpl_vars['sp']->value) : $_smarty_tpl->tpl_vars['sp']->value-(($_smarty_tpl->tpl_vars['sp']->value+$_smarty_tpl->tpl_vars['max']->value-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['sp']->value, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
 		<?php if (($_smarty_tpl->tpl_vars['i']->value > $_smarty_tpl->tpl_vars['paging_info']->value['pages'])) {?>
 			{ continue }
 		<?php }?>
 		<?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] == $_smarty_tpl->tpl_vars['i']->value)) {?>
    		<li class="page-item <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] == $_prefixVariable1 ? 'active' : '';?>
"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    	<?php } else { ?>
    		<li class="page-item <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] == $_prefixVariable2 ? 'active' : '';?>
"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    	<?php }?>
	<?php }
}
?>

    <?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] < ($_smarty_tpl->tpl_vars['paging_info']->value['pages']-floor($_smarty_tpl->tpl_vars['max']->value/2)))) {?>
    	<li class="page-item">..</li>
		<li class="page-item"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['paging_info']->value['pages'];?>
"><?php echo $_smarty_tpl->tpl_vars['paging_info']->value['pages'];?>
</a></li>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['paging_info']->value['curr_page'] < $_smarty_tpl->tpl_vars['paging_info']->value['pages'])) {?>
		<li class="page-item"><a class="page-link" href="?keyword=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
&page=<?php echo ($_smarty_tpl->tpl_vars['paging_info']->value['curr_page']+1);?>
">Next</a></li>
    <?php }?>
  </ul>
</nav>
<?php }
}
}
