@extends('base')
@section('content')
<div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Permohonan</h4>
                  <a href="{{route('permohonan.create')}} " style="float: right;">
                    <button type="button" class="btn btn-primary btn-fw">Tambah Data</button>
                  </a>
                  <h4></h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>Nama</th>
                          <th>Surat</th>
                          <th>
                            Prasyarat
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Status
                          </th>
                          {{-- <th>
                            Catatan
                          </th> --}}
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1 @endphp
                        @foreach($mohon as $m)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$m->name}}</td>
                          <td>{{$m->nama_surat}} </td>
                          <td>
                            <a  class="btn btn-sm btn-primary" href="{{ route('permohonan.edit', $m->id_permohonan) }}" title="">Lihat Prasyarat dan response</a>
                          </td>
                          <td>{{$m->tanggal}}</td>
                          <td>{{$m->status}}</td>
                          <td>
                            @php if(Session::get('roles') == 1 or Session::get('roles') == 2){ @endphp
                            <form action="{{ route('permohonan.destroy', $m->id_permohonan ) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                            <a  class="btn btn-sm btn-primary" href="{{ route('permohonan.edit', $m->id_permohonan) }}" title="">Edit</a>
                            <a  class="btn btn-sm btn-primary" href="{{ route('suratjadi', $m->id_surat) }}" title="">Print</a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus aku?')">Delete</button>
                            </form>
                            @php } elseif(Session::get('roles') == 3 or Session::get('roles') == 4) { @endphp
                            <form action="{{ route('permohonan.destroy', $m->id_permohonan ) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                            <a  class="btn btn-sm btn-primary" href="{{ route('permohonan.edit', $m->id_permohonan) }}" title="">Respon</a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus aku?')">Delete</button>
                            </form>
                            @php } @endphp
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