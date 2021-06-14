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
    <title>Üye Sil</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    
<div class="container" id=uye_sil>
    <div class="row">
        <div class="col">
            <h4 class="mt-5">Üye Sil</h4>
            <?php

            include "baglanti.php";
            $id = $_GET["id"];
            $uye_getir = $db->prepare("SELECT * FROM uyeler WHERE uye_id = ?");
            $uye_getir->execute(array($id));
            if ($uye_getir->rowCount()) {

                $uye_sil = $db->prepare("DELETE FROM uyeler WHERE uye_id = ?");
                $uye_sil->execute(array($id));
                if ($uye_sil->rowCount()) {
                    echo '
                    <div class="alert alert-success" role="alert">
                    Üye silindi.
                    </div>';
                    header("Location:uye_listesi.php");
                } else {
                    echo '
                    <div class="alert alert-danger" role="alert">
                    Üye silme başarısız. Bir sorun oluştu.
                    </div>';
                }

            } else {
                header("Location:uye_listesi.php");
            }

            ?>
        </div>
    </div>
</div>

</body>
</html>
