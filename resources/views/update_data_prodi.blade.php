@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data User</h4>
                  <p class="card-description">
                  </p>
                  <form action="{{ route('prodi.update', $prodi->id_prodi) }}" method="post" accept-charset="utf-8">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label>Kode Prodi</label>
                      <input type="text" class="form-control" name="kode_prodi" id="name" placeholder="Name" value="{{ $prodi->kode_prodi }}" aria-label="Name">
                    </div>
                    <div class="form-group">
                      <label>Nama Prodi</label>
                      <input type="text" class="form-control" name="nama_prodi" id="username" value="{{ $prodi->nama_prodi }}" aria-label="Username">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    <a href="{{ route('prodi.index') }}" class="btn btn-danger" title="">Cancel</a>
                  </form>
                </div>
            </div>
@endsection