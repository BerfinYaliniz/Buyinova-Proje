<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>BUYINOVA MEYDAN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="socialpage2.css">
<link rel="stylesheet" href="social_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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



<!-- social media -->
<div class="container">
<div class="main-body p-0">
    <div class="inner-wrapper">
        <!-- Inner sidebar -->
        <div class="inner-sidebar">
            <!-- Inner sidebar header -->
            <div class="inner-sidebar-header justify-content-center">
                <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    YENİ TARTIŞMA
                </button>
            </div>
            <!-- /Inner sidebar header -->

            <!-- Inner sidebar body -->
            <div class="inner-sidebar-body p-0">
                <div class="p-3 h-100" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: -16px;">
                        <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 16px;">
                                        <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">Tüm Konular</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Bu haftanın popülerleri</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Tüm zamanların popülerleri</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Çözülenler</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Çözülmemişler</a>
                                            <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon">Henüz cevaplanmamışlar</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
                </div>
            </div>
            <!-- /Inner sidebar body -->
        </div>
        <!-- /Inner sidebar -->

        <!-- Inner main -->
        <div class="inner-main">
            <!-- Inner main header -->
            <div class="inner-main-header">
                <a class="nav-link nav-icon rounded-circle nav-link-faded mr-3 d-md-none" href="#" data-toggle="inner-sidebar"><i class="material-icons">arrow_forward_ios</i></a>
                <select class="custom-select custom-select-sm w-auto mr-1">
                    <option selected="">En son</option>
                    <option value="1">Popüler</option>
                    <option value="3"></a> Çözülmüş</option>
                    <option value="3">Çözülmemiş</option>
                    <option value="3">Henüz cevaplanmamış</option>
                </select>
                <span class="input-icon input-icon-sm ml-auto w-auto">
                    <input type="text" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Ara" />
                </span>
            </div>
            <!-- /Inner main header -->

            <!-- Inner main body -->

            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Gerçek zamanlı veri</a></h6>
                                <p class="text-secondary">
                                Ben laravel'de acemiyim ve gösterge paneli analizlerim için veri tabanından gerçek zamanlı olarak veri almak istiyorum ve ajax ile bir çözüm buldum ama herhangi birinin basit bir çözümü varsa işe yaramazsa yardımcı olacaktır.
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)">Mehmet</a> cevaplandı <span class="text-secondary font-weight-bold">13 dakika önce</span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">Bir model 4 masa</a></h6>
                                <p class="text-secondary">
                                Ben laravel'de acemiyim ve gösterge paneli analizlerim için veri tabanından gerçek zamanlı olarak veri almak istiyorum ve ajax ile bir çözüm buldum ama herhangi birinin basit bir çözümü varsa işe yaramazsa yardımcı olacaktır.
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)">Bilal</a> cevapladı <span class="text-secondary font-weight-bold">14 saat önce</span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 45</span>
                                <span><i class="far fa-comment ml-2"></i> 4</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body"> Yetkilendirme girişimi false döndürür</a></h6>
                                <p class="text-secondary">
                                Ben laravel'de acemiyim ve gösterge paneli analizlerim için veri tabanından gerçek zamanlı olarak veri almak istiyorum ve ajax ile bir çözüm buldum ama herhangi birinin basit bir çözümü varsa işe yaramazsa yardımcı olacaktır.
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)">Mehmet</a> cevapladı <span class="text-secondary font-weight-bold">18 saat önce</span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 70</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                    <li class="page-item disabled">
                        <span class="page-link has-icon"><i class="material-icons">sol</i></span>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                    <li class="page-item active"><span class="page-link">2</span></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item">
                        <a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">sağ</i></a>
                    </li>
                </ul>
            </div>
            <!-- /Forum List -->

            <!-- Forum Detail -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Geri</a>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="javascript:void(0)" class="card-link">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" width="50" alt="User" />
                                <small class="d-block text-center text-muted">Pro</small>
                            </a>
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-secondary">Ahmet</a>
                                <small class="text-muted ml-2">1 saat önce</small>
                                <h5 class="mt-1">Gerçek zamanlı veri alma</h5>
                                <div class="mt-3 font-size-sm">
                                    <p>Merhabaa :)</p>
                                    <p>
                                    Ben laravel'de acemiyim ve gösterge paneli analizlerim için veri tabanından gerçek zamanlı olarak veri almak istiyorum ve ajax ile bir çözüm buldum ama herhangi birinin basit bir çözümü varsa işe yaramazsa yardımcı olacaktır.
                                    </p>
                                    <p>Teşekkür</p>
                                </div>
                            </div>
                            <div class="text-muted small text-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i> 19</span>
                                <span><i class="far fa-comment ml-2"></i> 3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="media forum-item">
                            <a href="javascript:void(0)" class="card-link">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle" width="50" alt="User" />
                                <small class="d-block text-center text-muted">Pro</small>
                            </a>
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)" class="text-secondary">Mehmet</a>
                                <small class="text-muted ml-2">1 saat önce</small>
                                <div class="mt-3 font-size-sm">
                                    <p>Ajax çağrılarınızda tam olarak ne işe yaramaz?</p>
                                    <p>Ayrıca WebSockets, bir panodaki gerçek zamanlı veriler için harika bir çözümdür. Laravel bunu yayın yoluyla kullanıma hazır olarak sunuyor</p>
                                </div>
                                <button class="btn btn-xs text-muted has-icon"><i class="fa fa-heart" aria-hidden="true"></i>1</button>
                                <a href="javascript:void(0)" class="text-muted small">Yanıtla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Forum Detail -->

            <!-- /Inner main body -->
        </div>
        <!-- /Inner main -->
    </div>

    <!-- New Thread Modal -->
    <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">Yeni Tartışma</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Konu</label>
                            <input type="text" class="form-control" id="threadTitle" placeholder="Konu gir" autofocus="" />
                              
                        </div>
                        <textarea class="form-control summernote" style="display: none;"></textarea>

                        <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                            <label class="custom-file-label" for="customFile">Ek dosya</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">İptal</button>
                        <button type="button" class="btn btn-primary">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>





<script type="text/javascript">

</script>


<script type="text/javascript">
/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>
</body>
</html>
