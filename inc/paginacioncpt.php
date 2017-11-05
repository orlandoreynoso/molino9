<?php

function custom_pagination_msc($numpages = '', $pagerange = '', $paged='') {

	if (empty($pagerange)) {
		$pagerange = 2;
	}

	global $paged;

	if (empty($paged)) {
		$paged = 1;
	}

	if ($numpages == '') {
		global $wp_query;

		$numpages = $wp_query->max_num_pages;

		if(!$numpages) {
			$numpages = 1;
		}
	}

	$pagination_args = array(
		'base'            => get_pagenum_link(1) . '%_%',
		'format'          => 'page/%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       => __('&laquo;'),
		'next_text'       => __('&raquo;'),
		'type'            => 'plain',
		'add_args'        => false,
		'add_fragment'    => ''
	);

	$paginate_links = paginate_links($pagination_args);

	if ($paginate_links) {
		echo "<div class='pagination'>";
		echo "<div class='left'>Page " . $paged . " of " . $numpages . "</div> ";
		echo "<div class='right'>" . $paginate_links . "</div> ";
		echo "</div>";
	}
}

?>
