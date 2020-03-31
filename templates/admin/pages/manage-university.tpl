<div class="row">
	<div class="col-sm-12">
      <div class="card">
         <div class="card-header">List of universities</div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <td colspan="7" class="border-top-0">
                           <div class="row">
                              <div class="col-sm-12">
                                 <p class="mb-0 potentail-info"><i class="fa fa-building fa-2x"></i> &nbsp;&nbsp; we have <span class="text-info fa-2x">{(isset($pagination['total'])) ? $pagination['total'] : 0}</span> Universities</p>
                              </div>
                           </div>
                        </td>
                     </tr>
                     <tr>                   
                        <th class="border-bottom-0">NAME</th>
                        <th class="border-bottom-0">EMAIL</th>
                        <th class="border-bottom-0">CREATED</th>
                        <th class="border-bottom-0">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                  	{if (count($universities_list) > 0)}
	                  	{foreach from=$universities_list item=university}
		                     <tr>
		                        <td>{$university->name}</td>
		                        <td>{$university->email}</td>
		                        <td>{$university->created_at}</td>
		                        <td><a action="javascript:void(0)" type="button" class="delete-university" data-id="{$university->id}" class="btn btn-sm"><i class="fa fa-trash"></i></a></td>
		                     </tr>
	                     {/foreach}
                       <tr>
                         <td colspan="4">
                           <nav aria-label="Page navigation example">
                              <ul class="pagination pull-right">
                                {$total_pages = ceil($pagination['total'] / $pagination['limit'])}
                                {for $i=1 to $total_pages}
                                  <li class="page-item {($pagination['page'] == {$i}) ? 'active' : ''}"><a class="page-link" href="?page={$i}">{$i}</a></li>
                                {/for}
                              </ul>
                            </nav>
                         </td>
                       </tr>
                     {else}
                     <tr>
                        <td colspan="4" class="text-center text-danger">No data found</td>
                     </tr>
                     {/if}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   var base_url = '{BASE_URL}';
   {literal}
   $(function(){
      $('.delete-university').click(function(){
         var id = $(this).data('id');
         $.ajax({
           url: base_url + "/app/ajax/delete-university.php",
           cache: false,   
           type: 'GET', 
           data: {id: id},
           success: function(response){
               if(response == 'success'){
                  alert('deletion successfull');
                  location.reload();
               }else{
                  alert('Deletion failed');
               }
           },
           error: function(error){
             alert('Something went wrong');
           }
         });
      });
   });
   {/literal}
</script>