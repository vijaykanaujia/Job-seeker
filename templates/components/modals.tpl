<div id="guestSearchRestrictionModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <br><br><br>
      <div class="modal-body p-5 text-center">
        <p class="fa-2x">Please <a href="{BASE_URL}/app/registration.php#registration">register</a> or <a href="{BASE_URL}/app/login.php#login">login</a> to continue search.</p>
      </div>
      <br><br><br>
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