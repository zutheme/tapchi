<?php  

if(!function_exists('get_curent_cat')){
    function get_curent_cat(){
    // Do not display on the homepage
    if ( !is_front_page() ) {
        $cat_name="";
        if ( is_category() ) {
              $cat = get_category( get_query_var( 'cat' ) );
               $cat_slug = $cat->slug;
              //echo $cat_slug;
            
        } 
        else if ( is_single()) { 
             // Get post category info
            $category = get_the_category();
            if(!empty($category)) {           
                // Get last category post is in
                $last_category = end(array_values($category));
                $cat_name = $last_category->name;          
            }
          
           }
            return $cat_name;
        }
    }
}   

 ?>