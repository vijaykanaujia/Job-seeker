<div id="guestSearchRestrictionModal" class="modal" tabindex="-1" role="dialog">
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
<script>
	function isSearch(){
		let status = true;
		$.ajax({
	        url: "{BASE_URL}/app/ajax/guestSearchRestriction.php",
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
</script>