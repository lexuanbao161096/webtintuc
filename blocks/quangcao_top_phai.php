<?php
$quangcao = QuangCao(1);
while ($row_quangcao =mysqli_fetch_array($quangcao)) {
	
?>
<img width="280" src="upload/quangcao/<?php echo $row_quangcao['urlHinh']?>">
<div style="height:10px"></div>
<?php
}
?>

