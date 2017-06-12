<?php
    $d->setTable('gioithieu');
    $d->select("noidung_$lang,mota_$lang,link");
    if($d->num_rows()>0){
        $row = $d->fetch_array();
        $noidung_about= $row["noidung_$lang"];
        $noidung_mota= $row["mota_$lang"];
        $noidung_link= $row['link'];
    }
    
    	
    $d->reset();
    $sql_tin_foo ="select *  from #_tinloai1_3 order by stt asc limit 0,9";
    $d->query($sql_tin_foo);
    $result_tinll_c=$d->result_array();
    
	$d->reset();
	$sql_qc_slide ="select * from #_linhvuc where hienthi = 1 and taisan = 1 order by stt asc limit 0,12";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi = 1 order by stt asc limit 9";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
	$d->reset();
	$sql_linhvuc="select * from #_linhvuc where hienthi = 1 and linhvuc = 1 order by stt asc limit 4";
	$d->query($sql_linhvuc);
	$result_linhvuc=$d->result_array();
	
	$d->reset();
	$result_detailq="select * from #_tinloai1_1 order by id limit 0,2";
	$d->query($result_detailq);
	$result_detailq=$d->result_array();
	$tg=date('Y-m-d H:i:s');
	$tgout=900;
	$tgnew=$tg - $tgout;
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
	    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
	else
	    $ipaddress = 'UNKNOWN';
	$local = $_SERVER['PHP_SELF'];
// 	$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";                  
// 	$d->query($sql_insert);
// 	$next30 = strtotime( '-900 seconds' );
// 	$tgnew =  date('Y-m-d H:i:s',$next30 );
// 	$d->reset();
// 	$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 	$d->query($sql_delete);
// 	$d->reset();
// 	$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 	$d->query($result_detail);
// 	$result_detail=$d->fetch_array();
// 	$useronline = count($result_detail);
?>

<div class="col-sm-9 col-lg-9">
    <div class="info">
      <h2 class="title_index">About our company</h2>
      <?=$noidung_about?>
    </div>
    <div class="product">
      <div class="col-md-12 col-sm-12 ">
        <h2 class="title_index">Kinh doanh</h2>
        <div class="block-blog1">
        <?php
         for ($i=0;$i<count($result_spnam);$i++)
         {
         ?>
         <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
            <div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"><img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>"></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
            <h2><?=$result_spnam[$i]["ten_vi"]?></h2>
              </a> 
              </div>
          </div>
         <?php
         } 
         ?>
        </div>
        <div class="phantrang"></div>
       
      </div>
    </div>
    <div style="clear:both"></div>
    <div class="news">
    <h2 class="title_index">News</h2>
    <div class="col-lg-12 listnews">
       <?php for($j=0,$count_tllc=count($result_detailq);$j<$count_tllc;$j++) { ?>
           <div class="row" >
               <a href="tin-tuc-detail/<?=$result_detailq[$j]['tenkhongdau']?>-<?=$result_detailq[$j]['id']?>.html" title="<?=$result_detailq[$j]['ten_vi']?>">
                    <h4><?=$result_detailq[$j]['ten_vi']?></h4> </a>   
               <a href="tin-tuc-detail/<?=$result_detailq[$j]['tenkhongdau']?>-<?=$result_detailq[$j]['id']?>.html" title="<?=$result_detailq[$j]['ten_vi']?>">     
                                    <img class="img-responsive pull-left" alt="" src="upload/tinloai1_1/<?=$result_detailq[$j]['thumb']?>">
                                    <p>
                                         <?=$result_detailq[$j]['mota_vi']?>
                                    </p>   
               </a>                        
           </div>  
	   <?php } ?> 
       
       
    </div>                        
    
    </div>
</div>