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
	$sql_tungdanhmuc="select * from #_gioithieu where hienthi = 1 order by stt asc limit 9";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
?>

<div class="col-sm-9 col-lg-9">
  <div class="info">
    <h2 class="title_index">Giới thiệu công ty</h2>
    <?=$noidung_about?>
    <?php //echo $result_spnam[0]["noidung_vi"]?>
  </div>
  <div style="clear:both"></div>
</div>
