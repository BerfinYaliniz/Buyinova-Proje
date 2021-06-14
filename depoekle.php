<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css">
<div class="topnav">
<ul>
<a  href="index.php">Anasayfa</a>
<a href="uye_listesi.php">Üye İşlemleri</a>
  <a style="  float: right;" href="cikis.php">Çıkış</a>
  <a href="social_media_page.php">Meydan</a>
 <a class="active" href="depoekle.php">Depo</a>
</ul>
</div>
<?php  
include("baglanti.php");
   if($_FILES){
	   
	  
       $maxBoyut       = 7000000;
	   $dosyaUzantisi  = substr($_FILES["dosya"]["name"],-4,4);
	   $dosyaAdi       = rand(1,99999).$dosyaUzantisi;
	   $dosyaYolu      = "dosya/".$dosya_ad;
	   
	   
	     if($_FILES["dosya"]["size"]>$maxBoyut){
			 
			 echo "<h2>Dosya boyutu 7000kb'dan yuksek olamaz...</h2>";
			 
		 }else {
			 
			 
			 $dosya = $_FILES["dosya"]["type"];
			 
		 if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif" || $dosya == "application/zip" || $dosya == "application/pdf" || $dosya == "application/docx"){
			 
			 
			 if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				 
				 
				 $tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);
				 
				 $kayit = $db->prepare("insert into depo set  
				 
				               dosya_ad=?,
							  dosya_turu=?,
							   dosya_size=?
				 
				 ");
				 
				 $resimTuru = $_FILES["dosya"]["type"];
				 $resimSize = $_FILES["dosya"]["size"];
				 
				 $kayit->execute(array($dosyaYolu,$resimTuru,$resimSize));
				 
				 if($tasi){
					 
					echo "<h2>Dosya basarıyla yuklendi...</h2>";
                  
                   header("refresh: 1; url=depoekle.php");				  
					 
				 }
			 
		 }else {
			 
			 
			echo "<h2>Dosya formatı desteklenmiyor.</h2>"; 
			 
			 
		 }
		}
   }
}

	    ?>  
		
	<h2>Dosyalarınızı depolayın..</h2>
		<?php
		
		   
		    $resim = $db->prepare("select * from depo");
			$resim->execute(array());
			$d = $resim->fetchAll(PDO::FETCH_ASSOC);
		
		     foreach($d as $m){
             } 
				   ?>
				 <div class="liste">
				   <div class="dosya">
					   <form action="" method="post" enctype="multipart/form-data">
				   <img src="<?php echo $m["dosya_ad"];?>" width="400" height="200" alt="" /> <br />
				   <b>Dosya Adı: <?php echo $m["dosya_ad"];?></b> <br>
				   <span> <b> Dosya Türü : <?php echo $m["dosya_turu"];?> </b></span> <br />
				   <span><b> Dosya Boyutu : <?php echo $m["dosya_size"];?> kb <b></span> <br /> 
					<input class="form-control"type="file" name="dosya" /><br>
					    <button  class="btn btn-primary mb-2" type="submit">Yükle</button> 
						 <a href="deposil.php?id=<?php echo $id; ?>" class="btn btn-danger">Sil</a><br>

		  </div>	
		</form>
		</div>
