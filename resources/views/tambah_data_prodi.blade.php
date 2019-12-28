@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Prodi</h4>
                  <p class="card-description">
                    
                  </p>
                  <form action="{{ route('prodi.store') }}" method="post" accept-charset="utf-8">
                    @csrf
                    <div class="form-group">
                      <label>Kode Prodi</label>
                      <input type="text" class="form-control" placeholder="Kode Prodi" aria-label="kode_prodi" name="kode_prodi">
                    </div>
                    <div class="form-group">
                      <label>Nama Prodi</label>
                      <input type="text" class="form-control" placeholder="Nama Prodi" aria-label="nama_prodi" name="nama_prodi">
                    </div>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>
                  </form>
              </div>
            </div>
@endsection