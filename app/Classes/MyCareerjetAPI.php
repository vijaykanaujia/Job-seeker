<?php

namespace App\Classes;
use App\Classes\Careerjet_API;
use App\Core\Input;
class MyCareerjetAPI{

	public static function getSearchResult($pagesize, $url_is_active, $show_pagination){

		$data = [];
		$keyword = Input::get('keyword') ? : '';
		$locaiton = Input::get('location') ? : '';
		$api = new Careerjet_API('en_GB') ;
		$page = Input::get('page') ? : 1; # Or from parameters.

		$result = $api->search(array(
		  'keywords' => $keyword,
		  'location' => $locaiton,
		  'page' => $page,
		  'pagesize' => $pagesize,
		  'contracttype' => 'i',
		  'affid' => '5704082add03b271cfad611e8cd277c7',
		));


		if( $result->type == 'JOBS' ){
			$data['jobs']['pages'] = $result->pages;
			if($result->pages > 0){
				$jobs = $result->jobs;
				foreach( $jobs as $job ) {
					$data['jobs']['result'][] = [
						'url' => $job->url,
						'title' => $job->title,
						'location' => $job->locations,
						'company' => $job->company,
						'salary' => $job->salary,
						'date' => $job->date,
						'description' => $job->description,
						'url_is_active' => $url_is_active
					];
				}
				$data['jobs']['pagination'] = self::get_paging_info($data['jobs']['pages'], $pagesize, $page);
				$data['jobs']['show_pagination'] = $show_pagination;
			}
		}
		
		return $data;
	}

	private static function get_paging_info($tot_rows,$pp,$curr_page){
	    $pages = ceil($tot_rows / $pp); // calc pages

	    $data = array(); // start out array
	    $data['si']        = ($curr_page * $pp) - $pp; // what row to start at
	    $data['pages']     = $pages;                   // add the pages
	    $data['curr_page'] = $curr_page;               // Whats the current page

	    return $data; //return the paging data
	}
}