<?php function link_box(){
	$award = get_option('cost');
?>
<div id="quick-link" class="quick-link">
<ul>
<li><a class="consultant" href="#"><i class="fa fa-comments" aria-hidden="true"></i></a></li>
<!-- <li><a class="consultant" href="#"><i class="fa fa-comments" aria-hidden="true"></i></br>Tư vấn</a></li> -->
<li><a href="#" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a></li>

</ul>

<div id="menu-search" class="menu-search" style="display:none">

 <div class="panel-search">                       

    <form role="search" method="get" class="custom-search" action="<?php echo home_url( '/' ); ?>">

        <input class="in-key" type="search" class="search-field"

        placeholder="Tìm kiếm ..."

        value="<?php echo get_search_query() ?>" name="s"

        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

        <button class="btn btn-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

   </form>                      

</div> 

</div>

</div>

<!-- Modal -->

<div id="modal-consultant" class="frm-modal-thianh modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content frm-area-bg">

      <div class="modal-header">

        <button type="button" onclick="setck()" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">&nbsp;&nbsp;&nbsp;</h4>

      </div>

      <div class="modal-body">

        <div class="frm-area">

 			<form id="frm_thi_anh" method="post" enctype="multipart/form-data" class="frm-register">

 			  <div class="register">

				<h2>Đăng ký tư vấn</h2>			 			  

 			  	<p>Vui lòng điền đầy đủ thông tin để nhân viên chúng tôi tư vấn tốt hơn</p>

 			  	<?php wp_nonce_field('ajax_file_nonce', 'security'); ?>

               <input type="hidden" name="action" value="send_images">

			  </div>			  

			  <div class="input-group">

					<input id="fullname" type="text" class="form-control fullname" name="fullname" placeholder="Họ và tên" required>

			  </div>

			  <div class="input-group">  

			    <input id="address" type="text" class="form-control address" name="address" placeholder="Địa chỉ" required>

			  </div>

			  <div class="input-group">

					<input id="email" type="email" class="form-control email" name="email" placeholder="Email" required>

			  </div>

			  <div class="input-group">

					<input id="phone" type="number" class="form-control phone" name="phone" placeholder="Điện thoại" required>

			  </div>

			  <div class="input-group">

			  		<select name="dich_vu" class="sel-service">

			  		<option value="-1">Vui lòng chọn dịch vụ *</option>

			  		<option value="19">Chưa phát sinh dv</option>

			  		<option value="24">Điều Tri CNC</option>

			  		<option value="25">Điều Trị Da</option>

			  		<option value="26">Phun Xăm </option>

			  		<option value="27">Thẩm Mỹ Nội Khoa</option>

			  		<option value="28">Dịch Vụ Trọn Gói</option>

			  		<option value="29">Dịch vụ Hi-Ulther</option>

			  		<option value="30">Điều Trị Mụn</option>

			  		<option value="31">Điều Trị Nám</option>

			  		</select>

			  </div>

			  <div class="form-group">

			  	   <div class="input-group">

				  	<!-- <label for="comment">Thắc mắc:</label> -->

				  	<textarea id="message" class="form-control message" rows="3"  placeholder="Thắc mắc" value=""></textarea>

					</div>

				</div>

			  <div class="form-group">
			     <div class="input-group area-btn">
			     	 <label for="inputPassword">Chụp ảnh tình trạng da của bạn&nbsp;&nbsp;</label>		
			     	<a href="#" onclick="performClick('file');"><i class="fa fa-camera-retro" aria-hidden="true"></i></a>

						<input style="display:none" type="file" id="file" accept="image/*" multiple/>
				  </div>
			  </div>		 
			  <div class="input-group area-btn">
					<button type="submit" class="btn-submit">Gởi</button>
			  </div>
			  <div class="input-group">
			  <p>* Mọi thông tin của bạn điều được bảo mật tuyệt đối</p>
			  </div>
			  <div class="input-group">
			  	<p><img class="loading" style="display:none" src="<?php echo plugin_dir_url(__FILE__); ?>images/loader.gif"></p>
			  	<div class="result"></div>
			  </div>
			   <img id="canvasImg" style="width: auto;height: auto" alt="">
			</form>
		</div>	
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>

</div>

<?php }

