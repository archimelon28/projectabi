@extends('base')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Data SDM</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" action="{{ route('sdm.store') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label >Nama</label>
                          <input type="text" class="form-control" placeholder="Nama" name="name">
                        </div>
                        <div class="form-group">
                          <label>Pilih role</label>
                          <div class="input-group">
                            <select name="id_role" id="role" onchange="myFunction(this.value)" style="width: 100%">
                                @foreach($role as $r)
                                <option value="{{$r->id_role}}">{{$r->role_name}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">NIM/NIP</label>
                          <input type="text" class="form-control" id="NIM" placeholder="NIM/NIP" name="NIM">
                        </div>
                        <div class="form-group">
                          <label>Prodi</label>
                          <div class="input-group">
                            <select name="id_prodi" style="width: 100%" id="prodi">
                                @foreach($prodi as $p)
                                <option value="{{$p->id_prodi}}">{{$p->nama_prodi}} </option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
                        </div>
                        <button type="submit" class="btn btn-success mr-2" style="float: right;">Submit</button>
                        <button class="btn btn-light" style="float: right;">Cancel</button>
                      </form>
              </div>
            </div>
@endsection
<script type="text/javascript">
        function myFunction(e) {
            var e = document.getElementById("role");
            var strUser = e.options[e.selectedIndex].value;
            var p = document.getElementById("prodi");
            var x = document.getElementById("NIM");
                if (strUser === "1") {
                x.name = "NIM";
                p.style.visibility = "visible";
              } else {
                x.name = "NIP";
                p.style.visibility = "hidden";
              }

        }
</script>