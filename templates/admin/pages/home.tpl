<div class="row">
   <div class="col-sm-4">
      	<div class="card text-center">
		  <div class="card-header">
		    Universities
		  </div>
		  <div class="card-body">
		    <h1>{(isset($universities)) ? $universities : 0}</h1>
		  </div>
		</div>
   </div>
   <div class="col-sm-4">
      	<div class="card text-center">
		  <div class="card-header">
		    Students
		  </div>
		  <div class="card-body">
		    <h1>{(isset($students)) ? $students - 1 : 0}</h1>
		  </div>
		</div>
   </div>
</div>