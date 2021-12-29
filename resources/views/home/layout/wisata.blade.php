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
                                    </thead>
                                    <tbody>
                                        @foreach($wisatas as $key => $w)
                                        <tr>
                                            <td>{{ $i++ }} </td>
                                            <td>
                                                @if($w->getFirstMediaUrl('fotos'))
                                                <img src="{{ $w->getFirstMediaUrl('fotos') }}" alt="Foto {{ $w->name }}" class="img-fluid" style="min-width: 80px; max-width: 150px">
                                                @endif
                                            </td>
                                            <td>{{ $w->name }}</td>
                                            <td>{{ $w->address }}, {{ $w->village->name }}, {{ $w->village->district->name }}, Pati, Jawa Tengah</td>
                                            <td>{{ $w->contact }}</td>
                                            <td>{{ $w->desc }}</td>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection