<?php
$thisPage = 'FORM';
require './controller/config.php';
include "./model/user/function_datapindah.php";
include "./model/user/function_kirimdatapindah.php";
include "./view/user/header.php";
?>
<title>Form Pindah</title>
</head>

<?php include './view/user/nav.php'; ?>

<!-- ======= Main ======== -->
<main id="main">
    <section class="contact section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Form Data Pindah Penduduk</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" class="php-email-form" enctype="multipart/form-data">
                        <h4 class="text-center text-uppercase">Data Daerah Asal</h4>
                        <hr>
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
                                <label for="kodeposdaerahasal">Kode Pos</label>
                                <input type="number" name="kodeposdaerahasal" class="form-control" id="kodeposdaerahasal" placeholder="Kode Pos" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="notelpdaerahasal">Telepon</label>
                                <input type="text" class="form-control" name="notelpdaerahasal" id="notelpdaerahasal" placeholder="Nomor Telepon" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
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
                        <h4 class="text-center text-uppercase">Data Kepindahan</h4>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="alasanpindah">Alasan Pindah</label>
                                <input type="text" name="alasanpindah" class="form-control" id="alasanpindah" placeholder="Alasan Pindah" data-rule="minlen:5" data-msg="Please enter at least 5 chars" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="alamatdaerahtujuan">Alamat Tujuan Pindah</label>
                                <input type="text" name="alamatdaerahtujuan" class="form-control" id="alamatdaerahtujuan" placeholder="Alamat Tujuan Pindah" data-rule="minlen:10" data-msg="Please enter at least 10 chars" />
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
                                <label>Status Nomor Kartu Keluarga Bagi Yang Tidak Pindah</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskktidakpindah" id="numpangkk" value="numpangkk">
                                    <label class="form-check-label" for="numpangkk">
                                        Numpang KK
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskktidakpindah" id="membuatkkbaru" value="membuatkkbaru">
                                    <label class="form-check-label" for="membuatkkbaru">
                                        Membuat KK Baru
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskktidakpindah" id="nomorkktetap" value="nomorkktetap">
                                    <label class="form-check-label" for="nomorkktetap">
                                        Nomor KK Tetap
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label>Status Nomor Kartu Keluarga Bagi Yang Pindah</label>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskkpindah" id="numpangkk" value="numpangkk">
                                    <label class="form-check-label" for="numpangkk">
                                        Numpang KK
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskkpindah" id="membuatkkbaru" value="membuatkkbaru">
                                    <label class="form-check-label" for="membuatkkbaru">
                                        Membuat KK Baru
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="statuskkpindah" id="nomorkktetap" value="nomorkktetap">
                                    <label class="form-check-label" for="nomorkktetap">
                                        Nomor KK Tetap
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-center text-uppercase">Berkas Pendukung</h4>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-4 form-group">
                                <label>Foto TTD Pemohon</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="foto_ttd" type="file" name="foto_ttd">
                                    <label tabindex="0" for="foto_ttd" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Foto KTP Pemohon</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="foto_ktp" type="file" name="foto_ktp">
                                    <label tabindex="0" for="foto_ktp" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Foto KK Pemohon</label>
                                <div class="input-file-container">
                                    <input class="input-file" id="foto_kk" type="file" name="foto_kk">
                                    <label tabindex="0" for="foto_kk" class="input-file-trigger">Select a file</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center"><button type="submit" name="kirimdatapindah">Kirim Data</button></div>
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