function register_survey(){ ?>
<!--modal javascript reg-survey-->
<div class="modal-register">
  <div class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      	<form class="frm-register">
 				<div class="register">
 					<a href="#"><img class="logo" src="http://thammyvienthienkhue.vn/wp-content/themes/thienkhue/images/logo/logo-thienkhue.png"></a>
 					<!-- <h2>Đăng ký</h2> -->
 					<h3><span class="promotion"></span></h3>			
					<!-- <p>Trải nghiệm chỉ 800k (giá gốc 3tr5)</p> -->
					<!-- <h3><span class="promotion"></span>Tháng 10 đặc quyền phái đẹp Vì phụ nữ xứng đáng</h3>	 -->
 				</div>		

				<div class="input-group">

				<input type="text" class="form-control fullname" name="fullname" placeholder="Họ và tên" required>

			  	</div>

				<div class="input-group">

					<input type="number" class="form-control phone" name="phone" placeholder="Điện thoại" required>

				</div>

				<div class="input-group">
					<input type="email" class="form-control email" name="email" placeholder="Nhập E-mail để nhận thông tin khuyến mãi khác" required>
				</div>	 		 
				
				<div class="input-group payonline">
					<label><input class="messageCheckbox" type="checkbox" value="1" name="messageCheckbox">Thanh toán online giá chỉ còn <span class="discount"></span></label> 
			  	</div>
			  <div class="input-group area-btn">
					<a class="btn btn-default btn-reg-survey">Xác nhận</a>
			  </div>

			  <div class="input-group">

			  	<p><img width="30px" class="loading" style="display:none" src="http://thammyvienthienkhue.vn/wp-content/uploads/2018/10/loader.gif"></p>

			  	<div class="result"></div>
			  	<div class="thanks-checkout" style="display: none">
			  		<label>Chúng tôi sẽ liên hệ để hướng dẫn thanh toán chuyển khoản</br>Cảm ơn quý khách!</label> 
			  	</div>
			  	<div class="thanks-normal" style="display: none">
			  		<label>Chúng tôi sẽ liên hệ quý khách để hướng dẫn đặt lịch</br>Cảm ơn quý khách!</label> 	  		
			  	</div>
			  </div>
                <input class="name_service" type="hidden" name="name_service" value="" />
                <input class="checkout_medthod" type="hidden" name="checkout_medthod" value="" />
			</form>	  	
    </div>
  </div>
</div>
<!--end modal javascrip reg-survey -->
<!-- <button id="myBtn">Open Modal</button> -->
<!--modal javascript-->
<div class="modal-form">
  <div class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Tiếc quá mất cơ hội rồi!</h2>
	  	<div class="panel panel-default custom">
	    	<a class="btn btn-default btn-link" target="_blank" href="http://kmt10.thammyvienthienkhue.vn/"><h2>Click xem ngay ưu đãi <span class="khuyenmai"></span></h2></a>
		</div>
    </div>
  </div>
</div>
<!--end modal javascrip -->
<?php } 
function short_form_reg(){ ?>
	<div class="frm-shorcort-reg">
		<div class="col-sm-6 bg-reg">
			<a href="#"><img src="<?php echo plugin_dir_url(__FILE__) . "images/lienhe1.jpg" ?>"></a>
		</div>
		<div class="col-sm-6">
      		<form class="frm-register">
 				<div class="register">
 				   <h2>ĐĂNG KÝ</h2>
 					<h3>Deal chớp nhoáng</h3>			
					<p>Làm đẹp 99k với chuyên gia</p>
 				</div>		

				<div class="input-group">

				<input type="text" class="form-control fullname" name="fullname" placeholder="Họ và tên" required>

			  	</div>

				<div class="input-group">

					<input type="number" class="form-control phone" name="phone" placeholder="Điện thoại" required>

				</div>

				<div class="input-group">
					<input type="email" class="form-control email" name="email" placeholder="Nhập E-mail để nhận thông tin khuyến mãi khác" required>
				</div>	 		 
				
				<div class="input-group">

			  		<select name="dich_vu" class="sel-service">

			  		<option value="0">Vui lòng chọn dịch vụ *</option>

			  		<option value="1">Trẻ hóa sáng da với công nghệ laser whitening</option>

			  		<option value="2">Điều trị mụn công nghệ Biolight</option>

			  		<option value="3">Giảm béo công nghệ Body trim</option>

			  		<option value="4">Trắng sáng body công nghệ thanh tẩy TBC </option>
			  		</select>

			  </div>
			  <div class="input-group area-btn">
					<a onclick="reg_survey(this)" class="btn btn-default btn-reg-survey">Đăng ký ngay</a>
			  </div>

			  <div class="input-group">

			  	<p><img width="30px" class="loading" style="display:none" src="http://thammyvienthienkhue.vn/wp-content/uploads/2018/10/loader.gif"></p>
			  	<div class="result"></div>
			  	<div class="thanks-checkout" style="display: none">
			  		<label>Chúng tôi sẽ liên hệ để hướng dẫn thanh toán chuyển khoản</br>Cảm ơn quý khách!</label> 
			  	</div>
			  	<div class="thanks-normal" style="display: none">
			  		<label>Thiên khuê sẽ liên hệ xác nhận và gởi mã số đăng ký cho bạn</label>
			  	</div>
			  </div>
                <input class="name_service" type="hidden" name="name_service" value="" />
                <input class="checkout_medthod" type="hidden" name="checkout_medthod" value="" />
			</form>	
		</div>
	</div>
<?php 
}?>

