@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data Permohonan</h4>
                  <form method="POST" action="{{ route('permohonan.store') }}">
                    {{-- ini action dibawah --}}
                    {{--  --}}
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlSelect2">Surat</label>
                      <select class="form-control" name="id_surat" id="surat">
                      @foreach($surat as $s)
                        <option value="{{$s->id_surat}}">{{$s->nama_surat}} </option>
                      @endforeach
                      </select>
                    </div>
                    <button style="float: right;" type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
              </div>
            </div>
@endsection