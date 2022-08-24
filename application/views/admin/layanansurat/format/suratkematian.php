<html>
<head>
<title>Cetak Surat Keterangan Kematian</title>
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
<img name="_1400:850" src="<?= base_url('assets/img/line_surat_kematian.jpg')?>" height="1400" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_550:29" style="top:29;left:550">
<span id="_24.0" style="font-weight:bold; font-family:Times New Roman; font-size:24.0px; color:#000000">
KODE. F-2.29</span>
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
<div class="pos" id="_279:214" style="top:214;left:279">
<span id="_16.8" style="font-weight:bold; font-family:Times New Roman; font-size:16.8px; color:#000000">
SURAT KETERANGAN KEMATIAN<span id="_15.4" style="font-weight:normal; font-family:Arial; font-size:15.4px"> </span></span>
</div>
<div class="pos" id="_300:236" style="top:236;left:300">
<span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
Reg No: <?= $d->nomor_surat ?> </span>
</div>
<div class="pos" id="_100:279" style="top:279;left:100">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
Nama Kepala Kelurga</span>
</div>
<div class="pos" id="_350:279" style="top:279;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_ayah ?></span>
</div>
<div class="pos" id="_100:301" style="top:301;left:100">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
Nomor Kartu Keluarga</span>
</div>
<div class="pos" id="_350:301" style="top:301;left:350">
<span id="_17.5" style=" font-family:Times New Roman; font-size:17.5px; color:#000000">
:  <?= $d->nomor_kartu_keluarga ?></span>
</div>
<div class="pos" id="_100:347" style="top:347;left:100">
<span id="_16.3" style="font-weight:bold; font-family:Times New Roman; font-size:16.3px; color:#000000">
JENAZAH</span>
</div>
<div class="pos" id="_125:391" style="top:391;left:125">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
1. NIK </span>
</div>
<div class="pos" id="_350:391" style="top:391;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik ?></span>
</div>
<div class="pos" id="_125:411" style="top:411;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:411" style="top:411;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama ?></span>
</div>
<div class="pos" id="_125:431" style="top:431;left:125">
<span id="_19.1" style=" font-family:Times New Roman; font-size:19.1px; color:#000000">
3. Jenis Kelamin</span>
</div>
<div class="pos" id="_350:431" style="top:431;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->kelamin ?></span>
</div>
<div class="pos" id="_125:450" style="top:450;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
4. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:450" style="top:450;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir ?> / <?= $d->umur ?></span>
</div>
<div class="pos" id="_125:470" style="top:470;left:125">
<span id="_18.6" style=" font-family:Times New Roman; font-size:18.6px; color:#000000">
5. Tempat Lahir</span>
</div>
<div class="pos" id="_349:470" style="top:470;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tempat_lahir ?></span>
</div>
<div class="pos" id="_125:489" style="top:489;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
6. Agama</span>
</div>
<div class="pos" id="_350:489" style="top:489;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->agama ?></span>
</div>
<div class="pos" id="_125:509" style="top:509;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
7. Pekerjaan</span>
</div>
<div class="pos" id="_350:509" style="top:509;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan ?></span>
</div>
<div class="pos" id="_125:528" style="top:528;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
8. Alamat</span>
</div>
<div class="pos" id="_350:528" style="top:528;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat ?></span>
</div>
<div class="pos" id="_125:607" style="top:607;left:125">
<span id="_18.4" style=" font-family:Times New Roman; font-size:18.4px; color:#000000">
9. Anak ke</span>
</div>
<div class="pos" id="_350:607" style="top:607;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->anak_ke ?></span>
</div>
<div class="pos" id="_125:626" style="top:626;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
10. Tanggal Kematian</span>
</div>
<div class="pos" id="_200:626" style="top:626;left:350">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
: <?= $d->tanggal_kematian ?></span>
</div>
<div class="pos" id="_125:646" style="top:646;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
11. Pukul</span>
</div>
<div class="pos" id="_200:646" style="top:646;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->jam_kematian ?></span>
</div>
<div class="pos" id="_349:646" style="top:646;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
</span>
</div>
<div class="pos" id="_125:665" style="top:665;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
12. Sebab Kematian</span>
</div>
<div class="pos" id="_200:665" style="top:665;left:350">
<span id="_18.8" style=" font-family:Times New Roman; font-size:18.8px; color:#000000">
: <?= $d->sebab_kematian ?></span>
</div>
<div class="pos" id="_125:685" style="top:685;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
13. Tempat Kematian</span>
</div>
<div class="pos" id="_200:685" style="top:685;left:350">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
: <?= $d->tempat_kematian ?></span>
</div>
<div class="pos" id="_125:704" style="top:704;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
14. Yang Menerangkan</span>
</div>
<div class="pos" id="_200:704" style="top:704;left:350">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
: <?= $d->yang_menerangkan ?></span>
</div>
<div class="pos" id="_100:744" style="top:744;left:100">
<span id="_16.3" style="font-weight:bold; font-family:Times New Roman; font-size:16.3px; color:#000000">
IBU</span>
</div>
<div class="pos" id="_125:789" style="top:789;left:125">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:789" style="top:789;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_ibu ?></span>
</div>
<div class="pos" id="_125:808" style="top:808;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:808" style="top:808;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_ibu ?></span>
</div>
<div class="pos" id="_125:828" style="top:828;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:828" style="top:828;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_ibu ?> / <?= $d->umur_ibu ?></span>
</div>
<div class="pos" id="_125:847" style="top:847;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:847" style="top:847;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_ibu ?></span>
</div>
<div class="pos" id="_125:867" style="top:867;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:867" style="top:867;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_ibu ?></span>
</div>
<div class="pos" id="_100:929" style="top:929;left:100">
<span id="_16.3" style="font-weight:bold; font-family:Times New Roman; font-size:16.3px; color:#000000">
AYAH</span>
</div>
<div class="pos" id="_125:973" style="top:973;left:125">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:973" style="top:973;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_ayah ?></span>
</div>
<div class="pos" id="_125:993" style="top:993;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:993" style="top:993;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_ayah ?></span>
</div>
<div class="pos" id="_125:1013" style="top:1013;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:1013" style="top:1013;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_ayah ?>/<?= $d->umur_ayah ?></span>
</div>
<div class="pos" id="_125:1032" style="top:1032;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1032" style="top:1032;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_ayah ?></span>
</div>
<div class="pos" id="_125:1052" style="top:1052;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1052" style="top:1052;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_ayah ?></span>
</div>
<div class="pos" id="_0:0" style="top:1115">
<img name="_1400:850" src="<?= base_url('assets/img/line_surat_kematian_22.jpg')?>" height="1115" width="850" border="0" usemap="#Map"></div>
<div class="pos" id="_550:1429" style="top:1115;left:550">

