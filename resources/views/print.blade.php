@php if (Session::get('id_suratpake') == 1)
          {
@endphp
<!DOCTYPE html>
<html>
<head>
	{{-- <style>
table, th, td {
  border: 1px solid black;
}
</style> --}}	
	<title></title>
</head>
<body>
	<table class="table">
		<tr>
			<th class="text-left">	
				<img src="{{public_path().'\assets\images\Logo-Universitas-Trilogi-c-min.png'}}" width="580" height="200">
			</th>
		</tr>
		<tr>
			<th></th>
			<th class="text-right">ADMINISTRASI AKADEMIK <br>FR-TRILOGI-ADAK-039/RO <br> EDISI 01</th>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td class="text-center" colspan="4" align="center"> SURAT KETERANGAN</td>
		</tr>
		<tr>
			<td class="text-center bg-info" colspan="3" align="center"> <input type="text" name="no_surat" class="form-control" placeholder="Contoh: 018/ADAK/KET-AAK01/III/2018" required>
		</tr>
		<tr>
			<td colspan="4"> Kepala Bagian Administrasi Akademik Universitas Trilogi menerangkan bahwa:</td>
		</tr>
		@foreach($data as	 $d)
		<tr>
			<td>Nama</td>
			<td width="1%">:</td>
			<td >{{$d->name}} </td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{$d->nim}} </td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>{{$d->nama_prodi}} </td>
		</tr>
		<tr>
			<td width="200" colspan="4"><br></td>
		</tr>
		@endforeach
</table>
	

<table class="table">
		<tr>
			<td colspan="2"><br><br> Telah memenuhi persyaratan menyusun Tugas Akhir / Skripsi / Tesis, yaitu : </td>
		</tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="2%">1.</td>
			<td>Terdaftar dan tidak cuti akademik: </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
		</tr>
		<tr>
			<td>3. </td>
			<td>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
		</tr>
		<tr>
			<td>4. </td>
			<td>Lulus matakuliah Metode Penilitian dan Statisika </td>
		</tr>
	</tbody>
</table>
{{-- <table class="table">
	<tbody>
		<tr>
			<td width="2%">1.</td>
			<input type="text" name="tanggal_surat" class="form-control tanggal" placeholder="yyyy-mm-dd" required>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
		</tr>
		<tr>
			<td>3. </td>
			<td>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
		</tr>
		<tr>
			<td>4. </td>
			<td>Lulus matakuliah Metode Penilitian dan Statisika </td>
		</tr>
	</tbody> 
</table>--}}

<table class="table" width="100%">
		<tr>
			<td width="80%"></td>
			<td class="text-left">
					<p >Jakarta,{{$surat}}</p>
			</td>
		</tr>
		<tr>
			<td width="80%"></td>
			<td><br><br><br><br><br><u>Ludwina Harahap, S.E., M.S. Ak</td></u>
		</tr>
		<tr>
			<td width="80%"></td>
			<td>Kepala Biro Administrasi Akademik</td>
		</tr>
</table>

