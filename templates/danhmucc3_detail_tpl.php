<?php 
    $id =  addslashes($_GET['id']);
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_item='$id'  order by stt asc ";
	//die($sql_tungdanhmuc);
	$d->query($sql_tungdanhmuc);	
	$result_spnam=$d->result_array();	
	
	$d->reset();
	$sql_item="select * from #_product_item where hienthi =1 and id='$id'";
	$d->query($sql_item);	
	$result_item=$d->fetch_array();	
	
	$d->reset();
	$sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_item['id_list']."'";
	$d->query($sql_laylist);	
	$result_laylist=$d->fetch_array();	
	
	$d->reset();
	$sql_laycat="select * from #_product_cat where hienthi =1 and id='".$result_item['id_cat']."'";
	$d->query($sql_laycat);	
	$result_cat=$d->fetch_array();	
	
				
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=30;
	$maxP=5;
	$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
	$result_spnam=$paging['source'];
    
	
	$total_sp = count($result_spnam);
?>
<div class="col-sm-9 col-lg-9">

    <div class="product">
      <div class="col-md-12 col-sm-12 ">
        <h2 class="title_index">Sản phẩm</h2>
        <div class="block-blog1">
          <?php
         for ($i=0;$i<count($result_spnam);$i++)
         {
         ?>
         <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
            <div class="item-service"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="view-img"><img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>"></a><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
            <h2><?=$result_spnam[$i]["ten_vi"]?></h2>
              </a> </div>
          </div>
         <?php
         } 
         ?>
        </div>
        <div class="phantrang">
        <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/dich-vu/cham-soc-body/2.html">2</a></li><li class="PagedList-skipToNext"><a href="/dich-vu/cham-soc-body/2.html" rel="next">»</a></li></ul></div>
        
        </div>
       
      </div>
    </div>
    <div style="clear:both"></div>

</div>