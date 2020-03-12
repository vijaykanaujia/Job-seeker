<?php

namespace App\Classes;
use App\Classes\Careerjet_API;
use App\Core\Input;
class MyCareerjetAPI{

	public static function getSearchResult(){

		$data = [];
		$keyword = Input::get('keyword') ? : '';
		$locaiton = Input::get('location') ? : '';
		$api = new Careerjet_API('en_GB') ;
		$page = Input::get('page') ? : 1; # Or from parameters.
		$pagesize = Input::get('pagesize') ? : 10;

		$result = $api->search(array(
		  'keywords' => $keyword,
		  'location' => $locaiton,
		  'page' => $page ,
		  'pagesize' => $pagesize,
		  'affid' => '5704082add03b271cfad611e8cd277c7',
		));

		if( $result->type == 'JOBS' ){
			$jobs = $result->jobs;
			$data['jobs']['pages'] = $result->pages;
			foreach( $jobs as $job ) {
				$data['jobs']['result'][] = [
					'url' => $job->url,
					'title' => $job->title,
					'location' => $job->locations,
					'company' => $job->company,
					'salary' => $job->salary,
					'date' => $job->date,
					'description' => $job->description
				];
			}
		}
		$data['jobs']['pagination'] = self::makePagination($page, $pagesize, $data['jobs']['pages']);
		return $data;
	}

	public static function makePagination(int $current_page, int $pagesize, int $total_page){
		$pages = ceil($total_page / $pagesize); // calc pages

	    $pagination = []; // start out array
	    $pagination['si']        = ($current_page * $pagesize) - $pagesize; // what row to start at
	    $pagination['pages']     = $pages;                   // add the pages
	    $pagination['curr_page'] = $current_page;               // Whats the current page

	    return $pagination; //return the paging data
	}
}