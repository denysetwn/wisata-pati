<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" style="max-width: 40px;">
               <img class="img-fluid" src="./assets/img/Logo_Kabupaten_Pati.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">
                        <i class="material-icons">unarchive</i> Rekomendasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#loginModal" style="cursor: pointer;">
                        <i class="fa fa-sign-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- login modal view -->
<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card card-nav-tabs">
                <div class="card-header card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#login" data-toggle="tab">
                            <i class="material-icons">login</i>
                            Masuk
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="login">
                      <h3 class="title text-center text-muted mt-2">Silahkan Masuk</h3>
                      <form class="form" method="" action="">
                          <div class="card-body">
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">mail</i>
                                </span>
                              </div>
                              <input type="email" class="form-control" placeholder="Email Anda">
                            </div>
                            <div class="input-group mb-4">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="justify-content-center">
                              <a href="{{ route('dashboardAdmin')}}" class="btn btn-success">Masuk</a>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                
            </div>
        </div>
    </div>
  </div>