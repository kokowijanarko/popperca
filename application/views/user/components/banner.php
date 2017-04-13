<div id="ensign-nivoslider" class="slides">	

<?php
$query = $this->db->query('
	SELECT
	a.`bandet_file_name`
	FROM dev_banner_images a 
	LEFT JOIN dev_banner b ON b.`banner_id` = a.`bandet_banner_id`
	WHERE 
		b.`banner_status` = 1
	ORDER BY a.`bandet_file_name`		
');
$result = $query->result();

if($result){
	// var_dump($result);
	$slide = '';
	foreach($result as $value){
		$img_url = base_url('file/banner/').'/'.$value->bandet_file_name;
		
		$slide .= '<img src="'. $img_url .'" alt=""  />';
		// var_dump($img_url, $slide);
	}
	// var_dump($slide);
	echo $slide;
}else{
	echo '
		<img src="'. base_url() .'file/header/header2.jpg" alt="" />
		<img src="'. base_url() .'file/header/header3.jpg" alt="" />
		<img src="'. base_url() .'file/header/header1.jpg" alt="" />
		<img src="'. base_url() .'file/header/header4.jpg" alt="" />
	';
}



?>

	
</div>