<?php

$parent = get_category(get_parent_category($cat));

switch ($parent->slug) {
	case 'news':
		include('category-news.php');
	break;
	
	case 'project':
		include('page-project.php');
	break;
	
	default:
		include('404.php');
	break;
}




?>