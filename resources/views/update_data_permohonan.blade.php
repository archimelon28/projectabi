@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data Permohonan</h4>
                  <p class="card-description">
                  </p>
                  @php if (Session::get('roles') == 1 or Session::get('roles') == 2) 
                  {  
                  @endphp
                  <form action="{{ route('permohonan.update', $permohonan->id_permohonan) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      @for($i = 0;$i < count($array);$i++)
                        <label>{{$array[$i] }}</label><br>
                        <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->krs}}" alt="" width="350px">
                        <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->bukti_tf}}" alt="" width="350px">
                        <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->transkip_nilai}}" alt="" width="350px">
                        <input type="file" class="form-control" placeholder="Nama Prodi" aria-label="nama_surat" name="{{$array[$i]}}">
                      @endfor
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Catatan</label>
                        <textarea class="form-control" name="catatan" id="alamat_mhs" rows="3"></textarea>
                    </div>
                    <button style="float: right;" type="submit" class="btn btn-success mr-2">Update</button>
                  </form>
                  @php }elseif(Session::get('roles') == 3 or Session::get('roles') == 4 ) { @endphp
                  <form action="{{ route('permohonan.update', $permohonan->id_permohonan) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                    @csrf
                    {{ method_field('PUT') }}
                    @for($i = 0;$i <count($array);$i++)
                    <div class="form-group">
                      <label>{{$array[$i] }}</label><br>
                      <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->krs}}" alt="" width="350px">
                        <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->bukti_tf}}" alt="" width="350px">
                        <img src="{{asset('uploads').'/'.$array[$i].'/'.$permohonan->transkip_nilai}}" alt="" width="350px">
                      <input type="file" class="form-control" placeholder="Nama Prodi" aria-label="nama_surat" name="{{$array[$i]}}" disabled>
                    </div>
                    @endfor
                    <div class="form-group">
                        <label for="exampleTextarea1">Catatan</label>
                        <textarea class="form-control" name="catatan" id="alamat_mhs" rows="3"></textarea>
                      </div>

                    <button style="float: right;" type="submit" class="btn btn-success mr-2" name="Terima" value="Terima">Terima</button>
                    <button style="float: right;" type="submit" class="btn btn-danger mr-2" name="Tolak" value="Tolak">Tolak</button>  
                    
                  </form>
                  @php } @endphp
              </div>
            </div>
@endsection