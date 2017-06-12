<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tungdanhmuc="select * from #_thuvienanh where hienthi = 1 and thumb='$id'  order by stt asc ";
			$d->query($sql_tungdanhmuc);	
			$result_hinhanh=$d->result_array();	
			
			$d->reset();
			$sql_laycat="select * from #_product_cat where hienthi =1 and id='$id'";
			$d->query($sql_laycat);	
			$result_cat=$d->fetch_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_cat['id_list']."'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_hinhanh , $url, $curPage, $maxR, $maxP);
			$result_hinhanh=$paging['source'];
            
			
			$total_sp = count($result_hinhanh);
        ?>


	<!-- start header -->
<div class="col-sm-9 col-lg-9">

    <div class="product">
      <div class="col-md-12 col-sm-12 ">
        <h2 class="title_index">HÌNH ẢNH HOẠT ĐỘNG</h2>
        <div class="block-blog1">
          <?php
          for($i=0,$count_spnam=count($result_hinhanh);$i<$count_spnam;$i++)
         {
         ?>
         <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10">
            <div class="item-service"><a target="_blank" href="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" class="view-img"></a><a target="_blank" href="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" class="view-img"><img src="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>"></a><a target="_blank" href="upload/thuvienanh/<?php if($result_hinhanh[$i]["tc_big"]==1) echo $result_hinhanh[$i]["photo"]; else echo $result_hinhanh[$i]["photo"] ?>">
            <h2></h2>
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