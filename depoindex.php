<!DOCTYPE HTML>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="depo.css">
</head>
<body>

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
</body>
</html>
	<?php  
	
	include("baglanti.php");
	
	 $do = @$_GET["do"];
	
	    switch ($do) {
			
			case "sil":
			include("deposil.php");
			break;
		
			default:
			include("depoekle.php");
			break;
			
			
		}
	
	?>

