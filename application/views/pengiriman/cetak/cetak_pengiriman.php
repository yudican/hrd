<style type="text/css">
<!--
.style5 {font-size: 12px}
.style6 {font-size: 10px}
-->
</style>


<table width="100%" height="300px" border="1" align="center" cellspacing="0">
<tr>
<td>

<table width="100%">
  <tr>
    <td width="10%"><span class="style5">Nomor</span></td>
    <td width="38%"><span class="style5">: <?php echo $tampil['pengiriman_nomor']; ?> / HRD / H / <?php echo date("Y", strtotime($tampil['pengiriman_tanggal'])); ?></span></td>
    <td width="10%"><span class="style5"></span></td>
    <td colspan="3"><span class="style5">Kepada Yth : </span></td>
  </tr>
  <tr>
    <td><span class="style5">lampiran</span></td>
    <td><span class="style5">: </span></td>
    <td><span class="style5"></span></td>
    <td colspan="3"><span class="style5">Store Manager/Personalia </span></td>
  </tr>
  <tr>
    <td><span class="style5">Perihal</span></td>
    <td><span class="style5">: <u>Surat Pengantar Interview</u> </span></td>
    <td><span class="style5"></span></td>
    <td colspan="3"><span class="style5">HARI HARI Pasar Swalayan </span></td>
  </tr>
  <tr>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td width="11%"><span class="style5">Cabang</span></td>
    <td colspan="2"><span class="style6">: <?php echo $tampil['nama_cabang']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td align="right" valign="top"><span class="style5">Jl</span></td>
    <td colspan="2" rowspan="2" valign="top"><span class="style6">: <?php echo $tampil['alamat']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
  </tr>
  <tr>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5">Telp.</span></td>
    <td colspan="2"><span class="style5">: <?php echo $tampil['nomor_hp_cabang']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td colspan="2"><span class="style6">: Bp./Ibu <?php echo $tampil['personalia_satu']; ?>,  <?php echo $tampil['personalia_dua']; ?>,<br>
        &nbsp;<?php echo $tampil['personalia_tiga']; ?></span></td>
  </tr>
  
  <tr>
    <td colspan="6" align="center"><u><span class="style5"><strong>SURAT PENGANTAR INTERVIEW</strong></span></u></td>
    </tr>
  <tr>
    <td><span class="style5">ADM </span></td>
    <td><span class="style5"><strong>: <?php echo $tampil['nomor_adm']; ?></strong></span></td>
    <td><span class="style5">Nama</span></td>
    <td colspan="3"><span class="style5"><strong>: <?php echo $tampil['biodata_nama']; ?></strong></span></td>
    </tr>
  <tr>
    <td><span class="style5">KTP</span></td>
    <td><span class="style5"><strong>: <?php echo $tampil['biodata_nik']; ?></strong></span></td>
    <td><span class="style5">Nomor KK</span></td>
    <td colspan="3"><span class="style5"><strong>: <?php echo $tampil['keluarga_kk']; ?></strong></span></td>
  </tr>
  <tr>
    <td><span class="style5">Tempat Lahir</span></td>
    <td><span class="style5"><strong>: <?php echo $tampil['biodata_tempat_lahir']; ?></strong></span></td>
    <td><span class="style5">Tgl  Lahir</span></td>
    <td colspan="3"><span class="style5"><strong>: <?php echo date("d-m-Y",strtotime($tampil['biodata_tanggal_lahir'])); ?></strong></span></td>
  </tr>
  <tr>
    <td><span class="style5">Jenis Kelamn</span></td>
    <td><span class="style5"><strong>: <?php echo $tampil['biodata_kelamin']; ?></strong></span></td>
    <td><span class="style5">Status</span></td>
    <td colspan="3"><span class="style5"><strong>: <?php echo $tampil['biodata_status']; ?></strong></span></td>
  </tr>
  <tr>
    <td colspan="6"><span class="style5">Telah diinterview di HRD, dan untuk kelanjutannya harap bapak interview kembali.  </span></td>
    </tr>
  <tr>
    <td colspan="6"><span class="style5">Apabila hasil interview pelamar tersebut dapat diterima, kami usulkan agar : </span></td>
  </tr>
  
  <tr>
    <td align="center"><span class="style5">- </span></td>
    <td><span class="style5"> Diterima pada bagian </span></td>
    <td colspan="4"><span class="style5">: <?php echo $tampil['nama_bagian']; ?></span></td>
    </tr>
  <tr>
    <td align="center"><span class="style5">-</span></td>
    <td><span class="style5">Konfirmasi hari / tanggal </span></td>
	<?php 
	$day=date("D", strtotime($tampil['pengiriman_tanggal'])); 
	$daylist=array(
			'Sun' =>'Minggu', 
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu' );
	?>
	
    <td colspan="4"><span class="style5">: <?php echo $daylist[$day];  ?> / <?php echo date("d - m - Y", strtotime($tampil['pengiriman_tanggal'])); ?></span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">-</span></td>
    <td><span class="style5">Pukul</span></td>
    <td colspan="4"><span class="style5">: <?php echo $tampil['pengiriman_jam']; ?></span></td>
  </tr>
  <tr>
    <td align="center"><span class="style5">-</span></td>
    <td><span class="style5">Pakaian rapi formal / hitam putih. </span></td>
    <td><span class="style5"></span></td>
    <td><span class="style5"></span></td>
    <td width="18%"><span class="style5"></span></td>
    <td width="13%"><span class="style5"></span></td>
  </tr>
  <tr>
    <td colspan="6"><span class="style5">Jika usulan diatas ada perubahan, harap memberitahukan kami. </span></td>
  </tr>
  <tr>
    <td colspan="6"><span class="style5">Atas kerjasamanya kami ucapkan terima kasih. </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center"><span class="style5">Jakarta, <?php echo date("d - F - Y", strtotime($tampil['pengiriman_tanggal'])); ?></span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center"><span class="style5">Hormat kami, </span></td>
    </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center"><span class="style5">(___________________) (___________________)  </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" align="center">Kelengkapan Data Setelah Diterima </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style5">Nomor NPWP  </span></td>
    <td><strong>: ............................................ </strong></td>
    <td><span class="style5">Nomor BCA </span></td>
    <td colspan="3"><strong>: ............................................ </strong></td>
  </tr>
  <tr>
    <td><span class="style5">Nomor ID </span></td>
    <td><strong>: ............................................ </strong></td>
    <td><span class="style5">Status PTKP </span></td>
    <td colspan="3"><strong>: ............................................ </strong></td>
  </tr>
  <tr>
    <td><span class="style5">Bagian </span></td>
    <td><strong>: ............................................ </strong></td>
    <td><span class="style5">Cabang</span></td>
    <td colspan="3"><strong>: ............................................ </strong></td>
  </tr>
  <tr>
    <td><span class="style5">Upah </span></td>
    <td><strong>: ............................................ </strong></td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style5">Jenis  </span></td>
    <td><strong>: MG ..... </strong></td>
    <td><span class="style5">Nomor Reg. </span></td>
    <td colspan="3"><strong>: ............................................ </strong></td>
  </tr>
  <tr>
    <td><span class="style5">Awal MG </span></td>
    <td><strong>: ............................................ </strong></td>
    <td><span class="style5">Akhir MG </span></td>
    <td colspan="3"><strong>: ............................................ </strong></td>
  </tr>
</table>


</td>
</tr>
</table>
