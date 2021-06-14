<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="depo.css">
<div class="topnav">
<ul>
<a  href="index.php">Anasayfa</a>
  <a href="index.php">Duyurular</a>
  <a href="İletisim.php">İletişim</a>
  <a href="giris.php">Giriş Yap</a>
  <a href="kayit_ol.php">Kaydol</a>
 <a class="active" href="depoekle.php">Depo</a>
  <a href="takim.html">Takımımız</a>
</ul>
</div>

<?php 

  if($_FILES){
	$id = $_GET["id"];  
	
	$maxBoyut       = 700000;
	   $dosyaUzantisi  = substr($_FILES["dosya"]["name"],-4,4);
	   $dosyaAdi       = rand(1,99999).$dosyaUzantisi;
	   $dosyaYolu      = "dosya/".$dosyaAdi;
	   
	   
	     if($_FILES["dosya"]["size"]>$maxBoyut){
			 
			 echo "<h2>dosya boyutu 700kb'dan yuksek olamaz...</h2>";
			 
		 }else {
			 
			 
			 $dosya = $_FILES["dosya"]["type"];
			 
		 if($dosya == "image/jpeg" || $dosya == "image/png" || $dosya == "image/gif" || $dosya == "application/zip"){
			 
			 
			 if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
				 
				 
				 $tasi = move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);
				 
             $bul = $db->prepare("select * from depo where dosya_id=?");
			 $bul->execute(array($id));
			$v = $bul->fetch(PDO::FETCH_ASSOC);
			 
			  unlink($v["resim_adi"]);
            				 

				$kayit = $db->prepare("update  depo set  
				 
				               dosya_ad=?,
							   dosya_turu=?,
							   dosya_size=? where dosya_id=?
				 
				 ");
				 
				 $resimTuru = $_FILES["dosya"]["type"];
				 $resimSize = $_FILES["dosya"]["size"];
				 
				 $kayit->execute(array($dosyaYolu,$resimTuru,$resimSize,$id));
				 
				 if($tasi){
					 
					echo "<h2>dosya basarıyla yuklendi...</h2>";
                  
                   header("refresh: 2; url=depoekle.php");				  
					 
				 }else {
					 
					 echo "<h2>dosya tasınırken bir hata olustu...</h2>";
					 
				 }
				 
				 
			 } else {
				 
				 echo "<h2>dosya tasınırken bir hata olustu...</h2>";
				 
			 }
			 
			 
		 }else {
			 
			 
			echo "<h2>dosya formati sadece jpg,png yada gif formatinda olmalıdır...</h2>"; 
			 
			 
		 }
			 
			 
		 }
	   
	  
	  
	  
	  
  }else {
	 
		  $id = $_GET["id"];
		 $b = $db->prepare("select * from depo where dosya_id=?");
		 $b->execute(array($id));
		  $b = $b->fetch(PDO::FETCH_ASSOC);
	  
	  ?>
	    <div class="dosya"> 
		<h2>Dosya duzenle..</h2>
		<img src="<?php echo $b["dosya_ad"];?>" width="200" height="100" alt="" />
		<form action="" method="post" enctype="multipart/form-data"> 
		<input type="file" name="dosya" />
		<button type="submit">duzenle</button>
		
		</form>
		</div>
	  <?php
	  
  }


?>