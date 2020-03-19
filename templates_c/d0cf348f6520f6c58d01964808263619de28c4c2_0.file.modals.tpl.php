<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-19 15:58:05
  from 'F:\htdocs\core-php-boilerplate\templates\components\modals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e73887d33a013_18667890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0cf348f6520f6c58d01964808263619de28c4c2' => 
    array (
      0 => 'F:\\htdocs\\core-php-boilerplate\\templates\\components\\modals.tpl',
      1 => 1584619628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e73887d33a013_18667890 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="guestSearchRestrictionModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Please register and login to continue search.</p>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
	function isSearch(){
		let status = true;
		$.ajax({
	        url: "<?php echo BASE_URL;?>
/app/ajax/guestSearchRestriction.php",
	        cache: false,   
	        type: 'GET', 
	        async:false,
	        success: function(response){
	         	if(response == "open"){
	         		$('#guestSearchRestrictionModal').modal('show');
	         		status = false;
	         	}
	        },
	        error: function(error){
	          alert('Something went wrong !');
	          status = false;
	        }
	      });
		if (status){
			$('form#job_search_form').submit();
		}


	}
<?php echo '</script'; ?>
><?php }
}
