{assign "paging_info" $search_result['jobs']['pagination']}
{assign "max" 8}
<nav aria-label="Page navigation example">
  <ul class="pagination pull-right">
  	{if ($paging_info['curr_page'] > 1)}
    	<li class="page-item"><a class="page-link" onclick="getJobByPagination('{$paging_info['curr_page'] - 1}')" href="javascript:void(0)">Previous</a></li>
    {/if}
     
    {if ($paging_info['curr_page'] < $max)}
        {$sp = 1}
    {elseif ($paging_info['curr_page'] >= ($paging_info['pages'] - floor($max / 2)) )}
        {$sp = ($paging_info['pages'] - $max + 1)}
    {elseif ($paging_info['curr_page'] >= $max)}
        {$sp = ($paging_info['curr_page']  - floor($max/2))}
    {/if}
   
    {if ($paging_info['curr_page'] >= $max)}
    	<li class="page-item"><a class="page-link" onclick="getJobByPagination(1)" href="javascript:void(0)">1</a></li>
    	<li class="page-item">..</li>
    {/if}
	{for $i = $sp to ($sp + $max -1)}
 		{if ($i > $paging_info['pages'])}
 			{continue}
 		{/if}
 		{if ($paging_info['curr_page'] == $i)}
    		<li class="page-item {($paging_info['curr_page'] == {$i}) ? 'active' : ''}"><a class="page-link"  onclick="getJobByPagination({$i})" href="javascript:void(0)">{$i}</a></li>
    	{else}
    		<li class="page-item {($paging_info['curr_page'] == {$i}) ? 'active' : ''}"><a class="page-link" onclick="getJobByPagination({$i})" href="javascript:void(0)">{$i}</a></li>
    	{/if}
	{/for }

    {if ($paging_info['curr_page'] < ($paging_info['pages'] - floor($max / 2)))}
    	<li class="page-item">..</li>
		<li class="page-item"><a class="page-link" onclick="getJobByPagination({$paging_info['pages']})" href="javascript:void(0)">{$paging_info['pages']}</a></li>
    {/if}

    {if ($paging_info['curr_page'] < $paging_info['pages'])}
		<li class="page-item"><a class="page-link" onclick="getJobByPagination({$paging_info['pages']+1})" href="javascript:void(0)">Next</a></li>
    {/if}
  </ul>
</nav>