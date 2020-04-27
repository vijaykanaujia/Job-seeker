<h2 class="mb-0">

	{if $keyword && $location}
		{$keyword} jobs in {$location}
	{elseif $keyword}
		{$keyword} jobs
	{elseif $location}
		jobs in {$location}
	{else}
		jobs in random locations
	{/if}
</h3>
{if $search_result && ($search_result['jobs']['pages'] != 0)}
<p class="mb-0 short-paging-info">{$search_result['jobs']['short_page_info']}</p>
{/if}
<div class="row">
	{if $search_result && ($search_result['jobs']['pages'] != 0)}
		{foreach from=$search_result['jobs']['result'] item=jobs}
			<div class="col-sm-12 pr-0 pl-0 parent-container">
				<div class="card jobs-list mb-0 border-0">
					<div class="job-information pr-3 pl-3 pt-2 pb-2 card-body">
						<h2 class="job-title"><a href="{($jobs['url_is_active']) ? $jobs['url'] : 'javascript:showModal()'}">{$jobs['title']} </a>
							{if {$jobs['job_status'] == 'new'}}<span class="status">New</span>{else}{/if}
						</h2>
						<div class="job-company">{($jobs['company']) ? $jobs['company'] : '..'}
						</div>
						<div class="job-location"><i class="fa fa-map-marker text-warning job-marker"></i> {$jobs['location']}</div>
						<div class="job-description">{$jobs['description']}</div>
						<div class="d-flex job-action-div">
							<span class="job-date">{$jobs['date']}</span>
							&nbsp;-&nbsp; <span class="save-job" data-url="{$jobs['url']}" onclick="getSaveJobHtml(this)">Save</span>
							&nbsp;-&nbsp; <span class="share-job" data-url="{$jobs['url']}" onclick="getShareToFriendHtml(this)">Send to friends</span>
						</div>
					</div>
				</div>
				<div class="extra-work-with-job"></div>
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