<?php

function isAdmin(){
	$user = Auth::check() ? Auth::user() : null;

	if($user){
		foreach($user->role as $role){
			if($role->slug == 'admin'){
				return true;
			}
		}
	}
	return false;
}

function isLoggedIn(){
	return Auth::check() ? true : false;
}

function breadcrumbs(){
	$breadcrumbs = '<ol class="breadcrumb mb-0 justify-content-end p-0">';
	$segments = Request::segments();
	$totalSegment = count($segments);
	$breadcrumbLink = "";

	if($totalSegment > 0) {
		$breadcrumbs .= '<li class="breadcrumb-item"><a href="'.DIRECTORY_SEPARATOR.'admin">Home</a></li>';
		$i = 1;
		foreach($segments as $segment) {
			$breadcrumbLink .= DIRECTORY_SEPARATOR.$segment;
			if($i == $totalSegment){
				$breadcrumbs .='<li class="breadcrumb-item active" aria-current="page">'.$segment.'</li>';
			}else {
				$breadcrumbs .='<li class="breadcrumb-item"><a href="'.$breadcrumbLink.'">'.$segment.'</a></li>';
			}
			$i++;
		}
	}

	$breadcrumbs .= '</ol>';

	echo $breadcrumbs;
}