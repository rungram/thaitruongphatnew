<script language="javascript">
	var _baseUrl1 = '../Scripts/';
</script>
<script src="../Scripts/ckeditor/ckeditor.js" type="text/javascript"></script>

<h3>Giới thiệu</h3>
<form name="frm" method="post" action="index.php?com=about&act=save" enctype="multipart/form-data" class="nhaplieu">      
	
  
 
  <b>Nội dung </b><br/>
	<div>
	 <textarea class="ckeditor" name="noidung_vi" id="noidung_vi"><?=$item['noidung_vi']?></textarea></div>
     
  
     
    
	
	
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=about&act=capnhat'" class="btn" />
</form>