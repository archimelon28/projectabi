
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
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
      <td class="text-center" colspan="3"><br><br><br><br> <u>SURAT KETERANGAN<br></u><?php echo $surat->no_surat;  ?>
      </td>
    </tr>
    <tr>
      <td colspan="3"><br><br><br> Kepala Bagian Administrasi Akademik Universitas Trilogi menerangkan bahwa:</td>
    </tr>
    <tr class="text-left">
      <td width="20%"><br><br>Nama</td>
      <td width="1%"><br><br>:</td>
      <td><br><br><?php echo $ta->nama_mhs ?></td>
    </tr>
    <tr>
      <td><br>NIM</td>
      <td><br>:</td>
      <td><br><?php echo $ta->nim ?></td>
    </tr>
    <tr>
      <td><br>Program Studi</td>
      <td><br>:</td>
      <td><br><?php echo $ta->nama_prodi ?> - (S-1)</td>
    </tr>
    <tr>
      <td><br>Jenjang Pendidikan</td>
      <td><br>:</td>
      <td><br><?php echo $ta->jenjang_pendidikan ?></td>
    </tr>
  </tbody>
</table>
<table class="table">
    <tr>
      <td colspan="2"><br><br><br> Telah memenuhi persyaratan menyusun Tugas Akhir / Skripsi / Tesis, yaitu : </td>
    </tr>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td width="2%"><br>1.</td>
      <td><br>Terdaftar dan tidak cuti akademik: </td>
    </tr>
    <tr>
      <td width="2%"><br>2.</td>
      <td><br>Mempunyai Indeks Prestasi Kumulatif (IPK) lebih besar atau sama dengan 2.00 </td>
    </tr>
    <tr>
      <td width="2%"><br>3. </td>
      <td><br>Sudah memiliki tabungan SKS lebih besar atau sama dengan 120 SKS </td>
    </tr>
    <tr>
      <td width="2%"><br>4. </td>
      <td><br>Lulus matakuliah Metode Penilitian dan Statisika </td>
    </tr>
  </tbody>
</table>


<table class="table">
  <thead>
    <tr>
      <td width="65%"></td>
      <td class="text-left"><br><br><br>Jakarta, <?php  echo $surat->tanggal_surat; ?></td>
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
