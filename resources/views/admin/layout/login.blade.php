@extends('admin.partial.app')
@section('title', 'Login')
@section('content')
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="card-body">
                <div class="tab-content text-center">
                    <div class="tab-pane active" id="login">
                        <h3 class="text-center text-muted font-weight-bold mt-2">Silahkan Masuk</h3>
                        <form class="form" method="POST" action="{{ url('admin/login') }}">
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
@endsection