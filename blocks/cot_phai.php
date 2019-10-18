<!-- box cat -->
<?php
$idLT = 5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo TenLoaiTin(5); ?> </a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <?php
        $mottin = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
            $row_mottin = mysqli_fetch_array($mottin);
            ?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin["idTin"] ?>"><?php echo $row_mottin['TieuDe']?><</a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
                <?php
            $tinmoi_bontin = TinMoiNhat_TheoLoaiTin_BonTin($idLT);
            while ($row_tinmoi_bontin = mysqli_fetch_array($tinmoi_bontin)) {
                
            
                ?>
           <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoi_bontin["idTin"] ?>"><?php echo $row_tinmoi_bontin['TieuDe']?></a></h3>
            <?php

              }
            ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->


