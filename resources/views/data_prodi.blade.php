@extends('base')
@section('content')
<div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @if (session('alert-success'))
                    <div class="alert alert-success">
                        {{ session('alert-success') }}
                    </div>
                  @elseif (session('alert-delete'))
                    <div class="alert alert-danger">
                        {{ session('alert-delete') }}
                    </div>
                  @endif
                  <h4 class="card-title">Mahasiswa</h4>
                  <a href="{{route('prodi.create')}} " style="float: right;">
                    <button type="button" class="btn btn-primary btn-fw">Tambah Data</button>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        	<th>No.</th>
                          <th>Kode Prodi</th>
                          <th>Nama Prodi</th>
                          <th>Aksi</th>
                        </tr>
                        
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1 @endphp
                        @foreach($prodi as $data)
                        <tr>
                          <td>
                            {{$no++}}
                          </td>
                          <td>{{$data->kode_prodi}}</td>
                          <td>{{$data->nama_prodi}}</td>
                          <td>
                            <form action="{{ route('prodi.destroy', $data->id_prodi ) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                            <a  class="btn btn-sm btn-primary" href="{{ route('prodi.edit', $data->id_prodi) }}" title="">Edit</a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus aku?')">Delete</button>
                            </form>
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
@endsection