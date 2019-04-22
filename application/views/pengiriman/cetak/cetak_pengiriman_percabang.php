<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aplikasi Personalia</title>
<style type="text/css">
<!--
.style1 {font-size: 10px}
.style12 {font-size: 10px; font-weight: bold; }
.style13 {font-size: 10px}
-->
</style>
</head>

<body>

<table width="99%" height="335" border="1px" cellpadding="0" cellspacing="0">
<tr>
<td align="center">
<table width="100%">
  <tr>
    <td colspan="5" align="center"><u><strong>DATA PENGIRIMAN BERKAS CALON KARYAWAN BARU</strong></u> </td>
  </tr>
  <tr>
    <td><span class="style1">Yth. </span></td>
    <td><span class="style1">: Personalia Cab. <?php echo $tampil['nama_cabang']; ?></span></td>
    <td><span class="style1"></span></td>
    <td align="right"><span class="style1">Dari&nbsp;&nbsp;&nbsp;</span></td>
    <td><span class="style1">: HRD </span></td>
  </tr>
  <tr>
    <td><span class="style1">U/p. </span></td>
    <td><span class="style1">: Bpk/Ibu <?php echo $tampil['personalia_satu']; ?>, <?php echo $tampil['personalia_dua']; ?>, <?php echo $tampil['personalia_tiga']; ?></span></td>
    <td><span class="style1"></span></td>
    <td align="right"><span class="style1">Konfirmasi Tgl &nbsp;&nbsp;</span></td>
    <td><span class="style1">: <?php echo date("d - m - Y", strtotime($tampil['pengiriman_tanggal'])); ?></span></td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td align="right"><span class="style1">Pukul&nbsp;&nbsp;&nbsp;</span></td>
    <td><span class="style1">: <?php echo $tampil['pengiriman_jam']; ?> WIB</span></td>
  </tr>
</table>
<table width="98%" border="1" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">NO.</span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Nomor KTP </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Nama Lengkap </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Tempat/<br>Tgl Lahir </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Alamat KTP </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Nomor<br>ADM </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">No. Surat<br>Pengantar<br>Interview </span></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><span class="style12">Usulan<br>Penempatan </span></td>
  </tr>
  <?php $no=1; foreach ($results as $result): ?>
  <tr>
    <td align="center" valign="top"><span class="style13"><?php echo $no++; ?></span></td>
	<td valign="top"><span class="style13"><?php echo $result['biodata_nik']; ?></span></td>
    <td valign="top"><span class="style13"><?php echo $result['biodata_nama']; ?></span></td>
    <td valign="top"><span class="style13"><?php echo $result['biodata_tempat_lahir']; ?><br><?php echo date("d-m-Y",strtotime($result['biodata_tanggal_lahir'])); ?>&nbsp;</span></td>
    <td valign="top"><span class="style13"><?php echo $result['biodata_alamat']; ?>,		<?php echo $result['biodata_rt']; ?>/<?php echo $result['biodata_rw']; ?>, <?php echo $result['biodata_kelurahan']; ?>, <?php echo $result['biodata_kecamatan']; ?>, <?php echo $result['biodata_kabupaten']; ?>,  <?php echo $result['biodata_propinsi']; ?></span></td>
    <td align="center" valign="top"><span class="style13"><?php echo $result['nomor_adm']; ?></span></td>
    <td align="center" valign="top"><span class="style13"><?php echo $result['pengiriman_nomor']; ?>/HRD/H/<?php echo date("Y", strtotime($result['pengiriman_tanggal'])); ?></span></td>
    <td align="center" valign="top"><span class="style13"><?php echo $result['nama_bagian']; ?></span></td>
  </tr>
  <?php endforeach; ?>
</table>
<table width="100%">
  <tr>
    <td valign="top"><span class="style1">NB : </span></td>
    <td colspan="4" valign="top"><span class="style1">Calon yang dikirim di atas, Diterima/Tidak Diterima, harap dilaporkan melalui e-mail   setelah  calon karyawan tersebut mulai bekerja. <br />
	  <strong>Dan data  Karyawan tersebut, harap kirimkan data konfirmasi Diterima/Tidak Diterima dan kelengkapan data karyawan yang kurang dengan format yang sudah ditentukan HRD.<br />
	  Kirim lewat e-mail Aplikasi (aplikasi.personalia@gmail.com).	  </strong></span></td>
  </tr>
  
  
  
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td colspan="2" align="center"><span class="style1">Jakarta, <?php echo date("d - F - Y"); ?></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td colspan="2" align="center"><span class="style1">(__________________) (__________________)</span></td>
  </tr>
  <tr>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td><span class="style1"></span></td>
    <td colspan="2" align="center"><span class="style1"> HRD
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		HRD </span></td>
  </tr>
</table>
</td>
</tr>
</table>

</body>
</html>
