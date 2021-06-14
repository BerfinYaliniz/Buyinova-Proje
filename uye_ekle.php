<?php
// UYE GIRISI YAPILMAMISSA GIRIS SAYFASINA YONLENDIR
include "baglanti.php";
if(!$_SESSION["login"]){
header("Location:giris.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yeni Üye Ekle</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<div class="topnav">
<ul>
  <a href="duyuru.html">Duyurular</a>
  <a href="İletisim.php">İletişim</a>
  <a style="  float: right;" href="cikis.php">Çıkış Yap</a>
 <a href="depoekle.php">Depo</a>
  <a href="takim.html">Takımımız</a>
</ul>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="mt-8">Yeni Üye Ekle</h4>
            <?php
if (isset($_POST["uye_kadi"])) {
  include "baglanti.php";

   $uye_kadi = trim($_POST["uye_kadi"]);
   $uye_sifre = trim($_POST["uye_sifre"]);
   $uye_eposta = trim($_POST["uye_eposta"]);
   $onay = trim($_POST["onay"] ? 1 : 0);
    if (empty($uye_kadi) || empty($uye_sifre) || empty($uye_eposta)) {
      echo '
       <div class="alert alert-danger" role="alert">
       Yıldızlı alanları lütfen boş bırakmayınız.
      </div>';
    } else {
       if ($onay != 0) {
        echo '
        <div class="alert alert-danger" role="alert">
        Kuralları kabul etmediniz.
        </div>';
       } else {
         $ayni_uye_varmi = $db -> prepare("SELECT * FROM uyeler WHERE uye_kadi = ?");
         $ayni_uye_varmi -> execute(array($uye_kadi));
          if($ayni_uye_varmi -> rowCount()){
            echo '
            <div class="alert alert-danger" role="alert">
            Bu kullanıcı adı zaten kullanılıyor. Farklı bir kullanıcı adı deneyin.
            </div>';
          }else{
             $uye_ekle = $db->prepare("INSERT INTO uyeler (uye_kadi, uye_sifre, uye_eposta) VALUES (?,?,?)");
             $uye_ekle -> execute(array($uye_kadi, $uye_sifre, $uye_eposta));
             if ($uye_ekle){
               echo '
               <div class="alert alert-success" role="alert">
               Kayıt işlemi tamamlandı.
               </div>';
             }else{
               echo '
               <div class="alert alert-danger" role="alert">
               Üye kaydı başarısız. Bir sorun oluştu.
               </div>';
              }
          }
       }
    }
}
?>
            <form method="post" action="">
                <div class="form-group">
                    <label>Kullanıcı Adı: (*)</label>
                    <input type="text" class="form-control" placeholder="Kullanıcı adı giriniz" name="uye_kadi">
                </div>
                <div class="form-group">
                    <label>Şifre: (*)</label>
                    <input type="password" class="form-control" placeholder="Şifre giriniz" name="uye_sifre">
                </div>
                <div class="form-group">
                    <label>E-posta: (*)</label>
                    <input type="email" class="form-control" placeholder="E-posta adresi giriniz" name="uye_eposta">
                </div>

                <button type="submit" class="btn btn-primary">Yeni Üye Ekle</button>
                <a href="uye_listesi.php" class="btn btn-primary">Üye Listesi</a>
                <a  class="btn btn-danger" href="index.php?sayfa=cikis-yap"><b>ÇIKIŞ YAP</b></a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
