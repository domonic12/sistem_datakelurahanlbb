<html>
<head>
<title>Cetak Surat Keterangan Kelahiran</title>
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
<img name="_1400:850" src="<?= base_url('assets/img/line_surat_kelahiran.jpg')?>" height="1400" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_550:29" style="top:29;left:550">
<span id="_24.0" style="font-weight:bold; font-family:Times New Roman; font-size:24.0px; color:#000000">
KODE. F-2.01</span>
</div>
<div class="pos" id="_100:124" style="top:124;left:100">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
Pemerintah Kelurahan</span>
</div>
<div class="pos" id="_349:124" style="top:124;left:349">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
: Limbungan Baru</span>
</div>
<div class="pos" id="_100:146" style="top:146;left:100">
<span id="_17.7" style=" font-family:Times New Roman; font-size:17.7px; color:#000000">
Kecamatan</span>
</div>
<div class="pos" id="_349:146" style="top:146;left:349">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
: Rumbai Pesisir</span>
</div>
<div class="pos" id="_100:169" style="top:169;left:100">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
Kota</span>
</div>
<div class="pos" id="_350:169" style="top:169;left:350">
<span id="_18.9" style=" font-family:Times New Roman; font-size:18.9px; color:#000000">
: Kota Pekanbaru</span>
</div>
<div class="pos" id="_274:214" style="top:214;left:274">
<span id="_16.8" style="font-weight:bold; font-family:Times New Roman; font-size:16.8px; color:#000000">
SURAT KETERANGAN KELAHIRAN</span>
</div>
<div class="pos" id="_294:236" style="top:236;left:294">
<span id="_16.8" style="font-weight:bold; font-family:Times New Roman; font-size:16.8px; color:#000000">
(WARGA NEGERA INDONESIA)<span id="_15.4" style="font-weight:normal; font-family:Arial; font-size:15.4px"> </span></span>
</div>
<div class="pos" id="_300:258" style="top:258;left:300">
<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
Reg No: <?= $d->nomor_surat ?></span>
</div>
<div class="pos" id="_100:301" style="top:301;left:100">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
Nama Kepala Keluarga</span>
</div>
<div class="pos" id="_350:301" style="top:301;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_ayah ?></span>
</div>
<div class="pos" id="_100:324" style="top:324;left:100">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
Nomor Kartu Keluarga</span>
</div>
<div class="pos" id="_350:324" style="top:324;left:350">
<span id="_17.5" style=" font-family:Times New Roman; font-size:17.5px; color:#000000">
:  </span>
</div>
<div class="pos" id="_100:369" style="top:369;left:100">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
BAYI/ANAK</span>
</div>
<div class="pos" id="_125:414" style="top:414;left:125">
<span id="_17.3" style=" font-family:Times New Roman; font-size:17.3px; color:#000000">
1. Nama</span>
</div>
<div class="pos" id="_350:414" style="top:414;left:350">
<span id="_17.3" style=" font-family:Times New Roman; font-size:17.3px; color:#000000">
: <?= $d->nama_anak ?></span>
</div>
<div class="pos" id="_125:434" style="top:434;left:125">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
2. Jenis Kelamin</span>
</div>
<div class="pos" id="_350:434" style="top:434;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kelamin_anak ?></span>
</div>
<div class="pos" id="_125:453" style="top:453;left:125">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
3. Tempat dilahirkan</span>
</div>
<div class="pos" id="_350:453" style="top:453;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tempat_dilahirkan ?></span>
</div>
<div class="pos" id="_125:473" style="top:473;left:125">
<span id="_19.0" style=" font-family:Times New Roman; font-size:19.0px; color:#000000">
4. Tempat kelahiran</span>
</div>
<div class="pos" id="_350:473" style="top:473;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tempat_kelahiran ?></span>
</div>
<div class="pos" id="_125:492" style="top:492;left:125">
<span id="_18.8" style=" font-family:Times New Roman; font-size:18.8px; color:#000000">
5. Hari dan Tanggal Lahir</span>
</div>
<div class="pos" id="_350:512" style="top:492;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
:  <?= $d->hari_tanggal_kelahiran ?></span>
</div>
<div class="pos" id="_125:512" style="top:512;left:125">
<span id="_17.8" style=" font-family:Times New Roman; font-size:17.8px; color:#000000">
6. Pukul</span>
</div>
<div class="pos" id="_350:512" style="top:512;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->jam_kelahiran ?> WIB</span>
</div>
<div class="pos" id="_125:531" style="top:531;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
7. Jenis Kelahiran</span>
</div>
<div class="pos" id="_350:531" style="top:531;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->jenis_kelahiran ?></span>
</div>
<div class="pos" id="_125:551" style="top:551;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
8. Kelahiran ke</span>
</div>
<div class="pos" id="_350:551" style="top:551;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kelahiran_ke ?></span>
</div>
<div class="pos" id="_125:570" style="top:570;left:125">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
9. Penolong Kelahiran</span>
</div>
<div class="pos" id="_349:570" style="top:570;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->penolong_kelahiran ?></span>
</div>
<div class="pos" id="_125:590" style="top:590;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
10.</span>
</div>
<div class="pos" id="_200:590" style="top:590;left:150">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
Berat bayi</span>
</div>
<div class="pos" id="_350:590" style="top:590;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->berat_bayi ?></span>
</div>
<div class="pos" id="_450:590" style="top:590;left:450">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
gram</span>
</div>
<div class="pos" id="_125:610" style="top:610;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
11.</span>
</div>
<div class="pos" id="_200:610" style="top:610;left:150">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
Panjang Bayi</span>
</div>
<div class="pos" id="_350:610" style="top:610;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->panjang_bayi ?></span>
</div>
<div class="pos" id="_450:610" style="top:610;left:450">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
Cm</span>
</div>
<div class="pos" id="_100:652" style="top:652;left:100">
<span id="_16.2" style="font-weight:bold; font-family:Times New Roman; font-size:16.2px; color:#000000">
IBU</span>
</div>
<div class="pos" id="_125:697" style="top:697;left:125">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:697" style="top:697;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik ?></span>
</div>
<div class="pos" id="_125:716" style="top:716;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:716" style="top:716;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama ?></span>
</div>
<div class="pos" id="_125:736" style="top:736;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_350:736" style="top:736;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir ?>/<?= $d->umur ?></span>
</div>
<div class="pos" id="_125:755" style="top:755;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:755" style="top:755;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan ?></span>
</div>
<div class="pos" id="_125:775" style="top:775;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:775" style="top:775;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat ?></span>
</div>
<div class="pos" id="_125:834" style="top:800;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
6. Kewarganegaraan</span>
</div>
<div class="pos" id="_350:834" style="top:800;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kewarganegaraan ?></span>
</div>
<div class="pos" id="_125:853" style="top:843;left:125">
<span id="_18.9" style=" font-family:Times New Roman; font-size:18.9px; color:#000000">
7. Kebangsaan</span>
</div>
<div class="pos" id="_350:853" style="top:843;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kebangsaan ?></span>
</div>
<div class="pos" id="_125:873" style="top:873;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
8. Tanggal Perkawinan</span>
</div>
<div class="pos" id="_350:873" style="top:873;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_perkawinan ?></span>
</div>
<div class="pos" id="_100:915" style="top:915;left:100">
<span id="_16.3" style="font-weight:bold; font-family:Times New Roman; font-size:16.3px; color:#000000">
AYAH</span>
</div>
<div class="pos" id="_125:960" style="top:960;left:125">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:960" style="top:960;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_ayah ?></span>
</div>
<div class="pos" id="_125:979" style="top:979;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:979" style="top:979;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_ayah ?></span>
</div>
<div class="pos" id="_125:999" style="top:999;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_350:999" style="top:999;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_ayah ?>/<?= $d->umur_ayah ?></span>
</div>
<div class="pos" id="_125:1018" style="top:1018;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1018" style="top:1018;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_ayah ?></span>
</div>
<div class="pos" id="_125:1038" style="top:1038;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1038" style="top:1038;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_ayah ?></span>
</div>
<div class="pos" id="_125:1097" style="top:1058;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
6. Kewarganegaraan</span>
</div>
<div class="pos" id="_350:1097" style="top:1058;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kewarganegaraan_ayah ?></span>
</div>
<div class="pos" id="_125:1116" style="top:1078;left:125">
<span id="_18.9" style=" font-family:Times New Roman; font-size:18.9px; color:#000000">
7. Kebangsaan</span>
</div>
<div class="pos" id="_350:1116" style="top:1078;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kebangsaan_ayah ?></span>
</div>
<div class="pos" id="_125:1136" style="top:1098;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
8. Tanggal Perkawinan</span>
</div>
<div class="pos" id="_350:1136" style="top:1098;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_perkawinan_ayah ?></span>
</div>
<div class="pos" id="_0:0" style="top:1115">
<img name="_1400:850" src="<?= base_url('assets/img/line_surat_kelahiran_22.jpg')?>" height="1115" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_550:1429" style="top:1115;left:550">
</div>
<div class="pos" id="_100:1501" style="top:1198;left:100">
<span id="_16.0" style="font-weight:bold;  font-family:Times New Roman; font-size:16.0px; color:#000000">
PELAPOR</span>
</div>
<div class="pos" id="_125:1546" style="top:1244;left:125">
<span id="_16.0" style=" font-family:Times New Roman; font-size:16.0px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1546" style="top:1244;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_pelapor ?></span>
</div>
<div class="pos" id="_125:1569" style="top:1264;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1569" style="top:1264;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_pelapor ?></span>
</div>
<div class="pos" id="_125:1591" style="top:1284;left:125">
<span id="_17.8" style=" font-family:Times New Roman; font-size:17.8px; color:#000000">
3. Umur</span>
</div>
<div class="pos" id="_350:1591" style="top:1284;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->umur_pelapor ?></span>
</div>
<div class="pos" id="_125:1614" style="top:1304;left:125">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
4. Jenis Kelamin</span>
</div>
<div class="pos" id="_350:1614" style="top:1304;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kelamin_pelapor ?></span>
</div>
<div class="pos" id="_125:1636" style="top:1324;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
5. Pekerjaan</span>
</div>
<div class="pos" id="_350:1636" style="top:1324;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_pelapor ?></span>
</div>
<div class="pos" id="_125:1659" style="top:1344;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
6. Alamat</span>
</div>
<div class="pos" id="_350:1659" style="top:1344;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_pelapor ?></span>
</div>
<div class="pos" id="_100:1726" style="top:1378;left:100">
<span id="_16.4" style="font-weight:bold; font-family:Times New Roman; font-size:16.4px; color:#000000">
SAKSI I</span>
</div>
<div class="pos" id="_125:1771" style="top:1420;left:125">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1771" style="top:1420;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1794" style="top:1440;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1794" style="top:1440;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1816" style="top:1460;left:125">
<span id="_17.8" style=" font-family:Times New Roman; font-size:17.8px; color:#000000">
3. Umur</span>
</div>
<div class="pos" id="_350:1816" style="top:1460;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->umur_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1839" style="top:1480;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1839" style="top:1480;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1861" style="top:1500;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1861" style="top:1500;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_saksi_1 ?></span>
</div>
<div class="pos" id="_100:1929" style="top:1535;left:100">
<span id="_16.4" style="font-weight:bold; font-family:Times New Roman; font-size:16.4px; color:#000000">
SAKSI II</span>
</div>
<div class="pos" id="_125:1974" style="top:1580;left:125">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1974" style="top:1580;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_saksi_2 ?></span>
</div>
<div class="pos" id="_125:1996" style="top:1600;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1996" style="top:1600;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_saksi_2 ?></span>
</div>
<div class="pos" id="_125:2019" style="top:1620;left:125">
<span id="_17.8" style=" font-family:Times New Roman; font-size:17.8px; color:#000000">
3. Umur</span>
</div>
<div class="pos" id="_350:2019" style="top:1620;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->umur_saksi_2 ?></span>
</div>
<div class="pos" id="_125:2041" style="top:1640;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:2041" style="top:1640;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_saksi_2 ?></span>
</div>
<div class="pos" id="_125:2064" style="top:1660;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:2064" style="top:1660;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_saksi_2 ?></span>
</div>
<div class="pos" id="_500:2199" style="top:1880;left:500">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Pekanbaru, <?= $d->tanggal_surat_dibuat ?></span>
</div>
<div class="pos" id="_200:2244" style="top:1990;left:200">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Mengetahui:</span>
</div>
<div class="pos" id="_500:2244" style="top:1995;left:500">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
  </span>
</div>
<div class="pos" id="_150:2266" style="top:2012;left:150">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
LURAH LIMBUNGAN BARU</span>
</div>
<div class="pos" id="_550:2266" style="top:1990;left:550">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
  PELAPOR</span>
</div>

<div class="pos" id="_200:2356" style="top:2356;left:200">
<span id="_16.2" style=" font-family:Times New Roman; font-size:16.2px; color:#000000">
 </span>
</div>
<div class="pos" id="_300:2356" style="top:2155;left:160">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
(DASRIATI, S,Sos) </span>
</div>
<div class="pos" id="_500:2356" style="top:2178;left:120">
<span id="_16.3" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
NIP. 19690721 199303 2 002</span>
</div>
<div class="pos" id="_700:2356" style="top:2155;left:540">
<span id="_16.3" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
( <?= $d->nama_pelapor ?> )</span>
</div>
</nowrap></nobr>
</body>

<?php } ?>
</html>


<script>
window.print();
</script>
