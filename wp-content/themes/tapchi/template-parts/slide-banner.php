<?php
      $count = 0;
      $args = array(
      // 'category_name'  => 'khuyen-mai',
      'post_type' => 'post',
      'posts_per_page' => '4'
      );
    $l_obj = array();                                                                           
    $team_query = new WP_Query($args);
     if ($team_query->have_posts()) {
      while ($team_query->have_posts()) {
            $team_query->the_post();  
            $id = get_the_ID();
            //$price = get_post_meta( $id, 'meta-unit-price', true );
            $obj = array();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'thumbnail', false );
            $full = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false );
            $obj['full'] = $full[0];
            $obj['thumb'] = $thumb[0];
            $obj['permalink'] = get_permalink();
            $obj['title'] = get_the_title($id);
            $obj['excerpt'] = get_the_excerpt_max(200);
            $l_obj[] = $obj;                
        }//end while
      } else {
          echo "nothing found";
      }
      /* Restore original Post Data */
      wp_reset_query();  
      //var_dump($l_obj);
    ?> 
<div class="banner-home1" style="position: relative;">
        <div class="tp-banner-container tp-banner hidden-nav ver1 space_30 hidden-desktop">
            <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="6" data-masterspeed="1000" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo $l_obj[0]['full'];?>" alt="<?php echo $l_obj[0]['title'];?>" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <div class="tp-caption title_slider" data-x="388" data-y="290" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9">
                        <div class="desc">
                            <p>BEAUTY <span class="span-v1"> <img src="<?php echo $l_obj[0]['thumb'];?>" alt=""><?php echo get_the_date(); ?></span></p>
                            <a href="#" title="title" class="title border limit-title"><?php echo $l_obj[0]['title'];?><br>
                            <span><?php echo $l_obj[0]['excerpt'];?></span></a>
                        </div>
                    </div>
                    <div class="tp-caption comment_slider post-item cat-1" data-x="388" data-y="438" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9"><div class="tag"><span class="lable lable-home1">Share:</span><p class="date"><i class="fa fa-facebook-f"></i><i class="fa fa-vimeo"></i><i class="fa fa-pinterest-p"></i><i class="fa fa-vk"></i><i class="fa fa-youtube"></i></p></div>
                         <a href="<?php echo $l_obj[0]['permalink'];?>" class="button-v1 lable-home1">ĐỌC THÊM</a>
                    </div>
                </li>
                <!-- SLIDER -->
                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/home1-slideshow2.jpg" alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption title_slider" data-x="388" data-y="290" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9">
                         <p>BEAUTY <span class="span-v1"> <img src="<?php bloginfo('template_directory');?>/assets/images/luxy-v2.png" alt=""> Rebecca on August 05.2018</span></p>
                        <a href="#" title="title" class="title border">5 Skin care rituals you should <br> be doing before bed.<br>
                            <span>Find people with high expectations and a low tolerance for excuses. The'll<br>
                            have higher expectations for you than you have for yourself</span></a>
                    </div>
                   
                    <div class="tp-caption comment_slider post-item cat-1" data-x="388" data-y="438" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9"><div class="tag"><span class="lable lable-home1">Share:</span><p class="date"><i class="fa fa-facebook-f"></i><i class="fa fa-vimeo"></i><i class="fa fa-pinterest-p"></i><i class="fa fa-vk"></i><i class="fa fa-youtube"></i></p></div>
                         <button class="button-v1 lable-home1">READ MORE</button>
                    </div>
                </li>
                <!-- SLIDER -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/home1-slideshow3.jpg" alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption title_slider" data-x="388" data-y="290" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9">
                         <p>FASHION <span class="span-v1"> <img src="<?php bloginfo('template_directory');?>/assets/images/luxy-v4.png" alt=""> Christopher on August 06, 2018</span></p>
                        <a href="#" title="title" class="title border">The top trends we loved from fall <br> 2018 Paris fashion week.<br>
                            <span>Find people with high expectations and a low tolerance for excuses. The'll<br>
                            have higher expectations for you than you have for yourself</span></a>
                    </div>
                   
                    <div class="tp-caption comment_slider post-item cat-1" data-x="388" data-y="438" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9"><div class="tag"><span class="lable lable-home1">Share:</span><p class="date"><i class="fa fa-facebook-f"></i><i class="fa fa-vimeo"></i><i class="fa fa-pinterest-p"></i><i class="fa fa-vk"></i><i class="fa fa-youtube"></i></p></div>
                            <button class="button-v1 lable-home1">READ MORE</button>
                    </div>
                </li>
                <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/home1-slideshow4.jpg" alt="Futurelife-home2-slideshow" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption title_slider" data-x="388" data-y="290" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9">
                         <p>BEAUTY <span class="span-v1"> <img src="<?php bloginfo('template_directory');?>/assets/images/luxy-v2.png" alt=""> Christopher on August 06, 2018</span></p>
                        <a href="#" title="title" class="title border">The top trends we loved from fall <br>2018 Paris fashion<br>
                            <span>Find people with high expectations and a low tolerance for excuses. The'll<br>
                            have higher expectations for you than you have for yourself</span></a>
                    </div>
                   
                    <div class="tp-caption comment_slider post-item cat-1" data-x="388" data-y="438" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="1600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="on" style="z-index: 9"><div class="tag"><span class="lable lable-home1">Share:</span><p class="date"><i class="fa fa-facebook-f"></i><i class="fa fa-vimeo"></i><i class="fa fa-pinterest-p"></i><i class="fa fa-vk"></i><i class="fa fa-youtube"></i></p></div>
                         <button class="button-v1 lable-home1">READ MORE</button>
                    </div>
                </li>
                   
            </ul>
            <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!-- End tp-banner -->
        <div class="posst">
        <div class="container">
            <div class="row">
            <div class=" home2-head box slide-mobile-home1 nav-ver5">
                <div class="col-md-4 col-sm-4 ">
                                <div class="post-item ver2" data-videourl="https://www.youtube.com/watch?v=wF2m8hNO3Os" data-videosite="youtube">
                                    <div class="images"><img class='img-responsive' src="<?php bloginfo('template_directory');?>/assets/images/blog-header-v3.jpg" alt="images"></div>
                                    <div class="text">
                                        <h2><span>How to find the perfect sunglasses for your face shape</span></h2>
                                        <div class="tag">
                                            <p class="date">By Katherine</p>
                                            <p class="date"><i class="fa fa-heart"></i>10</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comment"></i>3</a>
                                        </div>
                                    </div>
                                </div>
                    <!-- End item -->
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4 col-sm-4">
                                <div class="post-item ver2" data-videourl="https://www.youtube.com/watch?v=wF2m8hNO3Os" data-videosite="youtube">
                                    <div class="images"><img class='img-responsive' src="<?php bloginfo('template_directory');?>/assets/images/blog-header-v2.jpg" alt="images"></div>
                                    <div class="text">
                                        <h2><span>Expert Review: The most natural looking eyelashes.</span></h2>
                                        <div class="tag">
                                            <p class="date">By Katherine</p>
                                            <p class="date"><i class="fa fa-heart"></i>50</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comment"></i>9</a>
                                        </div>
                                    </div>
                                </div>
                    <!-- End item -->
                </div>
                <!-- End col-md-4 -->
                <div class="col-md-4 col-sm-4 ">
                                <div class="post-item ver2" data-videourl="https://www.youtube.com/watch?v=wF2m8hNO3Os" data-videosite="youtube">
                                    <div class="images"><img class='img-responsive' src="<?php bloginfo('template_directory');?>/assets/images/blog-header-v1.jpg" alt="images"></div>
                                    <div class="text">
                                        <h2><span>If you're nervous about your first time traveling, read  this</span></h2>
                                        <div class="tag">
                                            <p class="date">By Katherine</p>
                                            <p class="date"><i class="fa fa-heart"></i>15</p>
                                            <a class="comments" href="#" title="comments"><i class="fa fa-comment"></i>4</a>
                                        </div>
                                    </div>
                                </div>
                    <!-- End item -->
                </div>
                <!-- End col-md-4 -->
            </div>
            </div>
        </div>
        </div>
        </div>
        <!-- End home-head -->