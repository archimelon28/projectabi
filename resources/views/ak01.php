<?php
// erro warning
echo validation_errors('<div class ="alert alert-warning">','</div>');

// form open
echo form_open_multipart(base_url('admin/surat/ak01/'.$ta->id_ta),' target="_blank"');
?>
<table class="table">
	<thead>
		<tr>
			<th class="text-left">
				<img src="<?php echo base_url('assets/upload/logo.png')?>" width="250">
			</th>
			<th></th>
			<th class="text-right">ADMINISTRASI AKADEMIK <br>FR-TRILOGI-ADAK-039/RO <br> EDISI 01</th>
		</tr>

	</thead>
	<tbody>
		<tr>
			<td class="text-center" colspan="3"> SURAT KETERANGAN</td>
		</tr>
		<tr>
			<td class="text-center bg-info" colspan="3"> <input type="text" name="no_surat" class="form-control" placeholder="Contoh: 018/ADAK/KET-AAK01/III/2018" value="<?php if (isset($_POST['no_surat'])){ echo set_value ('no_surat');} elseif($surat) { echo $surat->no_surat;}  ?>"required>
			<td></td>
		</tr>
		<tr>
			<td colspan="4"> Kepala Bagian Administrasi Akademik Universitas Trilogi menerangkan bahwa:</td>
		</tr>
		<tr>
			<td width="20%">Nama</td>
			<td width="1%">:</td>
			<td ><?php echo $ta->nama_mhs ?></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo $ta->nim ?></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><?php echo $ta->nama_prodi ?> - (S-1)</td>
		</tr>
		<tr>
			<td>Jenjang Pendidikan</td>
			<td>:</td>
			<td><?php echo $ta->jenjang_pendidikan ?></td>
		</tr>
	</tbody>
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

<table class="table">
	<thead>
		<tr>
			<td width="65%"></td>
			<td class="text-left">
				<div class="row">
					<div class="col-md-4">Jakarta,</div>
					<div class="col-md-8"><input type="text" name="tanggal_surat" class="form-control tanggal" placeholder="yyyy-mm-dd" value="<?php if (isset($_POST['tanggal_surat'])){ echo set_value ('tanggal_surat');}elseif($surat) { echo $surat->tanggal_surat;}  ?>" required>
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

	<div class="form-group text-right">
	<button class="btn btn-success btn-lg" type="submit">
		<i class="fa fa-print"></i> Simpan dan Cetak
	</button>

	<button class="btn btn-default btn-lg" type="reset">
		<i class="fa fa-times"></i> Reset
	</button>
</div>

<?php
// form close
echo form_close();
?>