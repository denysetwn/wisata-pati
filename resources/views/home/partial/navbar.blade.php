<nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" style="max-width: 30px;">
        <h4 style="font-weight: bold; font-family: cursive;">GAGEGO</h4></a>
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
          <a class="nav-link" href="{{ route('wisata') }}" data-placement="bottom" title="Data Wisata">
            <i class="material-icons">unarchive</i> Wisata
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#loginModal" style="cursor: pointer;">
            <i class="fa fa-sign-in"></i>
          </a>
        </li> -->
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
        <div class="card-body">
          <div class="tab-content text-center">
            <div class="tab-pane active" id="login">
              <h3 class="text-center text-muted font-weight-bold mt-2">Silahkan Masuk</h3>
              <form class="form" method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="card-body">
                  @if(session('errors'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Sepertinya ada yang tidak beres:
                    <ul style="padding-left: 0px !important;">
                      @foreach ($errors->all() as $error)
                      <li class="list-unstyled">{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email Anda">
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="justify-content-center">
                    <button type="submit" class="btn btn-success">Masuk</button>
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