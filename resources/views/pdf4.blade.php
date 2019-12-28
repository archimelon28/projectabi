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
	<br><br><br><br><br><br><br><br><br><br>
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
			<td ></td>

		</tr>
		<tr>
			<td>NIDN</td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
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
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
		<tr>
			<td colspan="4"><br></td>
		</tr>
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
	{{-- <div class="form-group text-right">
	<button class="btn btn-success btn-lg" type="submit">
		<i class="fa fa-print"></i> Simpan dan Cetak
	</button>

	<button class="btn btn-default btn-lg" type="reset">
		<i class="fa fa-times"></i> Reset
	</button>
</div> --}}
</body>
</html>