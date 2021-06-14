<!DOCTYPE html>
<html lang="tr" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="social.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
     <title>Hesap Ayarları</title>
</head>
<body>
<div class="topnav">
<ul>
<a  href="index.php">Anasayfa</a>
<a class="active" href="social_media_page.php">Meydan</a>
  <a href="İletisim.php">İletişim</a>
  <a style="  float: right;" href="cikis.php">Çıkış Yap</a>
  <a href="takim.html">Takımımız</a>
  <a style="  float: right;" href="account_settings.php">Hesap Ayarları</a>
  
</ul>
</div>
<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Hesap Ayarları
    </h4>

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Genel</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Şifre değiştir</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Bilgi</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Sosyal bağlantılar</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Bildirimler</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

              <div class="card-body media align-items-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80">
                <div class="media-body ml-4">
                  <label class="btn btn-outline-primary">
                    Yeni fotoğraf yükle
                    <input type="file" class="account-settings-fileinput">
                  </label> &nbsp;
                  <button type="button" class="btn btn-default md-btn-flat">Sıfırla</button>

                  <div class="text-light small mt-1">İzin verilenler JPG, GIF ve PNG. Maksimum boyut 800K</div>
                </div>
              </div>
              <hr class="border-light m-0">

              <div class="card-body">
                <div class="form-group">
                  <label class="form-label">Kullanıcı Adı</label>
                  <input type="text" class="form-control mb-1" value="hako">
                </div>
                <div class="form-group">
                  <label class="form-label">İsim</label>
                  <input type="text" class="form-control" value="Nelle Maxwell">
                </div>
                <div class="form-group">
                  <label class="form-label">E-mail</label>
                  <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                  <div class="alert alert-warning mt-3">
                    E-postanız onaylanmadı. Lütfen gelen kutunuzu kontrol edin.<br>
                    <a href="javascript:void(0)">Doğrulamayı tekrar gönder</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Mevcut şifre</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Yeni şifre</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Tekrar yeni şifre</label>
                  <input type="password" class="form-control">
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="account-info">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Biografi</label>
                  <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                </div>
                <div class="form-group">
                  <label class="form-label">Doğum günü</label>
                  <input type="text" class="form-control" value="May 3, 1995">
                </div>
                <div class="form-group">
                  <label class="form-label">Ülke</label>
                  <select class="custom-select">
                    <option>USA</option>
                    <option selected="">Türkiye</option>
                    <option>UK</option>
                    <option>Germany</option>
                    <option>France</option>
                  </select>
                </div>


              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">İletişim</h6>
                <div class="form-group">
                  <label class="form-label">Telefon</label>
                  <input type="text" class="form-control" value="+0 (123) 456 7891">
                </div>
                <div class="form-group">
                  <label class="form-label">Website</label>
                  <input type="text" class="form-control" value="">
                </div>

              </div>

            </div>
            <div class="tab-pane fade" id="account-social-links">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" value="https://twitter.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" value="https://www.facebook.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Google+</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">LinkedIn</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" value="https://www.instagram.com/user">
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="account-notifications">
              <div class="card-body pb-2">

                <h6 class="mb-4">Aktivite</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Birisi gönderime yorum yaptığında bana e-posta gönder</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Biri gönderime cevap verdiğinde bana e-posta gönder</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Biri beni takip ettiğinde bana e-posta gönder</span>
                  </label>
                </div>
              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">Kullanım</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Haberler ve duyurular</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Haftalık ürün güncellemeleri</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Haftalık özet</span>
                  </label>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-right mt-3">
      <button type="button" class="btn btn-primary">Değişiklileri kaydet</button>&nbsp;
      <a href="social_media_page.php" >
      <button type="button" class="btn btn-default">İptal</button>
    </a>
    </div>

  </div>


<script type="text/javascript">

</script>


</body>
</html>
