<html>
<head>
<title>Cetak Surat Kedatangan</title>
<style type="text/css">
<!--
body { font-family: Arial; font-size: 22.3px }
.pos { position: absolute; z-index: 0; left: 0px; top: 0px }
-->
</style>
</head>
<body>
<?php foreach($csurat as $d){ ?>
<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<img name="_1400:850" src="<?= base_url('assets/img/line_surat_kedatangan1.jpg')?>" height="1350" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_565:45" style="top:45;left:565">
<span id="_24.0" style="font-weight:bold; font-family:Times New Roman; font-size:24.0px; color:#000000">
KODE. F-1-38</span>
</div>
<div class="pos" id="_100:121" style="top:121;left:100">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
Pemerintah Kelurahan</span>
</div>
<div class="pos" id="_349:121" style="top:121;left:349">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
: Limbungan Baru</span>
</div>
<div class="pos" id="_100:144" style="top:144;left:100">
<span id="_17.7" style=" font-family:Times New Roman; font-size:17.7px; color:#000000">
Kecamatan</span>
</div>
<div class="pos" id="_349:144" style="top:144;left:349">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
: Rumbai Pesisir</span>
</div>
<div class="pos" id="_100:166" style="top:166;left:100">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
Kota</span>
</div>
<div class="pos" id="_350:166" style="top:166;left:350">
<span id="_18.9" style=" font-family:Times New Roman; font-size:18.9px; color:#000000">
: Kota Pekanbaru</span>
</div>
<div class="pos" id="_212:211" style="top:211;left:212">
<span id="_16.7" style="font-weight:bold; font-family:Times New Roman; font-size:16.7px; color:#000000">
FORMULIR PERMOHONAN PINDAH DATANG WNI</span>
</div>
<div class="pos" id="_265:234" style="top:234;left:265">
<span id="_18.6" style="font-weight:bold; font-family:Times New Roman; font-size:18.6px; color:#000000">
Antar Kabupaten/Kota atau Provinsi<span id="_17.1" style="font-weight:normal; font-family:Arial; font-size:17.1px"> </span></span>
</div>
<div class="pos" id="_300:256" style="top:256;left:348">
<span id="_15.0" style=" font-family:Times New Roman; font-size:15.0px; color:#000000">
No: <?= $d->nomor_surat ?></span>
</div>
<div class="pos" id="_100:322" style="top:312;left:100">
<span id="_16.9" style="font-weight:bold; font-family:Times New Roman; font-size:16.9px; color:#000000">
DATA DAERAH ASAL</span>
</div>

<div class="pos" id="_125:367" style="top:357;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
1. Nomor Kartu Keluarga </span>
</div>

<div class="pos" id="_350:406" style="top:357;left:350">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
: <?= $d->nomor_kartu_keluarga ?></span>
</div>


<div class="pos" id="_125:387" style="top:377;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Kepala Keluarga </span>
</div>

<div class="pos" id="_350:406" style="top:377;left:350">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
: <?= $d->nama_kepala_keluarga ?></span>
</div>

<div class="pos" id="_125:406" style="top:397;left:125">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
3. Alamat</span>
</div>

<div class="pos" id="_350:406" style="top:397;left:350">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
: <?= $d->alamat_asal ?></span>
</div>


<div class="pos" id="_125:484" style="top:454;left:125">
<span id="_18.0" style=" font-family:Times New Roman; font-size:18.0px; color:#000000">
4. NIK Pemohon</span>
</div>
<div class="pos" id="_350:484" style="top:454;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_pemohon ?></span>
</div>
<div class="pos" id="_125:504" style="top:474;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
5. Nama Lengkap</span>
</div>
<div class="pos" id="_350:504" style="top:474;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_pemohon ?></span>
</div>

<div class="pos" id="_100:563" style="top:543;left:100">
<span id="_17.2" style="font-weight:bold; font-family:Times New Roman; font-size:17.2px; color:#000000">
DATA DAERAH TUJUAN</span>
</div>
<div class="pos" id="_125:608" style="top:583;left:125">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
1. Status Nomor KK </span>
</div>
<div class="pos" id="_150:627" style="top:603;left:140">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
Bagi Yang Datang</span>
</div>
<div class="pos" id="_350:627" style="top:595;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->status_kartu_keluarga_tujuan ?></span>
</div>
<div class="pos" id="_150:647" style="top:603;left:150">
<span id="_16.6" style=" font-family:Times New Roman; font-size:16.6px; color:#000000">
 </span>
</div>
<div class="pos" id="_125:666" style="top:633;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nomor Kartu Keluarga </span>
</div>

<div class="pos" id="_350:406" style="top:633;left:350">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
: <?= $d->nomor_kartu_keluarga_tujuan ?></span>
</div>

<div class="pos" id="_125:686" style="top:653;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
3. NIK Kepala Keluarga</span>
</div>
<div class="pos" id="_350:686" style="top:653;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_kepala_keluarga_tujuan ?></span>
</div>
<div class="pos" id="_125:706" style="top:673;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
4. Nama Kepala Keluarga </span>
</div>

<div class="pos" id="_350:406" style="top:673;left:350">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
: <?= $d->nama_kepala_keluarga_tujuan ?></span>
</div>
<div class="pos" id="_125:725" style="top:693;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
5. Tanggal Kedatangan</span>
</div>
<div class="pos" id="_349:725" style="top:693;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_kedatangan ?></span>
</div>
<div class="pos" id="_125:745" style="top:713;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
6. Alamat</span>
</div>
<div class="pos" id="_350:745" style="top:713;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat ?></span>
</div>
<div class="pos" id="_125:823" style="top:753;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
7. Keluarga Yang Datang </span>
</div>
<div class="pos" id="_350:745" style="top:753;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->jumlah_keluarga_datang ?></span>
</div>
<div class="pos" id="_449:823" style="top:753;left:400">
<span id="_17.4" style=" font-family:Times New Roman; font-size:17.4px; color:#000000">
Orang</span>
</div>
<div class="pos" id="_550:960" style="top:880;left:550">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Pekanbaru,  <?= $d->tanggal_surat_dibuat ?></span>
</div>
<div class="pos" id="_350:1038" style="top:900;left:350">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Mengetahui:</span>
</div>
<div class="pos" id="_100:1058" style="top:925;left:100">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Petugas Registrasi</span>
</div>
<div class="pos" id="_300:1058" style="top:925;left:300">
<span id="_16.6" style="font-weight:bold; font-family:Times New Roman; font-size:16.6px; color:#000000">
LURAH LIMBUNGAN BARU</span>
</div>
<div class="pos" id="_650:1058" style="top:925;left:650">
<span id="_17.3" style=" font-family:Times New Roman; font-size:17.3px; color:#000000">
Pemohon</span>
</div>
<div class="pos" id="_100:1156" style="top:1040;left:100">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
(</span>
</div>
<div class="pos" id="_250:1156" style="top:1040;left:110">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
<?= $d->nama_petugas ?>)</span>
</div>
<div class="pos" id="_350:1156" style="top:1040;left:350">
<span id="_17.9" style=" font-family:Times New Roman; font-size:17.9px; color:#000000">
<u>DASRIATI, S.Sos</u></span>
</div>
<div class="pos" id="_600:1156" style="top:1040;left:600">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
(</span>
</div>
<div class="pos" id="_650:1156" style="top:1040;left:610">
<span id="_17.7" style=" font-family:Times New Roman; font-size:17.7px; color:#000000">
<?= $d->nama_pemohon ?> )</span>
</div>
<div class="pos" id="_300:1175" style="top:1060;left:300">
<span id="_18.9" style=" font-family:Times New Roman; font-size:18.9px; color:#000000">
NIP. 19690721 199303 2 002</span>
</div>
</nowrap></nobr>
</body>
<?php } ?>
</html>


<script>
window.print();
</script>