</div>
<div class="pos" id="_100:1114" style="top:1195;left:100">
<span id="_16.3" style="font-weight:bold; font-family:Times New Roman; font-size:16.3px; color:#000000">
PELAPOR</span>
</div>
<div class="pos" id="_125:1158" style="top:1244;left:125">
<span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1158" style="top:1244;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_pelapor ?></span>
</div>
<div class="pos" id="_125:1181" style="top:1264;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1181" style="top:1264;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_pelapor ?></span>
</div>
<div class="pos" id="_125:1203" style="top:1284;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:1203" style="top:1284;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_pelapor ?>/<?= $d->umur_pelapor ?></span>
</div>
<div class="pos" id="_125:1226" style="top:1304;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1226" style="top:1304;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_pelapor ?></span>
</div>
<div class="pos" id="_125:1248" style="top:1324;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1248" style="top:1324;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_pelapor ?></span>
</div>

<div class="pos" id="_100:1524" style="top:1375;left:100">
<span id="_16.0" style="font-weight:bold; font-family:Times New Roman; font-size:16.0px; color:#000000">
SAKSI I</span>
</div>
<div class="pos" id="_125:1569" style="top:1420;left:125">
<span id="_16.0" style=" font-family:Times New Roman; font-size:16.0px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1569" style="top:1420;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1591" style="top:1440;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1591" style="top:1440;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1614" style="top:1460;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:1614" style="top:1460;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_saksi_1 ?>/<?= $d->umur_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1636" style="top:1480;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1636" style="top:1480;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_saksi_1 ?></span>
</div>
<div class="pos" id="_125:1659" style="top:1500;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1659" style="top:1500;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_saksi_1 ?></span>
</div>
<div class="pos" id="_100:1704" style="top:1532;left:100">
<span id="_16.4" style="font-weight:bold; font-family:Times New Roman; font-size:16.4px; color:#000000">
SAKSI II</span>
</div>
<div class="pos" id="_125:1749" style="top:1580;left:125">
<span id="_16.4" style=" font-family:Times New Roman; font-size:16.4px; color:#000000">
1. NIK</span>
</div>
<div class="pos" id="_350:1749" style="top:1580;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nik_saksi_2 ?></span>
</div>
<div class="pos" id="_125:1771" style="top:1600;left:125">
<span id="_18.5" style=" font-family:Times New Roman; font-size:18.5px; color:#000000">
2. Nama Lengkap</span>
</div>
<div class="pos" id="_350:1771" style="top:1600;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->nama_saksi_2 ?></span>
</div>
<div class="pos" id="_125:1794" style="top:1620;left:125">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
3. Tanggal Lahir/Umur</span>
</div>
<div class="pos" id="_349:1794" style="top:1620;left:349">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->tanggal_lahir_saksi_2 ?>/<?= $d->umur_saksi_2 ?></span>
</div>
<div class="pos" id="_125:1816" style="top:1640;left:125">
<span id="_18.7" style=" font-family:Times New Roman; font-size:18.7px; color:#000000">
4. Pekerjaan</span>
</div>
<div class="pos" id="_350:1816" style="top:1640;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->pekerjaan_saksi_2 ?></span>
</div>
<div class="pos" id="_125:1839" style="top:1660;left:125">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
5. Alamat</span>
</div>
<div class="pos" id="_350:1839" style="top:1660;left:350">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
: <?= $d->alamat_saksi_2 ?></span>
</div>
<div class="pos" id="_450:2019" style="top:1860;left:450">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Pekanbaru, <?= $d->tanggal_surat_dibuat ?></span>
</div>
<div class="pos" id="_500:2064" style="top:1900;left:500">
<span id="_19.3" style=" font-family:Times New Roman; font-size:19.3px; color:#000000">
Mengetahui:</span>
</div>
<div class="pos" id="_700:2064" style="top:1900;left:700">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
  </span>
</div>
<div class="pos" id="_450:2086" style="top:1930;left:450">
<span id="_17.2" style=" font-family:Times New Roman; font-size:17.2px; color:#000000">
LURAH LIMBUNGAN BARU</span>
</div>
<div class="pos" id="_600:2176" style="top:2050;left:480">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
(DASRIATI, S,Sos) </span>
</div>
<div class="pos" id="_600:2176" style="top:2070;left:440">
<span id="_19.2" style=" font-family:Times New Roman; font-size:19.2px; color:#000000">
NIP. 19690721 199303 2 002 </span>
</div>
</nowrap></nobr>
</body>
<?php } ?>
</html>

<script>
window.print();
</script>
