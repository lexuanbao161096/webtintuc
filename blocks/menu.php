<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
ddsmoothmenu.init({
	mainmenuid: "smoothmenu3", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
<span></span>
</a>



<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="./">Trang chủ</a></li>
<?php
$theloai = DanhSachTheLoai();
while ($row_theloai =mysqli_fetch_array($theloai)) {
	$idTL = $row_theloai['idTL'];
?>
<li><a href="#"><?php echo $row_theloai['TenTL']?></a>
  <ul>
  	<?php
  	$loaitin = DanhSachLoaiTin_Theo_TheLoai($idTL);
  	while ($row_loaitin = mysqli_fetch_array($loaitin)) {
  		
  	?>
  <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitin['idLT']?>"><?php echo $row_loaitin['Ten']?></a></li>
  <?php
}
  ?>
  
  </ul>
</li>
<?php
}
?>
</ul>
<br style="clear: left" />
</div>


