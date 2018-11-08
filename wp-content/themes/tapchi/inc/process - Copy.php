<?php 
function add_query_vars_filter( $vars ){
  $vars[] = "email";
  $vars[] = "idevent";
 return $vars;
}
$ulr=$_SERVER['REQUEST_URI'];
//Add custom query vars
add_filter( 'query_vars', 'add_query_vars_filter' );
add_query_arg( array('email' => 'value1','idevent'=>'value2'),$ulr );

function your_scripts() {
  //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/ajax.js', $deps=array(), $ver=true, true);
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/ajax.js', array(), '1.1.4', true );
  wp_localize_script( 'script-name', 'MyAjax', array(
    // URL to wp-admin/admin-ajax.php to process data
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    // Creates a random string to test against for security purposes
    'security' => wp_create_nonce( 'my-special-string' )
  ));
}
add_action( 'wp_enqueue_scripts', 'your_scripts' );

function get_the_user_ip() {
if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
//check ip from share internet
$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
//to check ip is pass from proxy
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
$ip = $_SERVER['REMOTE_ADDR'];
}
return apply_filters( 'wpb_get_ip', $ip );
}
/*login*/
//send mail
if(!function_exists('send_message')):
	function send_message(){
			 wp_verify_nonce( 'my-special-string', 'security' );
			 $to="hatazu@gmail.com";
			 
			 $name = htmlspecialchars(stripslashes(trim($_POST['_name'])));
			 $email = htmlspecialchars(stripslashes(trim($_POST['_email'])));
			 $text_message = htmlspecialchars(stripslashes(trim($_POST['_message'])));
			 
			 date_default_timezone_set('Asia/Ho_Chi_Minh');
       		 $time_reg = date('Y-m-d H:i:s', time());
       		 $subject = 'Tháº¯c máº¯c '.$time_reg;
       		
		     $message  = "<html><body>";    
		     $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
		     $message .= "<tr><td>"; 
		     $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";  
		     $message .= "<thead>
	        <tr height='80'>
	         <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >TÆ° váº¥n</th>
	        </tr>
	        </thead>";
	      
	     	$message .= "<tbody>
	        <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
	         <td style='text-align:center;'>Email:</td>
	          <td style='text-align:center;'>".$to."</td> 
	        </tr>
	        
	        <tr>
	         <td colspan='4' style='padding-left:15px;padding-right:15px; border-top:1px solid #ccc;''>
	          <p style='font-size:14px;'>TiÃªu Ä‘á»:  ".$subject."</p>  
	         </td>
	        </tr>      
	        <tr>
	         <td colspan='4' align='left' style='background-color:#f5f5f5;font-size:15px;padding-left:15px;padding-right:15px;'>
	          <p style='font-size:14px;'>Ná»™i dung:</p>
	          <p style='font-size:16px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
	         </td>
	        </tr>
	              
	        </tbody>"; 
	        //end body           
	         $message .= "</table>"; 
	         $message .= "</td></tr>";
	         $message .= "</table>";           
	         $message .= "</body></html>";

	        $headers  = 'MIME-Version: 1.0' . "\r\n";
	        $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";      
	        // Create email headers
	        $headers .= 'From: '.$to."\r\n".
	            'Reply-To: '.$to."\r\n" .
	            'X-Mailer: PHP/' . phpversion();
	        
	        $mail_send = wp_mail($to, $subject, $message, $headers);
	        if($mail_send){
	            echo json_encode("<div id='form_success'>Cáº£m Æ¡n báº¡n Ä‘Ã£ quan tÃ¢m,<br>ChÃºng tÃ´i sáº½ cá»‘ gáº¯ng tráº£ lá»i tháº¯c máº¯c cá»§a báº¡n trong thá»i gian sá»›m nháº¥t cÃ³ thá»ƒ </div>	                <script>
	                jQuery(document).ready(function($) {
	                     $('#fr_sendmessage')[0].reset();
	                 });
	                </script>
	                ");
	             die();     
	        }
	        else{
	            echo json_encode($mail_send->error);
	             die();
	        }
	    
	}
endif;
add_action( 'wp_ajax_send_message', 'send_message' );
add_action( 'wp_ajax_nopriv_send_message', 'send_message' );

//insert comment

if(!function_exists('insert_comment')):
	function insert_comment(){
			 wp_verify_nonce('my-special-string','security' );
			 $idpost = htmlspecialchars(stripslashes(trim($_POST['_idpost'])));
			 $mark = htmlspecialchars(stripslashes(trim($_POST['_mark'])));
			 $name = htmlspecialchars(stripslashes(trim($_POST['_name'])));
			 $email = htmlspecialchars(stripslashes(trim($_POST['_email'])));
			 $text_message = htmlspecialchars(stripslashes(trim($_POST['_message'])));
			 if(empty($text_message)) {
			 	 echo json_encode("<div id='form_success'>Báº¡n chÆ°a nháº­p bÃ¬nh luáº­n</div>
	             <script>
	                jQuery(document).ready(function($) {
	                     $('#frm_comment')[0].reset();
	                 });
	                </script>
	                ");
	             die();  
			 }
			 global $wpdb;
			 $ip = get_the_user_ip();
			 $id_curent = get_current_user_id();
    		 $browser = $_SERVER['HTTP_USER_AGENT'];	 
			 date_default_timezone_set('Asia/Ho_Chi_Minh');
       		 $time_reg = date('Y-m-d H:i:s', time());
       		$time = current_time('mysql');
			$data = array(
			    'comment_post_ID' => $idpost,
			    'comment_author' => $name,
			    'comment_author_email' => $email,
			    'comment_author_url' => 'http://',
			    'comment_content' => $text_message,
			    'comment_type' => '',
			    'comment_parent' => 0,
			    'user_id' =>  $id_curent,
			    'comment_author_IP' => $ip,
			    'comment_agent' => $browser,
			    'comment_date' => $time,
			    'comment_approved' => 1,
			);
			$id_cmt = wp_insert_comment($data);
	        if($id_cmt>0){
			  //check exist metakey reviews
	        $metakey="mark";
	        $wpdb->insert( 
				$wpdb->commentmeta, 
				array( 
					'comment_id'=>$id_cmt, 'meta_key'=>$metakey, 'meta_value'=>$mark
				),
				array( 
					'%d','%s','%d'
				)  
			); 
			$wpdb->show_errors(); 		  		           	
	        	//end mark
	            echo json_encode("<div id='form_success'>Cáº£m Æ¡n báº¡n Ä‘Ã£ quan tÃ¢m</div>
	             <script>
	                jQuery(document).ready(function($) {
	                     $('#frm_comment')[0].reset();
	                 });
	                </script>
	                ");
	             die();     
	        }	        
	         echo json_encode("error");
	         die();	    
	}
endif;
add_action( 'wp_ajax_insert_comment', 'insert_comment' );
add_action( 'wp_ajax_nopriv_insert_comment', 'insert_comment' );
//reviews
if(!function_exists('list_comment')):
	function list_comment(){
			 wp_verify_nonce('my-special-string','security' );
			 $id_post = htmlspecialchars(stripslashes(trim($_POST['_idpost'])));			
			  global $wpdb;
			  $list_cmt = array();		  
			  $wpcomment = $wpdb->get_results( 
			  "
			  select cmt.comment_id,cmt.comment_author,cmt.comment_date,cmt.comment_content,meta.meta_value from (select * from wp_comments where comment_post_ID = '$id_post' and  comment_approved='1') as cmt 
			  inner join wp_commentmeta as meta on cmt.comment_id = meta.comment_id
			  ",object
			);
			if($wpcomment){	 
	         	foreach ($wpcomment as $item_cmt){ 
	         		 $item = array();
	         		 $item['comment_id'] = $item_cmt->comment_ID;                 
                     $item['author_cmt'] = $item_cmt->comment_author; 
                     $item['date_cmt'] = $item_cmt->comment_date; 
                     $item['content_cmt'] = $item_cmt->comment_content;
                     $item['meta_value'] = $item_cmt->meta_value; 
                     $list_cmt[] = $item;
              	}
              } 
	      	echo json_encode($list_cmt);
	      	die();
	    
	}
endif;
add_action( 'wp_ajax_list_comment', 'list_comment' );
add_action( 'wp_ajax_nopriv_list_comment', 'list_comment');

if(!function_exists('point_reviews')):
	function point_reviews(){
			 wp_verify_nonce('my-special-string','security' );
			 //$id_post = htmlspecialchars(stripslashes(trim($_POST['idpost'])));
			  $id_post = $_REQUEST["idpost"];
			  $mark_review = $_REQUEST["mark"];	 			 
			  global $wpdb;
			  $list_cmt = array();
			  //check exist metakey reviews
			  $metakey="reviews";		  
			  $postmeta = $wpdb->get_results( 
			  "
			  SELECT * 
			  FROM $wpdb->postmeta
			  WHERE meta_key = '$metakey limit 1
			  ",object
			);
			if(!empty($postmeta)){	 
	        	$wpdb->query( $wpdb->prepare( 
				"
					UPDATE $wpdb->postmeta 
					SET meta_value = %d
					WHERE meta_key = %s
					and post_id = %d 
					",
				     $mark_review,$metakey,$id_post
				) );
				echo json_encode(array("0"=>"update"));
	      		die();
	        }else{
	        	$wpdb->query( $wpdb->prepare( 
					"
						INSERT INTO $wpdb->postmeta
						( post_id, meta_key, meta_value )
						VALUES ( %d, %s, %d )
					", 
				    $id_post, 
					$metakey, 
					$mark_review 
				) );
				echo json_encode(array("0"=>"insert"));
				die();
	        } 	 
	      	echo json_encode(array("0"=>"error"));
	      	die();	    
	}
endif;
add_action( 'wp_ajax_point_reviews', 'point_reviews' );
add_action( 'wp_ajax_nopriv_sum_point', 'point_reviews');

if(!function_exists("sum_point")):
	function sum_point(){
		  global $wpdb,$post;
		      $id_post = htmlspecialchars(stripslashes(trim($_POST['_idpost'])));	  
			  $metakey="reviews";		  
			  $postmeta = $wpdb->get_results( 
			  "
			  select sum(meta.meta_value) as sum_mark, count(*) as count_row  from (select comment_id from wp_comments where comment_post_ID='$id_post') as cmt
				INNER join wp_commentmeta as meta on cmt.comment_id = meta.comment_id   
			  ",object
			);
		  $mark=0;
		  if($postmeta){
		 	 foreach ($postmeta as $item_cmt){
		 	 	$sum_mark = $item_cmt->sum_mark;
		 	 	$count_row = $item_cmt->count_row;
		 		if($count_row==0) return 0;
		 	 	$mark = round($sum_mark/$count_row);
		 	 	$mark = $mark%6;
		 		 echo json_encode($mark);
				die();
		   		}
		    }
		   echo json_encode($mark);
				die();
	}
 endif; 

add_action( 'wp_ajax_sum_point', 'sum_point' );
add_action( 'wp_ajax_nopriv_sum_point', 'sum_point');

if(!function_exists("load_term")):
	function load_term(){
		  global $wpdb,$post;
		  	$items=array();
		      $terms = htmlspecialchars(stripslashes(trim($_POST['_terms'])));
		      $per_page = htmlspecialchars(stripslashes(trim($_POST['_per_page'])));
		      	  
			  $the_query = new WP_Query( array(
			    'post_type' => 'portfolio',
			    'posts_per_page' => '8', 
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'group-portfolio',
			            'field' => 'slug',
			            'terms' => 'quy-mo',
			        )
			    ),
			) );
	 if ( $the_query->have_posts() ) :

		 while ( $the_query->have_posts() ) : $the_query->the_post(); 
				$item = array();
	    		$item['titles'] = get_the_title();
	    		$item['url'] =  get_the_post_thumbnail_url(get_the_ID(),'full');
	    		$item['permelink'] = get_permalink();
	    		$items[] = $item; 
		 endwhile; 
		
		 wp_reset_postdata(); 

 	else : 
		//echo json_encode($items);
		//die();
 	endif; 
		
		echo json_encode($items);
		die();
	}
 endif; 

add_action( 'wp_ajax_load_term', 'load_term' );
add_action( 'wp_ajax_nopriv_load_term', 'load_term');