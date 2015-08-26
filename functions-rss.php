// Add links to rss feed 
function add_to_custom_feed($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array('post', 'books', 'events');
	return $qv;
}
add_filter('request', 'add_to_custom_feed');
