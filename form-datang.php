<?php
$thisPage = 'FORM';
require './controller/config.php';
include "./model/user/function_datadatang.php";
include "./model/user/function_kirimdata.php";
include "./view/user/header.php";
?>
<title>Form Datang</title>
</head>

<?php include './view/user/nav.php'; ?>

<!-- ======= Main ======== -->
<main id="main">
    <section class="section-bg contact">
        <div class="container">
            <div class="section-title">
                <h2>Form Data Pindah Datang Penduduk</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" class="php-email-form" enctype="multipart/form-data">
                        <h4 class="text-center text-uppercase">Data Daerah Asal</h4>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="nomorsuratpindah">Nomor Surat Pindah</label>
                                <input type="text" name="nomorsuratpindah" class="form-control" id="nomorsuratpindah" placeholder="Nomor Surat Pindah" data-rule="minlen:16" data-msg="Please enter at least 16 numbers" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="nomorkartukeluarga">Nomor Kartu Keluarga</label>
                                <input type="number" name="nomorkartukeluargadaerahasal" class="form-control" id="nomorkartukeluarga" placeholder="Nomor Kartu Keluarga" data-rule="minlen:16" data-msg="Please enter at least 16 numbers" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="namakepalakeluarga">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" name="namakepalakeluargadaerahasal" id="namakepalakeluarga" placeholder="Nama Kepala Keluarga" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="alamatdaerahasal">Alamat</label>
                                <input type="text" name="alamatdaerahasal" class="form-control" id="alamatdaerahasal" placeholder="Alamat" data-rule="minlen:10" data-msg="Please enter at least 10 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="nomorrtdaerahasal">RT</label>
                                <input type="text" class="form-control" name="nomorrtdaerahasal" id="nomorrtdaerahasal" placeholder="Nomor RT" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="nomorrwdaerahasal">RW</label>
                                <input type="text" class="form-control" name="nomorrwdaerahasal" id="nomorrwdaerahasal" placeholder="Nomor RW" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="desakelurahandaerahasal">Desa / Kelurahan</label>
                                <input type="text" name="desakelurahandaerahasal" class="form-control" id="desakelurahandaerahasal" placeholder="Desa / Kelurahan" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="kabupatenkotadaerahasal">Kabupaten / Kota</label>
                                <input type="text" class="form-control" name="kabupatenkotadaerahasal" id="kabupatenkotadaerahasal" placeholder="Kabupaten / Kota" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="kecamatandaerahasal">Kecamatan</label>
                                <input type="text" name="kecamatandaerahasal" class="form-control" id="kecamatandaerahasal" placeholder="Kecamatan" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="provinsidaerahasal">Provinsi</label>
                                <input type="text" class="form-control" name="provinsidaerahasal" id="provinsidaerahasal" placeholder="Provinsi" data-rule="minlen:8" data-msg="Please enter at least 8 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="kodepos">Kode Pos</label>
                                <input type="number" name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="notelp">Telepon</label>
                                <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Nomor Telepon" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="nikpemohon">NIK Pemohon</label>
                                <input type="number" name="nikpemohon" class="form-control" id="nikpemohon" placeholder="NIK Pemohon" data-rule="minlen:12" data-msg="Please enter at least 12 numbers" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="namapemohon">Nama Pemohon</label>
                                <input type="text" name="namapemohon" class="form-control" id="namapemohon" placeholder="Nama Pemohon" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center text-uppercase mt-4">Data Daerah Tujuan</h4>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="nomorkartukeluargadaerahtujuan">Nomor Kartu Keluarga</label>
                                <input type="number" name="nomorkartukeluargadaerahtujuan" class="form-control" id="nomorkartukeluargadaerahtujuan" placeholder="Nomor Kartu Keluarga" data-rule="minlen:16" data-msg="Please enter at least 16 numbers" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nikkepalakeluarga">NIK Kepala Keluarga</label>
                                <input type="number" name="nikkepalakeluarga" class="form-control" id="nikkepalakeluarga" placeholder="NIK kepala Keluarga" data-rule="minlen:14" data-msg="Please enter at least 14 numbers" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="namakepalakeluargadaerahtujuan">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" name="namakepalakeluargadaerahtujuan" id="namakepalakeluargadaerahtujuan" placeholder="Nama Kepala Keluarga" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tanggalkedatangan">Tanggal Kedatangan</label>
                                <input type="date" class="form-control" name="tanggalkedatangan" id="tanggalkedatangan" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="alamatdaerahtujuan">Alamat</label>
                                <input type="text" name="alamatdaerahtujuan" class="form-control" id="alamatdaerahtujuan" placeholder="Alamat" data-rule="minlen:10" data-msg="Please enter at least 10 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="nomorrtdaerahtujuan">RT</label>
                                <input type="text" class="form-control" name="nomorrtdaerahtujuan" id="nomorrtdaerahtujuan" placeholder="Nomor RT" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-3 form-group">
                                <label for="nomorrwdaerahtujuan">RW</label>
                                <input type="text" class="form-control" name="nomorrwdaerahtujuan" id="nomorrwdaerahtujuan" placeholder="Nomor RW" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="desakelurahandaerahtujuan">Desa / Kelurahan</label>
                                <input type="text" name="desakelurahandaerahtujuan" class="form-control" id="desakelurahandaerahtujuan" placeholder="Desa / Kelurahan" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="kabupatenkotadaerahtujuan">Kabupaten / Kota</label>
                                <input type="text" class="form-control" name="kabupatenkotadaerahtujuan" id="kabupatenkotadaerahtujuan" placeholder="Kabupaten / Kota" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="kecamatandaerahtujuan">Kecamatan</label>
                                <input type="text" name="kecamatandaerahtujuan" class="form-control" id="kecamatandaerahtujuan" placeholder="Kecamatan" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="provinsidaerahtujuan">Provinsi</label>
                                <input type="text" class="form-control" name="provinsidaerahtujuan" id="provinsidaerahtujuan" placeholder="Provinsi" data-rule="minlen:8" data-msg="Please enter at least 8 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Status Nomor Kartu Keluarga Bagi Yang Pindah</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskk" id="numpangkk" value="Numpang Kartu Keluarga">
                                    <label class="form-check-label" for="numpangkk">
                                        Numpang KK
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskk" id="membuatkkbaru" value="Membuat Kartu Keluarga Baru">
                                    <label class="form-check-label" for="membuatkkbaru">
                                        Membuat KK Baru
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskk" id="nomorkktetap" value="Nomor Kartu Keluarga Tetap">
                                    <label class="form-check-label" for="nomorkktetap">
                                        Nomor KK Tetap
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center text-uppercase mt-4">Berkas Pendukung</h4>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-4 form-group">
                                <label>Foto TTD</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="my-file" type="file" name="fotottd">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Foto KTP</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="my-file" type="file" name="fotoktp">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Scan Surat Keterangan Pindah</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="my-file" type="file" name="scansuratpindah">
                                    <label tabindex="0" for="my-file" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center"><button type="submit" name="kirimdatadatang">Kirim Data</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main -->

<?php

include "./view/user/copyright.php";
include "./view/user/footer.php";

?>