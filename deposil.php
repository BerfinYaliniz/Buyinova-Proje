
<?php 
include'baglanti.php';
  $id = $_GET["id"];

  $select = $db->prepare("select * from depo where dosya_id=?");
  $select->execute(array($id));
  $bul =  $select->fetch(PDO::FETCH_ASSOC); 
  
 unlink($bul["dosya_ad"]);  
 
 
    $sil = $db->prepare("delete from depo where dosya_id=?");
	$ok = $sil->execute(array($id));
	
	if($ok){
		
		echo "<h2>Dosya başarıyla silindi</h2>";
		
		header("refresh: 0.5; url=depoekle.php");
		
	}else {
		
	 echo "<h2>Dosya silinirken bir hata olustu..</h2>";	
		
		
	}
	

?>