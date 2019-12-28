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
                  <a href="{{route('mahasiswa.create')}} " style="float: right;">
                    <button type="button" class="btn btn-primary btn-fw">Tambah Data</button>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No.
                          </th>
                          <th>
                            NIM
                          </th>
                          <th>
                            Nama Mahasiswa
                          </th>
                          <th>
                            Program Studi
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            Jenis Kelamin
                          </th>
                          <th>
                            Agama
                          </th>
                          <th>
                            Tempat Lahir
                          </th>
                          <th>
                            Tanggal Lahir
                          </th>
                          <th>No Handphone</th>
                          <th>
                            Status
                          </th>
                          <th>
                            Aksi
                          </th>
                      </thead>
                      <tbody>
                        @php $no = 1 @endphp
                        @foreach($mahasiswa as $data)
                        <tr>
                          <td>
                            {{$no++}}
                          </td>
                          <td>{{$data->nim}}</td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->nama_prodi}} </td>
                          <td>{{$data->alamat}}</td>
                          <td>
                            @if($data->jenis_kelamin == 1)
                            Laki-laki
                            @else
                            Perempuan
                            @endif
                          </td>
                          <td>
                            @if($data->agama == 1)
                            Islam
                            @elseif($data->agama == 2)
                            Katholik
                            @elseif($data->agama == 3)
                            Kristen Protestan
                            @elseif($data->agama == 4)
                            Buddha
                            @else
                            Hindu 
                            @endif
                          </td>
                          <td>{{$data->tempat_lahir}}</td>
                          <td>{{$data->tanggal_lahir}}</td>
                          <td>{{$data->no_hp}} </td>
                          <td>
                            @if($data->status ==1)
                              Aktif
                            @else
                              Tidak Aktif
                            @endif
                          </td>
                          <td>
                            <form action="{{ route('mahasiswa.destroy', $data->id_user ) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                            <a  class="btn btn-sm btn-primary" href="{{ route('mahasiswa.edit', $data->id_user) }}" title="">Edit</a>
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