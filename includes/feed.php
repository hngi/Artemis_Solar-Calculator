<?php
	$rss = new DOMDocument();
	$rss->load('https://www.pv-tech.org/rss');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 6;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
        
		echo '
        <div class="col-12 col-sm-6 col-md-4">
    <div class="card">
     <div class="card-header">
        <h5 class="card-title"><a href="'.$link.'" title="'.$title.'">'.$title.'</a></h5> 
     </div>
      <div class="card-body">
        <p class="card-text"><p>'.$description.'</p>
      </div>
      <div class="card-footer"><small><em>Posted on '.$date.'</em></small></div>
    </div>
  </div>
        ';
		
	}
?>

