<?php  if(!defined('_source')) die("Error");
			
		if(isset($_GET['keyword'])){
			$tukhoa =  $_GET['keyword'];
			$tukhoa = trim(strip_tags($tukhoa));    	
    		if (get_magic_quotes_gpc()==false) {
    			$tukhoa = mysql_real_escape_string($tukhoa);    			
    		}								
			// cac tin tuc
			$sql_timkiem = "select * from #_product where (ten_vi LIKE '%$tukhoa%') and hienthi=1 order by stt asc";			
			$d->query($sql_timkiem);
			$result_timkiem = $d->result_array();	
			
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_timkiem, $url, $curPage, $maxR, $maxP);
			$result_timkiem=$paging['source'];
			
			$total_sp = count($result_timkiem);
		}	
		
?>
<div class="col-sm-9 col-lg-9">

    <div class="product">
      <div class="col-md-12 col-sm-12 ">
        <h2 class="title_index">Tìm kiếm</h2>
        <div class="block-blog1">
          <?php
         for ($i=0;$i<count($result_timkiem);$i++)
         {
         ?>
         <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
            <div class="item-service"><a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" class="view-img"></a><a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html" class="view-img"><img src="upload/sanpham/<?php if($result_timkiem[$i]["tc_big"]==1) echo $result_timkiem[$i]["photo"]; else echo $result_timkiem[$i]["photo"] ?>" alt="<?=$result_timkiem[$i]["ten_vi"]?>"></a><a href="chi-tiet-san-pham/<?=$result_timkiem[$i]['tenkhongdau']?>-<?=$result_timkiem[$i]['id']?>.html">
            <h2><?=$result_timkiem[$i]["ten_vi"]?></h2>
              </a> </div>
          </div>
         <?php
         } 
         ?>
        </div>
        
       
      </div>
      <div class="phantrang">
        <div class="pagination-container">
        <ul class="pagination">
        <?=$paging['paging']?>
        </ul>
        </div>
        
        </div>
    </div>
    <div style="clear:both"></div>

</div>