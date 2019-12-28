@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Surat</h4>
                  <p class="card-description">
                    
                  </p>
                  <form action="{{ route('surat.store') }}" method="post" accept-charset="utf-8">
                    {{-- action  --}}
                    @csrf
                    <div class="form-group">
                      <label>Nomor Surat</label>
                      <input type="text" class="form-control" placeholder="Kode Surat" aria-label="nomor_surat" name="nomor_surat">
                    </div>
                    <div class="form-group">
                      <label>Nama Surat</label>
                      <input type="text" class="form-control" placeholder="Nama Surat" aria-label="nama_surat" name="nama_surat">
                    </div>
                    <h4 class="card-title">Prasyarat</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]" value="krs" class="form-check-input"> KRS
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]" value="transkip_nilai" class="form-check-input"> Transkip Nilai
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]" value="bukti_tf" class="form-check-input"> Bukti Transfer
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>
                  </form>
              </div>
            </div>
@endsection