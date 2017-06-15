<?php
	
	
	$d->reset();
	$sql_support="select ten_$lang,yahoo,skype,dienthoai,fax from #_yahoo where hienthi= 1 order by stt asc";
	$d->query($sql_support);
	$result_support=$d->result_array();
	
	$d->reset();
	$sql_video="select url from #_video";
	$d->query($sql_video);
	$result_video=$d->result_array();
	
	$d->reset();
	$sql_dsweb="select url,ten_$lang from #_lkweb where hienthi =1 order by stt asc";
	$d->query($sql_dsweb);
	$result_dsweb=$d->result_array();
	
	$d->reset();
	$sql_images= "select * from #_slideshow where hienthi=1 order by stt asc,id desc";
	$d->query($sql_images);
	$slideshow = $d->result_array();
?>
<div class="col-sm-3 col-lg-3">
    <div class="progress">
      <div class="block block-yahoo">
        <h3 class="title_1">Hổ trợ trực tuyến</h3>
        <div class="httt">
        <img width="49" src="img/index_27.png"><span class="httt1">(+84.8) 0909 718 872</span>
        </div>
        <div class="httt">
       <img src="img/index_32.png" alt="" width="49"><span class="httt1">
        <a href="skype:Mr.Minh?call"> <img src="img/call_blue_transparent_70x23.png" style="border: none;" alt="Skype Me™!" width="70" height="23"></a>
        Support 1</span>
        </div>
        <div class="httt">
        <img src="img/index_32.png" alt="" width="49"><span class="httt1">
        <a href="skype:Mr.Minh?call"> <img src="img/call_blue_transparent_70x23.png" style="border: none;" alt="Skype Me™!" width="70" height="23"></a>
        Support 2</span>
        </div>
        
      </div>
    </div>
    <div class="progress">
      <div class="block">
        <h3 class="title_1">HÌNH ẢNH HOẠT ĐỘNG</h3>
        <div class="content-img">
          <?php 
           global $d, $item;
           $sql = "select * from #_thuvienanhcapcha where hienthi='1' order by stt";
           $d->query($sql);
           $items = $d->result_array();
        ?>
        <?php for($i=0, $count=count($items); $i<$count; $i++){//thumb
        ?>
          <div class="padding5 item-img-left col-md-6"> <a href="chi-tiet-anh/<?=$items[$i]["thumb"]?>-<?=$items[$i]["id"]?>.html"><img src="golhar/<?=_upload_thuvienanhcapcha.$items[$i]['photo']?>"></a> </div>
          <?php }?>
        </div>
        <div style=" clear:both"></div>
      </div>
    </div>
    <div class=" progress">
      <h3 class="title_1">Liên kết website</h3>
      <div class="block-lienket">
        <select onChange="window.open(this.value,'_blank')" class="block-lineket" name="select">
          <?php 
         {
         	for($i=0,$count_dsweb=count($result_dsweb);$i<$count_dsweb;$i++)
    		{
    		?>
         	<option value="<?=$result_dsweb[$i]['url']?>"><?=$result_dsweb[$i]["ten_$lang"]?></option> 
            <?php
    		}
         }
    	 ?>
        </select>
      </div>
    </div>
    <div class="progress">
      <div class="content-asd"> 
      <?php
			if(count($slideshow) != 0){
				foreach($slideshow as $v){
		?>
        			<a href="<?php echo $v['link']; ?>" target="_blank" title="<?php echo $v['ten']; ?>"><img src="<?php echo _upload_slideshow_l.$v['thumb']; ?>" alt="<?php echo $v['ten']; ?>"/></a>
        <?php
				}
			}
		?>   
      </div>
      <div style=" clear:both"></div>
    </div>
    <div style=" clear:both"></div>
</div>