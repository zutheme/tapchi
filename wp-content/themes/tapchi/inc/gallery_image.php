<?php
if(!function_exists('gallery_by_idpost')){
	function gallery_by_idpost($post){
		$list = array();
		global $post;
		$parent_id = get_the_ID();
		$meta_keys = array('second_featured_image','third_featured_image');
    	foreach($meta_keys as $meta_key){
        	$image_meta_val=get_post_meta($parent_id, $meta_key, true);
        	if(!empty($image_meta_val)){
        		$list[]=$image_meta_val;
        	}
    	}
		return $list;	
	}
}
?>