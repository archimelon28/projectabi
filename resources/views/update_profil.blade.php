@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Data Profil</h4>
                  @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                  @endif
                  @foreach($user as $u)
                  <form action="{{ url('/update_profil_data',Session::get('user')) }}" method="POST"enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="{{$u->name}}" aria-label="Username" disabled="true">
                  </div>
                  <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $u->tempat_lahir }}"  aria-label="tempat_lahir">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $u->tanggal_lahir }}"  aria-label="Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect2">Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" id="exampleFormControlSelect2">
                        @if($u->jenis_kelamin == 1)
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="{{ $u->jenis_kelamin }}" selected>Laki-Laki</option>
                          <option value="2">Perempuan</option>
                        @elseif($u->jenis_kelamin == 2)
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="1">Laki-Laki</option>
                          <option value="{{ $u->jenis_kelamin }}" selected>Perempuan</option>
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
                        @if($u->agama == 1)
                          <option value="">Pilih Agama</option>
                          <option value="{{ $u->agama }}" selected>Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($u->agama == 2)
                          <option value="">Pilih Agama</option>
                          <option value="1">Islam</option>
                          <option value="{{ $u->agama }}"selected>Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($u->agama == 3)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="{{ $u->agama }}" selected>Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($u->agama == 4)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="{{ $u->agama }}" selected>Buddha</option>
                          <option value="5">Hindu</option>
                        @elseif($u->agama == 5)
                          <option value="">Pilih Agama</option>
                          <option value="1" >Islam</option>
                          <option value="2">Katholik</option>
                          <option value="3">Kristen Protestan</option>
                          <option value="4">Buddha</option>
                          <option value="{{ $u->agama }}"selected>Hindu</option>
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
                    <label for="exampleFormControlSelect2">No hp</label>
                    <input type="text" class="form-control" placeholder="{{$u->no_hp}} " name="no_hp">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Email</label>
                    <input type="text" class="form-control" placeholder="{{$u->email}} " name="email">
                    </div>
                 <button type="submit" class="btn btn-success mr-2" style="float: right;">Ubah</button>
                 <button type="button" class="btn btn-success mr-2" style="float: right;" data-toggle="modal" data-target="#defaultModal">Ubah Password</button>
              </div>
            </form>
            @endforeach
          </div>
        </div>
        <!-- Modal-->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title" id="defaultModalLabel">Ubah Password</h4>
                  </div>
                  <div class="modal-body">
                    <form action="{{ url('/update_pass') }}" method="POST">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" class="form-control" aria-label="Username" name="oldpass">
                      </div>
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
@endsection