<?php


$parent = get_category(get_parent_category($cat));

switch ($parent->slug) {
	case 'news':
		include('single-news.php');
	break;
	
	default:
		include('single-project.php');
	break;
}

?>