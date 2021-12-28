@extends('home.partial.app')
@section('title', 'wisata')
@section('content')
<div class="wrapper">
    <div class="jumbotron"><br><br>
        <!-- Navbar -->
        @include('home.partial.navbar')
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Objek Wisata</h4>
                                <p class="card-category">laman ini memuat pengelolaan data data objek wisata</p>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover" id="dataTable">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Deskripsi</th>
                                        <th>Rating</th>
                                    </thead>
                                    <tbody>
                                        @foreach($wisatas as $key => $w)
                                        <tr>
                                            <td>{{ $i++ }} </td>
                                            <td>{{ $key }} foto</td>
                                            <td>{{ $w->name }}</td>
                                            <td>{{ $w->address }}, {{ $w->village->name }}, {{ $w->village->district->name }}, Pati, Jawa Tengah</td>
                                            <td>{{ $w->contact }}</td>
                                            <td>{{ $w->desc }}</td>
                                            <td>
                                                @if($w->rating()->count())
                                                <i class="material-icons text-warning align-middle">star</i>
                                                <span>5</span>
                                                @else "No Rating"
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('home.partial.footer')
        <!-- End Footer -->
    </div>
</div>
@endsection