@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data Mahasiswa</h4>
                  <p class="card-description">
                  </p>
                  <form action="{{ route('mahasiswa.update', $mahasiswa->id_user) }}" method="post" accept-charset="utf-8">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label>NIM</label>
                      <input type="text" class="form-control" name="nim" id="nim" value="{{ $mahasiswa->nim }}"aria-label="NIM" disabled>
                    </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $mahasiswa->name }}" aria-label="Nama">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}"  aria-label="tempat_lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }} "  aria-label="Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                        @if($mahasiswa->jenis_kelamin == 1)
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="{{ $mahasiswa->jenis_kelamin }}" selected>Laki-Laki</option>
                          <option value="2">Perempuan</option>
                        @elseif($mahasiswa->jenis_kelamin == 2)
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="1">Laki-Laki</option>
                          <option value="{{ $mahasiswa->jenis_kelamin }}" selected>Perempuan</option>
                        @else
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="1">Laki-Laki</option>
                          <option value="2">Perempuan</option>
                        @endif
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect3">Agama</label>
                      <select name="agama" id="agama" class="form-control" id="exampleFormControlSelect3">
                        @if($mahasiswa->agama == 1)
                          <option value="">Pilih Agama</option>
                          <option value="{{ $mahasiswa->agama }}" selected>Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($mahasiswa->agama == 2)
                          <option value="">Pilih Agama</option>
                          <option value="1">Islam</option>
                          <option value="{{ $mahasiswa->agama }}"selected>Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($mahasiswa->agama == 3)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="{{ $mahasiswa->agama }}" selected>Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($mahasiswa->agama == 4)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="{{ $mahasiswa->agama }}" selected>Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($mahasiswa->agama == 5)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="{{ $mahasiswa->agama }}"selected>Hindu</option>
                        @else
                          <option value="" selected>Pilih Agama</option>
                          <option value="1">Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @endif
                      </select>
                    </div>
                   <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" value="{{ $mahasiswa->alamat_mhs }}" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label>No Hp</label>
                      <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $mahasiswa->no_hp }} "  aria-label="no_hp">
                    </div>        
                <button style="float: right;" type="submit" class="btn btn-success mr-2">Update</button>
                <button type="button" class="btn btn-success mr-2" style="float: right;" data-toggle="modal" data-target="#defaultModal">Ubah Password</button>
              </div>
            </div>
@endsection
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="defaultModalLabel">Ubah Password</h4>
                  </div>
                  <div class="modal-body">
                    <form action="" method="POST">
                      {{-- action {{ url('/update_pass').'/'.$mahasiswa->id_user }} --}}
                    {{ csrf_field() }}
                      <div class="form-group">
                      <label>Password Baru</label>
                        <input type="password" class="form-control" aria-label="Username" name="newpass">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-fw" data-dismiss="modal">CLOSE</button>
                      <button type="submit" style="float: right;" class="btn btn-success mr-2">Submit</button>
                  </div>
                </form>
              </div>
          </div>
      </div>