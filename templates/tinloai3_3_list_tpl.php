<?php
			$d->reset();
			$id =  addslashes($_GET['id']);
// 			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 and id_list='".$id."' order by id desc";
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			$sql_tinll_name="select * from #_tinloai1_1_list where id='".$id."'";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	
?>
<div class="col-sm-9 col-lg-9">
  <div class="news">
    <h2 class="title_index">Tin tức</h2>
    <div class="col-lg-12 listnews">
      <?php for($j=0,$count_tllc=count($result_tinl);$j<$count_tllc;$j++) { ?>
      <div class="row" > <a href="tin-tuc-detail/<?=$result_tinl[$j]['tenkhongdau']?>-<?=$result_tinl[$j]['id']?>.html" title="<?=$result_tinl[$j]['ten_vi']?>">
        <h4>
          <?=$result_tinl[$j]['ten_vi']?>
        </h4>
        </a> <a href="tin-tuc-detail/<?=$result_tinl[$j]['tenkhongdau']?>-<?=$result_tinl[$j]['id']?>.html" title="<?=$result_tinl[$j]['ten_vi']?>">
        <img class="img-responsive pull-left" alt="" src="upload/tinloai1_1/<?=$result_tinl[$j]['thumb']?>">
        <p>
          <?=$result_tinl[$j]['mota_vi']?>
        </p>
        </a> </div>
      <?php } ?>
    </div>
  </div>
</div>