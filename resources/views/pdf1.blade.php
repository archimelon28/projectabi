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
	<table>
		<tr>
			<td class="text-center" colspan="2"> SURAT KETERANGAN</td>
		</tr>
		<tr>
			<td class="text-center bg-info" colspan="3"> <input type="text" name="no_surat" class="form-control" placeholder="Contoh: 018/ADAK/KET-AAK01/III/2018" required>
			<td></td>
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
			<td width="100%"></td>
			<td class="text-left">
					<p >Jakarta,</p>
					<div class="col-md-8"><input type="text" name="tanggal_surat" class="form-control tanggal" placeholder="yyyy-mm-dd" required value="{{$surat}}">
					</div>
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
	
		 {{-- <div class="form-group text-right" style="float: right;">
		<a  class="btn btn-sm btn-primary" href="{{ route('print',Session::get('id_suratpake')) }}" title="">Simpan dan Cetak</a>
		<button class="btn btn-default btn-lg" type="reset">
			<i class="fa fa-times"></i> Reset
		</button>
		</div> --}}
</body>
</html>
