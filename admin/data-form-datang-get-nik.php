<?php
session_start();
include '../controller/config.php';
$nik_id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tbl_datadatang WHERE id_datadatang='$nik_id'");
?>
<div class="modal-content">
    <div class="block block-themed block-transparent mb-0">
        <div class="block-header bg-primary-dark">
            <h3 class="block-title">Data Formulir</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <form method="POST">
                <input type="hidden" name="id_petugas" value="<?= $_SESSION['id']; ?>">
                <input type="hidden" name="id_pemohon" value="<?= $nik_id; ?>">
                <!-- Regular -->
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    if ($row['statuskk_pindah'] == 'numpangkk') {
                        $kk = "Numpang Kartu Keluarga";
                    } else if ($row['statuskk_pindah'] == 'membuatkkbaru') {
                        $kk = "Membuat Kartu Keluarga Baru";
                    } else if ($row['statuskk_pindah'] == 'nomorkktetap') {
                        $kk = "Nomor Kartu Keluarga Tetap";
                    }
                ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-nomorsurat">Nomor Surat</label>
                                <input readonly type="text" id="val-nomorsurat" name="nomorsurat" class="form-control" required value="<?= htmlentities($row['nomor_surat_pindah']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-nikpemohon">NIK Pemohon</label>
                                <input readonly type="text" id="val-nikpemohon" name="nikpemohon" class="form-control" required value="<?= htmlentities($row['nik_pemohon']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-nama_pemohon">Nama Pemohon</label>
                                <input readonly type="text" id="val-nama_pemohon" name="namapemohon" class="form-control" required value="<?= htmlentities($row['nama_pemohon']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="val-rtasal">RT Asal</label>
                                <input readonly type="text" id="val-rtasal" class="form-control" required value="<?= htmlentities($row['rt_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="val-rwasal">RW Asal</label>
                                <input readonly type="text" id="val-rwasal" class="form-control" required value="<?= htmlentities($row['rw_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="val-rttujuan">RT Tujuan</label>
                                <input readonly type="text" id="val-rttujuan" class="form-control" required value="<?= htmlentities($row['rt_tujuan']); ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="val-rwtujuan">RW Tujuan</label>
                                <input readonly type="text" id="val-rwtujuan" class="form-control" required value="<?= htmlentities($row['rw_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-alamatasal">Alamat Asal</label>
                                <input readonly type="text" id="val-alamatasal" name="alamatasal" class="form-control" required value="<?= htmlentities($row['alamat_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-alamattujuan">Alamat Tujuan</label>
                                <input readonly type="text" id="val-alamattujuan" name="alamattujuan" class="form-control" required value="<?= htmlentities($row['alamat_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kelurahanasal">Desa / Kelurahan Asal</label>
                                <input readonly type="text" id="val-kelurahanasal" name="kelurahanasal" class="form-control" required value="<?= htmlentities($row['desa_kelurahan_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kelurahantujuan">Desa / Kelurahan Tujuan</label>
                                <input readonly type="text" id="val-kelurahantujuan" name="kelurahantujuan" class="form-control" required value="<?= htmlentities($row['desa_kelurahan_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kecamatanasal">Kecamatan Asal</label>
                                <input readonly type="text" id="val-kecamatanasal" name="kecamatanasal" class="form-control" required value="<?= htmlentities($row['kecamatan_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kecamatantujuan">Kecamatan Tujuan</label>
                                <input readonly type="text" id="val-kecamatantujuan" name="kecamatantujuan" class="form-control" required value="<?= htmlentities($row['kecamatan_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kabkotaasal">Kabupaten / Kota Asal</label>
                                <input readonly type="text" id="val-kabkotaasal" name="kotaasal" class="form-control" required value="<?= htmlentities($row['kabupaten_kota_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-kabkotatujuan">Kabupaten / Kota Tujuan</label>
                                <input readonly type="text" id="val-kabkotatujuan" name="kotatujuan" class="form-control" required value="<?= htmlentities($row['kabupaten_kota_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-provinsiasal">Provinsi Asal</label>
                                <input readonly type="text" id="val-provinsiasal" name="provinsiasal" class="form-control" required value="<?= htmlentities($row['provinsi_asal']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-provinsitujuan">Provinsi Tujuan</label>
                                <input readonly type="text" id="val-provinsitujuan" name="provinsitujuan" class="form-control" required value="<?= htmlentities($row['provinsi_tujuan']); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-tanggaldatang">Tanggal Datang</label>
                                <input readonly type="text" id="val-tanggaldatang" name="tanggaldatang" class="form-control" required value="<?= htmlentities($row['tanggal_datang']); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="val-statuskk">Status KK</label>
                                <input readonly type="text" id="val-statuskk" name="statuskk" class="form-control" required value="<?= $kk; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row items-push js-gallery img-fluid-100">
                        <div class="col-md-4 animated fadeIn">
                            <div class="form-group">
                                <label for="val-provinsiasal">Foto TTD</label>
                                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="" target="popup" onclick="window.open('../img/<?= htmlentities($row['foto_ttd']); ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                                    <img src="../img/<?= htmlentities($row['foto_ttd']); ?>" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animated fadeIn">
                            <div class="form-group">
                                <label for="val-provinsitujuan">Foto KTP</label>
                                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="" target="popup" onclick="window.open('../img/<?= htmlentities($row['foto_ktp']); ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                                    <img src="../img/<?= htmlentities($row['foto_ktp']); ?>" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 animated fadeIn">
                            <div class="form-group">
                                <label for="val-provinsitujuan">Scan Surat Ket. Pindah</label>
                                <a class="img-link img-link-zoom-in img-thumb img-lightbox" style="width: 100%;" href="" target="popup" onclick="window.open('../img/<?= htmlentities($row['foto_kk']); ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                                    <img src="../img/<?= htmlentities($row['scan_surat']); ?>" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="row mt-2">
                        <?php if ($row['status'] == 1) { ?>
                            <div class="col-12 col-md-2">
                                <button type="submit" name="arsipterimadatang" class="btn btn-primary full-button">Arsip Data</button>
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" name="arsiptundadatang" class="btn btn-danger full-button">Pending Data</button>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- END Submit -->
                <?php } ?>
            </form>
        </div>
    </div>
</div>