@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data Surat</h4>
                  <p class="card-description">
                  </p>
                  @foreach($surat['data'] as $s)
                  <form action="{{ route('surat.update', $s->id_surat) }}" method="post" accept-charset="utf-8">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      <label>Nomor Surat</label>
                      <input type="text" class="form-control" name="nomor_surat" id="name" placeholder="Name" value="{{ $s->nomor_surat }}" aria-label="Name">
                    </div>
                    <div class="form-group">
                      <label>Nama Surat</label>
                      <input type="text" class="form-control" name="nama_surat" id="username" value="{{ $s->nama_surat }}" aria-label="Username">
                    </div>
                    <h4 class="card-title">Prasyarat</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]" value="krs"{{in_array("krs",$surat['prasyarat'])?"checked":""}} 
                              class="form-check-input"> KRS
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]" value="transkip_nilai" {{in_array("transkip_nilai",$surat['prasyarat'])?"checked":""}}
                              class="form-check-input"> Transkip Nilai
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input type="checkbox" name="prasyarat[]"  value="bukti_tf" {{in_array("bukti_tf",$surat['prasyarat'])?"checked":""}}
                               class="form-check-input"> Bukti Transfer
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Update</button>
                    <a href="{{ route('prodi.index') }}" class="btn btn-danger" title="">Cancel</a>
                  </form>
                  @endforeach
                </div>
            </div>
@endsection