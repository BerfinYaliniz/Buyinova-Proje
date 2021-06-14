<?php
// UYE GIRISI YAPILMAMISSA GIRIS SAYFASINA YONLENDIR
include "baglanti.php";
if(!$_SESSION["login"]){
header("Location:giris.php");
}
?>

<?php
include "baglanti.php";
$id = $_GET["id"];
$uye_getir = $db->prepare("SELECT * FROM uyeler WHERE uye_id = ?");
$uye_getir->execute(array($id));
if ($uye_getir) {
    $uye = $uye_getir->fetch(PDO::FETCH_OBJ);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Üye Düzenle</title>
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
            <h3 class="mt-5">Üye Düzenle</h3>
            <?php
            if (isset($_POST["uye_kadi"])) {
                $uye_kadi = trim($_POST["uye_kadi"]);
                $uye_sifre = trim($_POST["uye_sifre"]);
                $uye_eposta = trim($_POST["uye_eposta"]);
                if (empty($uye_kadi) || empty($uye_sifre) || empty($uye_eposta)) {
                    echo '
                       <div class="alert alert-danger" role="alert">
                       Yıldızlı alanlar boş bırakılamaz.
                      </div>';
                } else {
                    $ayni_uye_varmi = $db->prepare("SELECT * FROM uyeler WHERE uye_kadi = ? AND uye_id != ?");
                    $ayni_uye_varmi->execute(array($uye_kadi, $id));
                    if ($ayni_uye_varmi->rowCount()) {
                        echo '
                           <div class="alert alert-danger" role="alert">
                           Bu kullanıcı adı zaten kayıtlı. Farklı bir kullanıcı adı deneyin.
                          </div>';
                    } else {
                        $uye_guncelle = $db->prepare("UPDATE uyeler SET uye_kadi = ?, uye_sifre = ?, uye_eposta = ? WHERE uye_id = ?");
                        $uye_guncelle->execute(array($uye_kadi, $uye_sifre, $uye_eposta, $id));
                        if ($uye_guncelle){
                            echo '
                           <div class="alert alert-success" role="alert">
                           Değişiklikler kayıt edildi. Listeye yönlendirilecek.
                           </div>';
                            header("Location:uye_listesi.php");
                        }else{
                            echo '
                           <div class="alert alert-danger" role="alert">
                           Üye güncelleme başarısız. Bir sorun oluştu.
                           </div>';
                        }
                    }
                }
            }
            ?>
            <form method="post" action="">
                <div class="form-group">
                    <label>Kullanıcı Adı: (*)</label>
                    <input type="text" class="form-control" placeholder="Kullanıcı adı giriniz" name="uye_kadi"
                           value="<?php echo $uye->uye_kadi; ?>">
                </div>
                <div class="form-group">
                    <label>Şifre: (*)</label>
                    <input type="text" class="form-control" placeholder="Şifre giriniz" name="uye_sifre"
                           value="<?php echo $uye->uye_sifre; ?>">
                </div>
                <div class="form-group">
                    <label>E-posta: (*)</label>
                    <input type="email" class="form-control" placeholder="E-posta adresi giriniz" name="uye_eposta"
                           value="<?php echo $uye->uye_eposta; ?>">
                </div>

                <button type="submit" class="btn btn-primary">Düzenlemeyi Kaydet</button>
                <a href="uye_listesi.php" class="btn btn-primary">Üye Listesi</a>
                <a href="index.php?sayfa=cikis-yap" class="btn btn-danger ">ÇIKIŞ YAP </a>
            </form>
        </div>
    </div>
</div>


</body>
</html>
