<?php 
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	global $d;
	$data['ten'] = $_POST['ten'];
	$data['email'] = $_POST['email'];
	$data['dienthoai'] = $_POST['dienthoai'];
	$data['noidung'] = $_POST['noidung'];
	$data['subject'] = $_POST['subject'];
	$d->setTable('lienhe');
	$d->insert($data);
}
?>

<div class="padding0 col-right col-md-8 col-sm-12 ">
  
<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script language="javascript">
function js_submit(){
	if(isEmpty(document.getElementById('ten'), "Please enter a name.")){
		document.getElementById('ten').focus();
		return false;
	}
	
	/*if(isEmpty(document.getElementById('diachi'), "Vui lòng nhập địa chỉ")){
		document.getElementById('diachi').focus();
		return false;
	}*/
	if(!check_email(document.frm.email.value)){
		alert("Email is invalid");
		document.frm.email.focus();
		return false;
	}
	
		
	if(isEmpty(document.getElementById('noidung'), "Please enter content.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>


 

<div class=" padding5 col-md-12 col-sm-12 col-xsm-12  col-xs-12 section-left">
	<div class="block">
    <h3><span><span>Liên hệ </span></span></h3>
    <div class="content-lienhe">
    <p><strong>CÔNG TY TNHH CÔNG NGHỆ THÁI TRƯỜNG PHÁT</strong></p>
<p>Địa chỉ: 73 Hòa hưng P12 , Quận 10 Tp HCM</p>
<p>Điện thoại: 0839873679 - Fax : 0839873679 </p>
<p>Email : thtpco@gmail.com </p>
<p><strong>CHI NHÁNH</strong></p>
<p> Quận 11 Tp HCM</p>
   </div></div>

        	<div class="block">
    <h3><span><span>Liên hệ qua email</span></span></h3>
    <div class="content-lienhe">
    
<div class="col-md-8 col-sm-8 ">

      <div class="contact-form">
                    <form method="post" name="frm" action="lien-he.html">
                        <ul id="form-inner">
                            <li>
                                <label for="name">Họ tên (<span>*</span>)</label>
                                <input placeholder="Họ tên" class="maxchar" id="ten" name="ten" type="text">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="email">Email (<span>*</span>)</label>
                                <input placeholder="Email" class="maxchar" id="email" name="email" type="email">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="email">Điện thoại (<span>*</span>)</label>
                                <input placeholder="Điện thoại " class="maxchar" id="dienthoai" name="dienthoai" type="email">
                                <div class="clearb"></div>
                            </li>
                            <li>
                            	<label for="email">Địa chỉ: (<span>*</span>)</label>
                               <input class="maxchar" placeholder="Địa chỉ" id="diachi" name="diachi" type="text">
                                <div class="clearb"></div>
                            </li>
                            <li>
                                <label for="message">Nội dung (<span>*</span>)</label>
                                <textarea placeholder="Nội dung" class="maxchar textarea textarea-contact" rows="3" id="noidung" name="noidung"></textarea>
                            </li>
                            <li>
                            <label for="message">&nbsp;</label>
                            	<input onclick="js_submit()" class="button button-gui-email" value=" Gửi " type="button">
                               <!-- <input type="reset" class="button button-gui"  value="Hủy">-->
                            </li>
                        </ul>
                    </form>
          		</div>
          </div>      
             <div class="clearb"></div>
       <div class="ggmaps1">
              	
                
             
              </div>      
      <div class="clearb"></div>
    </div>
  </div><!--end block-->
        </div></div>