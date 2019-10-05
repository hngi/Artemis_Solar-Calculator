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
	$limit = 3;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
        
		echo '
        <div class="col-12 col-sm-12 col-md-12">
    <div class="">
     <div class="">
        <h5 class=""><a href="'.$link.'" title="'.$title.'">'.$title.'</a></h5> 
     </div>
     <small><em>Posted on '.$date.'</em></small>
      <div class="">
        <p class=""><p>'.$description.'</p>
      </div>
      
    </div>
    <hr>
  </div>
        ';
		
	}
?>

