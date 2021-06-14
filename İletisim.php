<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />


    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
      <a style="  float: right;" href="admin.php">Admin</a>
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


                          header("Refresh: 1; url=social_media_page.php");
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


    <!-- Bootstrap Responsive İletişim Formu Start *** -->
    <br /> <!-- Bir satır boşluk -->
    <h1 style="text-align:center;">İletişim Formu</h1> <!-- Form başlığı -->
    <br /> <!-- Bir satır boşluk -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div> <!-- 4 sütun Sol Tarafa Boş Verdik -->
            <div class="col-md-4"> <!-- 4 Sütun Ortaladık Başlangıcı -->

                <form action="İletisim.php" method="post"> <!-- Form Başlangıcı -->

                    <div class="form-group"> <!-- Ad Soyad Text Alanı -->
                        <input required="required" name="AdiSoyadi" type="text" class="form-control" placeholder="Adınız ve Soyadınız">
                        <small class="form-text text-muted">Lütfen adınızı ve soyadınızı girin.</small>
                    </div> <!-- Ad Soyad Text Alanı Bitti -->

                    <div class="form-group"> <!-- Mail Adresi Text Alanı -->
                        <input required="required" name="MailAdresi" type="email" class="form-control" placeholder="E-Posta Adresiniz">
                        <small class="form-text text-muted">Lütfen mail adresinizi girin.</small>
                    </div> <!-- Mail Adresi Text Alanı Bitti -->

                    <div class="form-group"> <!-- Mesaj Konusu Text Alanı -->
                        <input required="required" name="MesajKonusu" type="text" class="form-control" placeholder="Mesajınızın Konusu">
                        <small class="form-text text-muted">Lütfen mesajınızın konusunu girin.</small>
                    </div> <!-- Mesaj Konusu Text Alanı Bitti -->

                    <div class="form-group"> <!-- Mesaj Text Alanı -->
                        <textarea rows="6" cols="10" name="Mesaj" required="required" class="form-control" placeholder="Mesajınızını Yazın"></textarea>
                    </div> <!-- Mesaj Text Alanı Bitti -->

                    <button type="reset" class="btn btn-success">Temizle</button> <!-- Form Temizleme Butonu -->
                    <button type="submit" class="btn btn-primary">Gönder</button> <!-- Form Gönderme Butonu -->

                </form> <!-- Form Bitiş -->

            </div> <!-- 6 Sütun Ortaladık Tamamlandı -->
            <div class="col-md-4"></div> <!-- 4 sütun Sol Tarafa Boş Verdik -->
        </div>
    </div>
    <!-- Bootstrap Responsive İletişim Formu End *** -->

  </body>
</html>


<?php
error_reporting(0); //Hataları Gizle
//Form'dan Bütün Değerler Post Methodu ile Çekiliyor
$AdiSoyadi = trim(strip_tags($_POST['AdiSoyadi']));
$MailAdresi = trim(strip_tags($_POST['MailAdresi']));
$MesajKonusu = trim(strip_tags($_POST['MesajKonusu']));
$Mesaj = trim(strip_tags($_POST['Mesaj']));
//Form'dan Bütün Değerler Post Methodu ile Çekiliyor Tamamlandı


if($AdiSoyadi and $MailAdresi and $MesajKonusu and $Mesaj){ //Form'dan bütün değerler geliyorsa mail gönderme işlemini başlatıyoruz.

    $Mesaj = "
    Adı soyadı: $AdiSoyadi
    Mail Adresi : $MailAdresi
    Mail Konusu : $MesajKonusu
    Mesaj : $Mesaj
    ";

    //Php Smtp Mailler Sınıfını Sayfaya Dahil Ediyoruz
    include ('phpmail/class.phpmailer.php');
    include ('phpmail/class.smtp.php');
    //Php Smtp Mailler Sınıfını Sayfaya Dahil Ediyoruz Tamamlandı

    //Mail Bağlantı Ayarları
    //Mail Hangi Hesaptan Gönderilecek ise onun bilgilerini yazın.
    $MailSmtpHost = "smtp.yandex.com.tr";
    $MailUserName = "xtestmailx@yandex.com";
    $MailPassword = "123456789AS1";
    //Mail Bağlantı Ayarları Tamamlandı

    //Doldurulan Form Mail Olarak Kime Gidecek?
    $MailKimeGidecek = "xtestmailx@yandex.com";
    //Doldurulan Form Mail Olarak Kime Gidecek Tamamlandı

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = $MailSmtpHost; //Smtp Host
    $mail->SMTPSecure = 'TLS';  //yada tls
    $mail->Port = 587;  //SSL kullanacak portu 465  - TLS Portu 587
    $mail->Username = $MailUserName; //Smtp Kullanıcı Adı
    $mail->Password = $MailPassword; //Smtp Parola
    $mail->SetFrom($mail->Username, 'hako');
    $mail->AddAddress("$MailKimeGidecek", 'xtestmailx'); //Mailin Gideceği Adres ve Alıcı Adı
    $mail->CharSet = 'UTF-8'; //Mail Karakter Seti
    $mail->Subject = $MesajKonusu; //Mail Konu Başlığı
    $mail->MsgHTML("$Mesaj"); //Mail Mesaj İçeriği
    if($mail->Send()) {
        echo '<script>alert("Mail gönderildi!");</script>';
        echo '<script>document.location="index.php"</script>';
    } else {
        echo 'Mail gönderilirken bir hata oluştu: ' . $mail->ErrorInfo;
    }


} //Mail gönderme işlemi tamamlandı end.if

?>
