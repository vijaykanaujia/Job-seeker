<h2 class="mb-5 text-center">Search results</h3>
<div class="row">
	{if $search_result && ($search_result['jobs']['pages'] != 0)}
		{foreach from=$search_result['jobs']['result'] item=jobs}
			<div class="col-sm-12">
				<div class="card mb-2">
					<div class="job-information card-body">
						<p class="text-left job-title"><a href="{($jobs['url_is_active']) ? $jobs['url'] : 'javascript:showModal()'}">{$jobs['title']}</a></p>
						<p class="text-left job-company">
							<i class="fa fa-building"></i>  {($jobs['company']) ? $jobs['company'] : '..'}
						</p>
						<p class="text-left job-location"><i class="fa fa-map-marker"></i> {$jobs['location']}</p>
						<p class="text-left job-description">{$jobs['description']}</p>
						<p class="text-left job-date">{$jobs['date']}</p>
					</div>
				</div>
			</div>
		{/foreach}
		<div class="col-sm-12 text-right">
			{if $search_result['jobs']['show_pagination']}
				{include file = '../components/pagination.tpl'}
			{else}
				<button type="button" class="btn btn-sm btn-default" onclick="showModal()">More...</button>
				<script type="text/javascript">
					setTimeout(function(){
						showModal();
					},10000);

					function showModal(){
						if(! ($("element").data('bs.modal') || {})._isShown){
							$('#guestSearchRestrictionModal').modal({
						  		show: true
							});
						}
					}
				</script>					
			{/if}
		</div>
	{else}
		<div class="col-sm-12">
			<h4 class="text-center text-warning">No data found</h4>
		</div>
	{/if}
</div>