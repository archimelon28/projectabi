@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Permohonan</h4>
                  <p class="card-description">
                    
                  </p>
                  <form method="POST" enctype="multipart/form-data" action="{{ route('permohonandetail.store') }}"  >
                    @csrf
                    @php 
                    if ($mohon->krs == null and $mohon->transkip_nilai == null and $mohon->bukti_tf == null) {
                    @endphp
                    <p>Tidak ada Prasyarat</p>
                    @php
                    } else { 
                    @endphp
                    @for($i = 0;$i <count($array);$i++)
                    <div class="form-group">
                      <label>{{$array[$i] }}</label>
                      <input type="file" class="form-control" placeholder="Nama Prodi" aria-label="nama_surat" name="{{$array[$i]}}">
                    </div>
                    @endfor
                    @php } @endphp
                    <div class="form-group">
                      <label for="exampleTextarea1">Catatan</label>
                      <textarea class="form-control" name="catatan" id="catatan" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                    <button style="float: right;" type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
              </div>
            </div>
@endsection