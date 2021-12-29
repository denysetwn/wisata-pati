@extends('admin.partial.app')
@section('title', 'Data')
@section('content')
<div class="wrapper">
  <!--color are available in data-color="purple | azure | green | orange | danger"-->
  <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
    <div class="logo">
      <a href="" class="simple-text logo-normal">
        <h4 style="font-weight: bold; font-family: cursive;">GAGEGO</h4>
      </a>
    </div>
    <!-- Sidebar -->
    @include('admin.partial.sidebar')
    <!-- End Sidebar -->
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    @include('admin.partial.navbar')
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
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($wisatas as $key => $w)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>
                        @if($w->getFirstMediaUrl('fotos'))
                        <img src="{{ $w->getFirstMediaUrl('fotos') }}" alt="Foto {{ $w->name }}" class="img-fluid" style="min-width: 80px; max-width: 150px">
                        @endif
                      </td>
                      <td>{{ $w->name }}</td>
                      <td>{{ $w->address }}, {{ $w->village->name }}, {{ $w->village->district->name }}, Pati, Jawa Tengah</td>
                      <td>{{ $w->contact }}</td>
                      <td>{{ $w->desc }}</td>
                      <td>
                        <button class="btn btn-success py-1" data-placement="top" title="Edit Objek Wisata" data-toggle="modal" data-wisataid="{{ $w->id }}" data-target="#editwisata">Edit</button>
                        <button class="btn btn-danger py-1" data-placement="top" title="Hapus Objek Wisata" data-toggle="modal" data-wisataid="{{ $w->id }}" data-wisataname="{{ $w->name }}" data-target="#deletewisata">Hapus</button>
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
    <!-- Modal  -->
    <div class="modal fade" id="deletewisata" tabindex="-1" role="dialog" aria-labelledby="deletewisatalabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deletewisatalabel">Konfirmasi Hapus Objek Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus Objek wisata ini?</p>
          </div>
          <div class="modal-footer">
            <form action="{{ route('admin.delete.wisata') }}" method="POST">
              @csrf
              <input type="hidden" name="wisataid" id="wisataid">
              <button type="submit" class="btn btn-success">Konfirmasi</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Ends -->
    <!-- Modal Start -->
    <div class="modal fade" id="editwisata" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editwisatalabel">Edit Data Wisata</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('admin.edit.wisata') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <input type="hidden" name="wisataid" id="wisataid">
              <div class="form-group my-2">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="nama" required>
              </div>
              <div class="form-group my-2">
                <label for="district">Kecamatan</label>
                <select class="form-control" name="district" id="district">
                  @foreach($districts as $d)
                  <option value="{{$d->id}}"> {{ $d->name }} </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group my-2">
                <label for="village">Desa/ Kelurahan</label>
                <select class="form-control" name="village_id" id="village">
                </select>
              </div>
              <div class="form-group my-2">
                <label for="address">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="alamat (cth:jl.mangga)" required>
              </div>
              <div class="form-group my-2">
                <label for="contact">Kontak</label>
                <input type="text" class="form-control" id="contact" name="contact" placeholder="kontak yang bisa dihubungi" required>
              </div>
              <div class="form-group my-2">
                <label for="desc">Deskripsi</label>
                <textarea name="desc" class="form-control" id="desc" name="desc" cols="30" rows="10" placeholder="deskripsi" required></textarea>
              </div>
              <div class="form-group my-2">
                <label for="biaya">Biaya</label>
                <input type="text" class="form-control" id="biaya" name="biaya" placeholder="biaya rata rata yang dibutuhkan" required>
              </div>
              <div class="form-group my-2">
                <label for="jarak">Jarak</label>
                <input type="text" class="form-control" id="jarak" name="jarak" placeholder="jarak perkiraan dari pusat kota" required>
              </div>
              <div class="form-group my-2">
                <label for="keamanan">keamanan</label><br>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="keamanan" id="keamanan1" value="0" class="custom-control-input">
                  <label class="custom-control-label" for="keamanan1">Kurang Aman</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="keamanan" id="keamanan2" value="0.5" class="custom-control-input">
                  <label class="custom-control-label" for="keamanan2">Cukup Aman</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="keamanan" id="keamanan3" value="1" class="custom-control-input">
                  <label class="custom-control-label" for="keamanan3">Aman</label>
                </div>
              </div>
              <div class="form-group my-2">
                <label for="kondisi">Kondisi Jalan</label><br>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="kondisi" id="kondisi1" value="0" class="custom-control-input">
                  <label class="custom-control-label" for="kondisi1">Kurang Baik</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="kondisi" id="kondisi2" value="0.5" class="custom-control-input">
                  <label class="custom-control-label" for="kondisi2">Cukup Baik</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline my-2">
                  <input type="radio" name="kondisi" id="kondisi3" value="1" class="custom-control-input">
                  <label class="custom-control-label" for="kondisi3">Baik</label>
                </div>
              </div>
              <div class="form-group my-2">
                <label for="fasilitas">Fasilitas</label>
                <div>
                  <input type="checkbox" id="fasilitsa1" name="fasilitas[]" value="parkir">
                  <label for="fasilitas1">Tempat Parkir</label>
                </div>
                <div>
                  <input type="checkbox" id="fasilitsa2" name="fasilitas[]" value="masjid">
                  <label for="fasilitas2">Tempat Ibadah</label>
                </div>
                <div>
                  <input type="checkbox" id="fasilitsa3" name="fasilitas[]" value="kantin">
                  <label for="fasilitas3">Tempat Makan</label>
                </div>
                <div>
                  <input type="checkbox" id="fasilitsa4" name="fasilitas[]" value="toilet">
                  <label for="fasilitas4">Toilet</label>
                </div>
                <div>
                  <input type="checkbox" id="fasilitsa5" name="fasilitas[]" value="wahana">
                  <label for="fasilitas5">Wahana/ Tempat Bermain</label>
                </div>
              </div>
              <div class="my-2">
                <label for="foto">Foto</label> <br>
                <input name="foto" type="file" id="foto" class="dropify" />
              </div>
            </div>
            <div class="modal-footer">
              <div id="submitEdit"><button type="submit" id="submitEdit" class="btn btn-success">Konfirmasi</button></div>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Ends -->
    <!-- Footer -->
    @include('admin.partial.footer')
    <!-- End Footer -->
  </div>
</div>
<!--   Core JS Files   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $('select#district').change(function() {
    var val = $(this).val()
    var url = "{{ url('village') }}" + "/" + val
    var village = $('select#village');
    village.empty();
    $.get(url, function(data) {
      if (data) {
        $.each(data, function(key, value) {
          var $opt = $('<option>');
          $opt.val(value.id).text(value.name);
          $opt.appendTo(village);
        })
      }
    })
  })
</script>

<script src="../assets/js/olah-wisata.js"></script>
@endsection