<?php
// UYE GIRISI YAPILMAMISSA GIRIS SAYFASINA YONLENDIR
include "baglanti.php";
if ($_SESSION["login"]) {

}
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Üye Girişi</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topnav">
<ul>
<a  href="index.php">Anasayfa</a>
  <a href="index.php">Duyurular</a>
  <a href="İletisim.php">İletişim</a>
  <a style="  float: right;" href="giris.php">Giriş Yap</a>
  <a style="  float: right;" href="kayit_ol.php">Kaydol</a>
  <a href="takim.html">Takımımız</a>
</ul>
</div>
<div class="container">
    <div class="col">
        <?php
        
        if ($_POST) {
            $kullanici_adi = trim($_POST["kullanici_adi"]);
            $sifre = trim($_POST["sifre"]);
            if (!$kullanici_adi || !$sifre) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Hata!</strong> Kullanıcı adı veya şifre alanları boş bırakılamaz!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
            } else {
                $uye_varmi = $db->prepare("SELECT * FROM uyeler WHERE uye_kadi = ? AND uye_sifre = ?");
                $uye_varmi->execute(array($kullanici_adi, $sifre));
                if ($uye_varmi->rowCount() > 0) {
                    $uye = $uye_varmi->fetch(PDO::FETCH_OBJ);
                    $_SESSION["login"] = true;
                    $_SESSION["uye"] = $uye->uye_kadi;
                    $_SESSION["id"] = $uye->uye_id;

                    header("Refresh: 1; url=uye_listesi.php");
                    echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Giriş Başarılı.</strong> Üye yönetim sayfasına yönlendiriliyorsunuz...
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
                } else {
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Hata!</strong> Kullanıcı adı veya şifre hatalı! Lütfen tekrar deneyiniz.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                    ';
                }
            }
        }
        ?>
        <h4 class="mt-5">Admin Girişi</h4>
        <form method="post" action="">
            <div class="form-group">
                <label>Kullanıcı Adı: (*)</label>
                <input type="text" class="form-control" placeholder="Kullanıcı adınızı giriniz" name="kullanici_adi">
            </div>
            <div class="form-group">
                <label>Şifre: (*)</label>
                <input type="password" class="form-control" placeholder="Şifrenizi giriniz" name="sifre">
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
			<a href="kayit_ol.php" class="btn btn-primary">Kayıt Ol</a>
        </form>

    </div>
</div>

</body>
</html>
