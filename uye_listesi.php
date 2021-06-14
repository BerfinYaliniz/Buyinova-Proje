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
    <title>Üye Listesi</title>
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
<div class="form-control>
    <div class="row">
        <div class="col">
            <h3 class="mt-5"><b>Üye Listesi</b></h3>
            <table class="table">
                <thead class="thead-light">
              
                <tr >
                    <th scope="col">ID</th>
                    <th scope="col"> Kullanıcı Adı</th>
                    <th scope="col">Şifre</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Üye Yönetimi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "baglanti.php";

                $uyeler = $db -> query("SELECT * FROM uyeler ORDER BY uye_id ASC", PDO::FETCH_OBJ);
                foreach ($uyeler as $uye) { ?>
                    <tr>
                        <th scope="row"><?php echo $uye->uye_id;?></th>
                        <td><?php echo $uye->uye_kadi;?></td>
                        <td><?php echo $uye->uye_sifre;?></td>
                        <td><?php echo $uye->uye_eposta;?></td>
                        <td>
                            <a href="uye_duzenle.php?id=<?php echo $uye->uye_id;?>"><button2 >[ Düzenle ]</button2></a>
                            <a href="uye_sil.php?id=<?php echo $uye->uye_id;?>"><button3>[ Sil ]</button3</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <a href="uye_ekle.php" class="btn btn-primary">Yeni Üye Ekle</a>
            <a  class="btn btn-danger" href="index.php?sayfa=cikis-yap"><b>ÇIKIŞ YAP</b></a>
           
        </div>
    </div>
</div>
</body>
</html>
