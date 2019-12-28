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
			<td colspan="3" align="right"> <p>Tanggal</p> <input type="text" name="tujuan_magang" value="{{$tujuan}}"></td>
		</tr>

	</table>
	@foreach($data as $d)
	<table width="100%">
		<tr>
			<td colspan="4" align="center"> Hal : Permohonan Praktik Magang</td>
		</tr>
		<tr>
			<td width="200">Dengan hormat</td>
		</tr>
		<tr>
			<td colspan="4">Dalam rangka pengenalan dunia kerja yang akan dilakukan mahasiswa kami dibawah ini</td>
		</tr>
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
	<div class="form-group text-right" style="float: right;">
	<a  class="btn btn-sm btn-primary" href="{{ route('print',Session::get('id_suratpake')) }}" title="">Simpan dan Cetak</a>
	<button class="btn btn-default btn-lg" type="reset">
		<i class="fa fa-times"></i> Reset
	</button>
	</div>
</body>
</html>