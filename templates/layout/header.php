<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>

<script language="javascript"> 
	function doEnter(evt){
	// IE					// Netscape/Firefox/Opera
    	var key;
    	if(evt.keyCode == 13 || evt.which == 13){
    		onSearch(evt);
    	}
	}
	function onSearch(evt) {	
			var keyword = document.getElementById("keyword").value;
			if(keyword=='')
				alert('Bạn chưa nhập tên!');
			else{
			//alert(keyword);
			//var encoded = Base64.encode(keyword);
			location.href = "index.php?com=tim-kiem&keyword="+keyword;
// 			location.href = "google.com";
			loadPage(document.location);			
			//alert();
			}
		}		
</script> 

<header>
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<ul class="topleft-info">
							<li><i class="fa fa-phone"></i> 0909 718 872</li>
						</ul>
                        <ul class="social-network-top">
                            <li><a href="https://www.facebook.com/GaragePhamChuong/" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
						</ul> 
                        <ul class="social-network-top"><li><a href="mailto:huutan.vo@gmail.com">Email: huutan.vo@gmail.com</a></li>
                        </ul>
					</div>
					<div class="col-md-6">
						<div class="block-line-top padding0">
							<ul class="list-lang">
	
								<li>Language:</li>
    
								<li><a href="index.html">
									<img src="img/vi.png"></a></li>
    
								<li><a href="index.html"><img src="img/en.png"></a></li>

							</ul>

							<div class="padding0 block-search ">   

								<form class="frm-search">
	<label>Tìm kiếm</label><input placeholder="Tìm kiếm" name="q" id="keyword"><a onclick="onSearch(event,'keyword');"><span class="btn-search btn_search">Tìm kiếm</span></a>

								</form>



							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
    <div id="hdbanner" class="container">
 		<div class="col-md-3">
		<a class="logo" style="margin-top: 7px;" href="index.html"><img src="img/logo.png" alt="" /></a>
	</div>
	<div class="col-md-9"><a class="banner	" href="index.html"><img src="img/banner.png" alt="" ></a>
	</div>
        </div>	
		
    <div class="navbar navbar-default navbar-static-top">
 	
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li  class=""><a href="index.html">Trang chủ</a></li>
		            <li><a href="gioi-thieu.html">Giới thiệu</a></li>
                    <?php include _template."layout/menu_top.php"; ?>
                    <li><a href="tin-tuc-list/tin-tuc-20.html">Tin tức</a></li>
                    <li><a href="lien-he.html">Liên hệ </a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
