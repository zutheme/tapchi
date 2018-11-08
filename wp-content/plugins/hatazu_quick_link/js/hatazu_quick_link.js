(function( $ ) {

 

    "use strict";

    

 });

// jQuery(document).ready(function($) {

//  var nav = $("#quick-link").find("li");

//    nav.click(function(event){

//      event.preventDefault();

//      var a = $(this).find('a').attr('href');   

//      $('html, body').animate({scrollTop:$(a).position().top}, 'slow');

//    });

    

// });

jQuery(document).ready(function($) {

    $("#quick-link").find(".consultant").click(function(event){
        event.preventDefault();
        $("#modal-consultant").modal("show");
    });

    //$(".reg-survey").click(function(){
        //$("#modal-survey").modal("show");
    //});
    // $(".reg-survey").click(function(event){
    //     event.preventDefault();
    //     $("#modal-survey").modal({
    //       backdrop: 'static'
    //     });
        
    //     var e_parent = $(this);
    //     var classList = e_parent.attr('class').split(/\s+/);
    //     var service = classList[1];
    //     $('input[name="name_service"]').val(service);
    // });
});
//begin modal form-survey
var modalreg = document.getElementsByClassName('modal-register')[0];
var _e_frm_reg = modalreg.getElementsByClassName('frm-register')[0];
var e_modal_survey = document.getElementsByClassName('reg-survey');
for (var i = e_modal_survey.length - 1; i >= 0; i--) {
    e_modal_survey[i].addEventListener("click", popup_modal);
}
var _nextlink = "";
var _price_pro = "350k";
var _e_khuyenmai = document.getElementsByClassName('khuyenmai')[0];
var _link_default = "http://kmt10.thammyvienthienkhue.vn/";
var _modal = modalreg.getElementsByClassName('modal')[0];
var _a_link = document.getElementsByClassName('btn-link')[0];
var _e_head = _e_frm_reg.getElementsByClassName('promotion')[0];
var _e_discount = _e_frm_reg.getElementsByClassName('discount')[0];
var _e_payonline = _e_frm_reg.getElementsByClassName('payonline')[0];
var lb_discount = '0';
var _lb_head = "";
var service = "";
function popup_modal(){
  //console.log(this);
  _modal.style.display = "block";
   var ful = modalreg.getElementsByClassName('fullname')[0].value;
   var classList = this.className.split(' ');
   var len = classList.length;
   var element_last = classList[len-1];
   var reg_survey = classList[0];
   if(element_last=='reg-survey'){
       service = classList[len-2];
       // if(len > 3) {
       //     lb_discount = classList[len-3];
       //     if(lb_discount =='k200'){
       //         lb_discount = '200k';
       //     }
       // }
       if(service=='k350'){
          //_lb_head = "Bạn được tặng thêm 4 buổi 350k khi đăng ký tại đây";
          _nextlink ="http://donggiadichvu199k.thammyvienthienkhue.vn/";
          _price_pro = "199k";
          lb_discount = "300k";
       }
       if(service=='d250'){
          //_lb_head = "Bạn được tặng thêm 4 buổi 350k khi đăng ký tại đây";
          _nextlink ="http://km250k.thammyvienthienkhue.vn/";
          _price_pro = "250k";
          lb_discount = "300k";
       }
       if(service=='k850'){
          //_lb_head = "Bạn được tặng thêm 4 buổi 350k khi đăng ký tại đây";
          _nextlink ="http://dk350.thammyvienthienkhue.vn/";
          _price_pro = "350k";
          lb_discount = "600k";
       }
       if(service=='k0'){
          //_lb_head = "Bạn được tặng thêm 4 buổi 350k khi đăng ký tại đây";
          _nextlink ="";
          _price_pro = "0";
          lb_discount = "200k";
       }
       if(service=='d350off'){
          //_lb_head = "Bạn được tặng thêm 4 buổi 350k khi đăng ký tại đây";
          _nextlink ="http://dk350.thammyvienthienkhue.vn/";
          _price_pro = "350k";
          lb_discount = "0";
       }            
   } else{
      _nextlink = _link_default;
      _price_pro = "350k";
   }
  _a_link.href = _nextlink;
  if(lb_discount=='0'){
    _e_payonline.style.display ="none";
  }
  _e_discount.innerHTML = lb_discount;
  _e_khuyenmai.innerHTML = _price_pro;
  _e_head.innerHTML = _lb_head;
}
var _e_close = modalreg.getElementsByClassName("close")[0];
//_e_close.addEventListener("click", close_pupup);
_e_close.onclick = function(){
    //console.log(service);
     _modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
    //if (event.target == modal) {
        //modal.style.display = "none";
    //}
//}
// Get the modal
var e_close = modalreg.getElementsByClassName("close")[0];
e_close.addEventListener("click", popup_langding);
var e_modal = document.getElementsByClassName('modal-form')[0]
var modal = e_modal.getElementsByClassName('modal')[0];
var btnclose = e_modal.getElementsByClassName("close")[0];
function popup_langding(){
	console.log(service);
  if(service!='k0'){
    modal.style.display = "block";
  }
}
// When the user clicks on <span> (x), close the modal
btnclose.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


// window.onbeforeunload = function() {
//     if (window.localLinkClicked) {
//         console.log("localLinkClicked");
//     } else {
//         console.log("no click");
//     }
// }
//end notify
var _address = "";
    var _job = "";
    var _check_method = "";
    var ele_survey = _e_frm_reg.getElementsByClassName("btn-reg-survey")[0];
    ele_survey.addEventListener("click", reg_survey);
    //check checkout
// var ele_survey = document.getElementsByClassName("btn-reg-survey")[0];
// ele_survey.addEventListener("click", reg_survey);

function checklistbox(){
  var checkedValue = null; 
  var inputElements = _e_frm_reg.getElementsByClassName('messageCheckbox');
  for(var i=0; inputElements[i]; i++){
      if(inputElements[i].checked){
           checkedValue = inputElements[i].value;
           _check_method = "chuyển khoản";
           document.getElementsByClassName('checkout_medthod')[0].value = _check_method;
            _e_frm_reg.getElementsByClassName('thanks-checkout')[0].style.display ="block";
            setTimeout(function(){
              _e_frm_reg.getElementsByClassName('thanks-checkout')[0].style.display ="none";
            },10000);
           break;
      }else{
         _e_frm_reg.getElementsByClassName('thanks-normal')[0].style.display ="block";
         setTimeout(function(){
              _e_frm_reg.getElementsByClassName('thanks-normal')[0].style.display ="none";
            },10000);
      }
  }
}
function reg_survey(){
  var _e_frm_reg = modalreg.getElementsByClassName('frm-register')[0];
  var _modal = modalreg.getElementsByClassName('modal')[0];
  var _url = document.URL;
  var _e_frm_reg = this.parentElement.parentElement;
  //console.log(_e_frm_reg);
  var _efullname = _e_frm_reg.getElementsByClassName('fullname')[0];
  console.log(_efullname);
  var _fullname = _efullname.value;
  var _ephone = _e_frm_reg.getElementsByClassName('phone')[0];
  var _e_result = _e_frm_reg.getElementsByClassName('result')[0];
  var _phone = _ephone.value;
  if(!_phone){
      _ephone.style.borderColor = "red";
     _e_result.innerHTML = "Vui lòng nhập số điện thoại";
      return false;
  }
  if(!_fullname){
      _efullname.style.borderColor = "red";
      _e_result.innerHTML = "Vui lòng nhập họ tên";
      return false;
  }
  var _email = _e_frm_reg.getElementsByClassName('email')[0].value;
  //console.log('_fullname='+_fullname);
  checklistbox();
  var _nameservice = document.getElementsByClassName('name_service')[0].value;
  _check_method = document.getElementsByClassName('checkout_medthod')[0].value;
  _address = "dv:"+service+", tt:"+_check_method;
  _job = _url;
  var http = new XMLHttpRequest();
  var url = "http://api.thammyvienthienkhue.vn/api/svcustomers";
  //var obj = JSON.stringify({name:"John Rambo", email:_email});
  //var params = "action=hatazu_plug_register_customer&email="+obj;
  var params = "firstname="+_fullname+"&mobile="+_phone+"&email="+_email+"&address="+_address+"&job="+_job;
  http.open("POST", url, true);
  // //Send the proper header information along with the request
  http.setRequestHeader("Accept", "application/json");
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var load = _e_frm_reg.getElementsByClassName("loading")[0];
  load.style.display = "block";
  http.onreadystatechange = function() {
      if(http.readyState == 4 && http.status == 200) {
          //alert(http.responseText);
           var myArr = JSON.parse(this.responseText);
          console.log(myArr);       
      }
  }
  setTimeout(function(){
    load.style.display = "none";
  },3000);
  setTimeout(function(){
    _e_frm_reg.getElementsByClassName('fullname')[0].value = "";
    _e_frm_reg.getElementsByClassName('phone')[0].value = "";
    _e_frm_reg.getElementsByClassName('email')[0].value = "";
    _e_frm_reg.getElementsByClassName("result")[0].innerHTML = "Cảm ơn bạn đã tham gia";
    load.style.display = "none";
  },3000);
  setTimeout(function(){
    _modal.style.display = "none";
  },9000);
  http.send(params);
}

var tooggle = false;
var _e_panel_search = document.getElementById("menu-search");
var _e_panel_quick = document.getElementById("quick-link");
var _e_button_search = _e_panel_quick.getElementsByClassName("btn-search")[0];
 _e_button_search.addEventListener('click', function(event){
      event.preventDefault();
      if(!tooggle){            
             search_panel_left();
            tooggle = true;
        }else{
            search_panel_right();
            tooggle = false;
        }
  });



function search_panel_right() {

 var elem = _e_panel_search.getElementsByClassName("panel-search")[0];

 elem.style.display = 'block';   

  var pos = 0;

  var id = setInterval(frame, 10);

  function frame() {

    if (pos ==-420) {

      clearInterval(id);

    } else {

      pos=pos-10;

      elem.style.right = pos + 'px';

      elem.style.opacity = 1;

    }

  }

}

function search_panel_left() {

 var elem = _e_panel_search.getElementsByClassName("panel-search")[0];

 elem.style.display = 'block';   

  var pos = -240;

  var id = setInterval(frame, 10);

  function frame() {

    if (pos == 0) {

      clearInterval(id);

    } else {

      pos= pos+10; 

      elem.style.right = pos + 'px';

      elem.style.opacity = 1;

    }

  }

}

function hotline() {

 var elem =_e_panel_quick.getElementsByClassName("btn-consult")[0];

 elem.style.position ='absolute';

 elem.style.display = 'block';   

  var hot = false;

  var id = setInterval(frame, 1000);

  function frame() {
    if (pos == 200) {
      clearInterval(id);
    } else {
      pos=pos+100;
      elem.style.width = '50px';
      //elem.style.left = pos + 'px';
      elem.style.opacity = 1;
    }

  }

}
var _fb_dialog;
var e_tawkchat;
var _circle;
setTimeout(function(){
   
   //e_tawkchat = document.getElementById("tawkchat-maximized-wrapper");
   //console.log(e_tawkchat);
   //e_tawkchat.addEventListener('click', tawkchat);
  _fb_dialog = document.getElementsByClassName("fb_dialog")[0];
  //_circle = _fb_dialog.getElementsByTagName("circle")[0];
  //console.log(_circle);
  if(_fb_dialog){
    _fb_dialog.style.bottom ="70pt";
  }
  

},6000);
function tawkchat(){
	e_tawkchat = document.getElementById("tawkchat-maximized-wrapper");
    console.log(e_tawkchat);
}
var hl_toogle = false;

window.addEventListener("scroll", quicklink,false);

var _e_quick_link = document.getElementById("quick-link");

 //console.log(_e_quick_link);

function quicklink(){ 
   var top = window.pageYOffset; 
   _fb_dialog = document.getElementsByClassName("fb_dialog")[0];
   //var top = document.documentElement.scrollTop;   
  //var rect = element.getBoundingClientRect(); 
  //rect.top > 100 
  var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
   if(top > 100){
  			
     		_e_panel_search.style.display = "block";          
     		if(width > 768 ) {
          if(_fb_dialog) {
     		   _fb_dialog.style.bottom ="10pt";
  			   _fb_dialog.style.right ="12pt";
           }	
             _e_quick_link.style.display = "block";
         	}else{
            	 _e_quick_link.style.display = "none";
            	 _fb_dialog.style.bottom ="70pt";
  				    _fb_dialog.style.right ="0pt";	
         	}       					
             // if(!hl_toogle){

             //   hotline();

             //   hl_toogle = true;

             // }

        }else{

          _e_panel_search.style.display = "none";

             _e_quick_link.style.display = "none";

        }

}

//if (typeof isRealValues == 'function')

//{
   function isRealValues(obj)
    {
     return obj && obj !== 'null' && obj !== 'undefined';
    }
//}

function deleteCookie(cookiename){
      var d = new Date();
      d.setDate(d.getDate() - 1);
      var expires = ";expires="+d;
      var name=cookiename;
      //alert(name);
      var value="";
      document.cookie = name + "=" + value + expires + "; path=/";                    
  }
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function setCookieHours(cname,cvalue,hours) {
    var d = new Date();
    d.setTime(d.getTime() + (hours*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function notifyMe() {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('Chỉ dành cho bạn', {
      icon: 'https://thammyvienthienkhue.vn/wp-content/themes/thienkhue/images/logo/logo-thienkhue.png',
      body: "Nhận chường trình khuyến mãi",
    });

    notification.onclick = function () {
      window.open("http://donggiadichvu199k.thammyvienthienkhue.vn/");  
    };

  }
}