</body>
</html>
@php } elseif (Session::get('id_suratpake') == 2)
          {
@endphp
<!DOCTYPE html>
	<html>
<head>
	{{-- <style>
table, th, td {
  border: 1px solid black;
}
</style> --}}	
	<title></title>
</head>
<body>
	<table class="table" width="100%">
		<tr>
			<td class="text-left" width="200">
				<img src="{{public_path().'\assets\images\Logo-Universitas-Trilogi-c-min.png'}}" align="left" width="500" height="200">
			</td>

		</tr>
		<tr>
			<td colspan="1" align="left">No Surat</td>
			<td colspan="3" align="right"><p>Jakarta, {{$t}} </p></td>
		</tr>
		<tr>
			<td colspan="3" align="right"> <p>{{$tujuan}}</p></td>
		</tr>

	</table>
	@foreach($data as $d)
	<table width="100%">
		<tr>
			<td colspan="4" align="center"> Hal : Permohonan Praktik Magang</td>
		</tr>
		<tr>
			<td width="70">Dengan hormat</td>
		</tr>
		<tr>
			<td colspan="4">Dalam rangka pengenalan dunia kerja yang akan dilakukan mahasiswa kami dibawah ini</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td width="1%">:</td>
			<td>{{$d->name}} </td>
		</tr>
		<tr>
			<td>NIM</td>
			<td width="1%">:</td>
			<td>{{$d->nim}} </td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td  width="1%">:</td>
			<td>{{$d->nama_prodi}} </td>
		</tr>
		<tr>
			<td width="200" colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4">Kami mohon diperkenankan Bapak/Ibu untuk dapat memberi kesempatan kepada peserta didik</td>
		</tr>
		<tr>
			<td colspan="4">kami yang akan melaksanankan Praktek Kerja Lapangan(MAGANG)</td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4">Demikian atas perhatian dan kerjasama Bapak/Ibu,Kami ucapkan terima kasih</td>
		</tr>
	</table>
	@endforeach


<!-- <table class="table">
		<tr>
			<td colspan="2"><br><br> Telah memenuhi persyaratan menyusun Tugas Akhir / Skripsi / Tesis, yaitu : </td>
		</tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="2%">1.</td>
			<td>Terdaftar dan tidak cuti akademik: </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
		</tr>
		<tr>
			<td>3. </td>
			<td>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
		</tr>
		<tr>
			<td>4. </td>
			<td>Lulus matakuliah Metode Penilitian dan Statisika </td>
		</tr>
	</tbody>
</table> -->

<!-- <table class="table">
	<thead>
		<tr>
			<td width="65%"></td>
			<td class="text-left">
				<div class="row">
					<div class="col-md-4">Jakarta,</div>
					<div class="col-md-8"><input type="text" name="tanggal_surat" class="form-control tanggal" placeholder="yyyy-mm-dd" required>
					</div>
				</div>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td><br><br><br><br><br><u>Ludwina Harahap, S.E., M.S. Ak</td></u>
		</tr>
		<tr>
				<td></td>
				<td>Kepala Biro Administrasi Akademik</td>
		</tr>
	</tbody>
</table>
 -->
</body>
</html>
@php 
} elseif (Session::get('id_suratpake') == 3)
          {
@endphp
<!DOCTYPE html>
	<html>
<head>
	{{-- <style>
table, th, td {
  border: 1px solid black;
}
</style> --}}	
	<title></title>
</head>
<body>
	<table class="table" width="100%">
		<tr>
			<td class="text-left" width="200">
				<img src="{{public_path().'\assets\images\Logo-Universitas-Trilogi-c-min.png'}}" width="580" height="200">
			</td>

		</tr>

	</table>
	<br><br>
	<table>
		<tbody>
		<tr>
			<th colspan="4" align="center">Surat keterangan</th>
		</tr>
		<tr>
			<th colspan="4" align="center">No surat</th>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4"> Yang bertandangan dibawah ini Kepada Biro Administrasi Akademik Universitas Trilogi menerangkan bahwa :
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		@foreach($data as	 $d)
		<tr>
			<td>Nama</td>
			<td width="1%">:</td>
			<td >{{$d->name}} </td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{$d->nim}} </td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>{{$d->nama_prodi}} </td>
		</tr>
		<tr>
			<td width="200" colspan="4"><br></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="4"> Telah mengajukan permohonan Cuti untuk keperluan :
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td width="20%">Alasan Cuti</td>
			<td width="1%">:</td>
			<td ><p>{{$alasan}}</p></td>

		</tr>
		<tr>
			<td>Semester Cuti</td>
			<td>:</td>
			<td><p>{{$semester}}</p> </td>
		</tr>
		<tr>
			<td>Catatan daftar ulang</td>
			<td>:</td>
			<td><p>{{$catatan}}</p> </td>
		</tr>
		<tr>
	</tbody>
	</table>
	
<table class="table" width="100%">
		<tr>
			<td width="100%"></td>
			<td class="text-left">
					<p >Jakarta,{{$surat}}</p>
			</td>
		</tr>
		<tr>
			<td width="100%"></td>
			<td><br><br><br><br><br><u>Ludwina Harahap, S.E., M.S. Ak</td></u>
		</tr>
		<tr>
			<td width="100%"></td>
			<td>Kepala Biro Administrasi Akademik</td>
		</tr>
