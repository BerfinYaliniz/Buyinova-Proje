<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="duyuru.css">
  <script src="script.js"></script>


<!-- footer css
<style>
/*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#263238; min-height:100px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:30px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}

</style>
-->
  <!-- slide show css  -->


</head>
<body >

<div class="topnav">
<ul>
<a class="active" href="#Anasayfa">Anasayfa</a>
  <a href="#Duyuru">Duyurular</a>
  <a href="İletisim.php">İletişim</a>
  <a style="  float: right;" href="admin.php">Admin</a>
  <a style="  float: right;" href="giris.php">Giriş Yap</a>
  <a style="  float: right;" href="kayit_ol.php">Kaydol</a>
  <a href="takim.html">Takımımız</a>


</ul>
</div>

<div class="#main" id="Anasayfa">


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


  <div class="slideshow-container">

  <div class="mySlides fade">
    <img src="resimler/etkinlik.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="resimler/buogrenciprojeleri.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="resimler/yokanadoluprojesi.jpg" style="width:100%">
  </div>

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

<div class="#main" id="Duyuru">

<button class="accordion">09/06/2021 Yapay Zeka, Robotik ve Veri Bilimi - Global AI Hub Semineri</button>
<div class="panel">
  <p> Global AI Hub tarafından Yapay Zeka, Robotik ve Veri Bilimi alanlarında 9 Haziran Çarşamba günü seminer verilecektir. Tüm öğrencilerimizin katılmaları faydalarına olacaktır. </p>
</div>

<button class="accordion">08/06/2021 Bilgisayar Mühendisliği Bölümü 2020-2021 Bahar Dönemi Ders Değerlendirme Anketleri</button>
<div class="panel">
  <p>1.Sınıf Dersleri:</p>
  <p>BSM102 Bilgisayar Mühendisliğine Giriş dersi ders değerlendirme anketi için <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=jAmDW8eKRU-XzHZReFSlBR5uEw0md4pKi0vuEveLm6JURTlGWlo4MTNKOVVIUE5QRTVYUk1UNTZSMS4u">tıklayınız.</a></p>
  <p>BSM104 Algoritmalar ve Programlama II dersi ders anketi değenlendirme için <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=jAmDW8eKRU-XzHZReFSlBR5uEw0md4pKi0vuEveLm6JURVFOV05RVERENUc3MkdMSk1XUVE3OU0yMS4u">tıklayınız.</a></p>
  <p>BSM106 İş Sağlığı ve Güvenliği II dersi ders değerlendirme anketi için <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=jAmDW8eKRU-XzHZReFSlBR5uEw0md4pKi0vuEveLm6JUNjFXTzVVR0dLVU0xRFNZSE1GUVdEMEhTVS4u">tıklayınız.</a></p>
  <p>MAT102 Matematik II dersi ders değerlendirme anketi için <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=jAmDW8eKRU-XzHZReFSlBR5uEw0md4pKi0vuEveLm6JUNVo1Wkw0WTNJMVZWRUFLWE9CQk5DQVBTNS4u">tıklayınız.</a></p>
</div>

<button class="accordion">07/06/2021 Teknik Seçmeli Ders Anketi ( Tüm Öğrenciler İçin - Önemli )</button>
<div class="panel">
  <p>Tüm Öğrencilerimizin Dikkatine!</p>
  <p>Kaliteli eğitim-öğretimin yanında öğrenci ile dialog kurmayı ilke edinen Bilgisayar ve Elektrik-Elektronik Mühendisliği Bölümleri,Teknik Seçmeli Ders Havuzunu genişletmek amacıyla</p>
  <p>işbirliği yapmış olup bu kapsamda görüş ve önerilerinize değer vermektedir. Aşağıda bağlantı adresi paylaşılan anketin tüm öğrencilerimiz tarafından doldurulması önem arz etmektedir.</p>
  <p>Anketi yanıtlayarak Bölümlerimizdeki eğitim süreçlerine destek olduğunuz için şimdiden teşekkür ederiz.</p>
  <p>Anket Bağlantısı: <a href="https://forms.office.com/r/ZesFwwLTqf">https://forms.office.com/r/ZesFwwLTqf</a></p>
  <p>Not: Son erişim tarihi 13 Haziran 2021 Saat 23:45'dir.</p>
</div>


<!-- slide show script  -->
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
  </script>


<!-- duyuru script  -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>

<?php
require('footer.PHP');
?>
</body>
</html>
