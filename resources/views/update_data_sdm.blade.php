@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data SDM</h4>
                  <p class="card-description">
                    
                  </p>
                  <form method="post" action="{{ route('sdm.update', $sdm->id_user) }}">
                    @csrf
                    {{ method_field('PUT') }}
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $sdm->name }}" aria-label="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $sdm->tempat_lahir }}"  aria-label="tempat_lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $sdm->tanggal_lahir }}"  aria-label="Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleTextarea1">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat"id="exampleTextarea1" rows="2">{{ $sdm->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                      @if($sdm->jenis_kelamin == 1)
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="{{ $sdm->jenis_kelamin }}" selected>Laki-Laki</option>
                        <option value="2">Perempuan</option>
                      @elseif($sdm->jenis_kelamin == 2)
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="1">Laki-Laki</option>
                        <option value="{{ $sdm->jenis_kelamin }}" selected>Perempuan</option>
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
                        @if($sdm->agama == 1)
                          <option value="">Pilih Agama</option>
                          <option value="{{ $sdm->agama }}" selected>Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($sdm->agama == 2)
                          <option value="">Pilih Agama</option>
                          <option value="1">Islam</option>
                          <option value="{{ $sdm->agama }}"selected>Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($sdm->agama == 3)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="{{ $sdm->agama }}" selected>Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($sdm->agama == 4)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="{{ $sdm->agama }}" selected>Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($sdm->agama == 5)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="{{ $sdm->agama }}"selected>Hindu</option>
                        @else
                          <option value="" selected>Pilih Agama </option>
                          <option value="1">Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @endif
                      </select>
                    </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Status</label>
                    <select class="form-control" name="status" id="status" id="exampleFormControlSelect2">
                        @if($sdm->status == 1)
                          <option value="">Pilih Status</option>
                          <option value="{{ $sdm->status }}" selected>Aktif
                          </option>
                          <option value="2">Tidak Aktif</option>
                        @elseif($sdm->status == 2)
                          <option value="">Pilih Status</option>
                          <option value="1">Aktif</option>
                          <option value="{{ $sdm->status }}" selected>Tidak Aktif</option>
                        @else
                          <option value="">Pilih Status</option>
                          <option value="1">Aktif</option>
                          <option value="2" selected>Tidak Aktif</option>
                        @endif
                    </select>
                  </div>
                  <div class="form-group">
                      <label>No Hp</label>
                      <input type="text" class="form-control" name="no_hp" id="nim" value="{{ $sdm->no_hp }}">
                    </div>
                <button style="float: right;" type="submit" class="btn btn-success mr-2">Update</button>
                <button type="button" class="btn btn-success mr-2" style="float: right;" data-toggle="modal" data-target="#defaultModal">Ubah Password</button>
              </form>
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
                    <form action="{{ url('/update_pass').'/'.$sdm->id_user }}" method="POST">
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