</table>

<!-- <table class="table">
		<tr>
			<td colspan="2"><br><br> Telah memenuhi persyaratan menyusun Tugas Akhir / Skripsi / Tesis, yaitu : </td>
		</tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="2%">1.</td>
			<td>Terdaftar dan tidak cuti akademik: </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
		</tr>
		<tr>
			<td>3. </td>
			<td>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
		</tr>
		<tr>
			<td>4. </td>
			<td>Lulus matakuliah Metode Penilitian dan Statisika </td>
		</tr>
	</tbody>
</table> -->

<!-- <table class="table">
	<thead>
		<tr>
			<td width="65%"></td>
			<td class="text-left">
				<div class="row">
					<div class="col-md-4">Jakarta,</div>
					<div class="col-md-8"><input type="text" name="tanggal_surat" class="form-control tanggal" placeholder="yyyy-mm-dd" required>
					</div>
				</div>
			</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td><br><br><br><br><br><u>Ludwina Harahap, S.E., M.S. Ak</td></u>
		</tr>
		<tr>
				<td></td>
				<td>Kepala Biro Administrasi Akademik</td>
		</tr>
	</tbody>
</table>
 -->
</div>
</body>
</html>
@php } elseif (Session::get('id_suratpake') == 4)
          {
@endphp
<!DOCTYPE html>
	<html>
<head>
	{{-- <style>
table, th, td {
  border: 1px solid black;
}
</style> --}}	
	<title></title>
</head>
<body>
	<table class="table" width="100%">
		<tr>
			<td class="text-left" width="200">
				<img src="{{public_path().'\assets\images\Logo-Universitas-Trilogi-c-min.png'}}" width="580" height="200">
			</td>

		</tr>

	</table>
	<br><br>
	<table>
		<tbody>
		<tr>
			<th colspan="4" align="center"><b>SURAT KETERANGAN AKTIF KULIAH</b> </th>
		</tr>
		<tr>
			<th colspan="4" align="center">No surat</th>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4"> Yang bertandangan dibawah ini  :
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td width="20%">Nama</td>
			<td width="1%">:</td>
			<td ><p>{{$nama}}</p></td>

		</tr>
		<tr>
			<td>NIDN</td>
			<td>:</td>
			<td><p>{{$nidn}}</p> </td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><p>{{$jabatan}}</p> </td>
		</tr>
		<tr>
			<td colspan="4"> Dengan ini menyatakan :
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		@foreach($data as	 $d)
		<tr>
			<td>Nama</td>
			<td width="1%">:</td>
			<td >{{$d->name}} </td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{$d->nim}} </td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>{{$d->nama_prodi}} </td>
		</tr>
		<tr>
			<td width="200" colspan="4"><br></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="4">Adalah benar mahasiswa universitas trilogi yang masih aktif kuliah</td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4">Demikian surat keterangan ini dibuat untuk dipergunakan semestinya</td>
		</tr>
	</tbody>
	</table>


<!-- <table class="table">
		<tr>
			<td colspan="2"><br><br> Telah memenuhi persyaratan menyusun Tugas Akhir / Skripsi / Tesis, yaitu : </td>
		</tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="2%">1.</td>
			<td>Terdaftar dan tidak cuti akademik: </td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
		</tr>
		<tr>
			<td>3. </td>
			<td>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
		</tr>
		<tr>
			<td>4. </td>
			<td>Lulus matakuliah Metode Penilitian dan Statisika </td>
		</tr>
	</tbody>
</table> -->

<table class="table" width="100%">
		<tr>
			<td width="80%"></td>
			<td class="text-left">
					<p >Jakarta,{{$surat}}</p>
			</td>
		</tr>
		<tr>
			<td width="80%"></td>
			<td><br><br><br><br><br><u>Ludwina Harahap, S.E., M.S. Ak</td></u>
		</tr>
		<tr>
			<td width="80%"></td>
			<td>Kepala Biro Administrasi Akademik</td>
		</tr>
</table>

</body>
</html>
@php } @endphp