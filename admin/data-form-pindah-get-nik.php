<?php
session_start();
include '../controller/config.php';
$nik_id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tbl_datapindah WHERE id_datapindah='$nik_id'");
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
                ?>
                    <div id="body-modal">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nikpemohon">NIK Pemohon</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-nikpemohon" name="nikpemohon" class="form-control" required value="<?= htmlentities($row['nik_pemohon']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nama_pemohon">Nama Pemohon</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-nama_pemohon" name="namapemohon" class="form-control" required value="<?= htmlentities($row['nama_pemohon']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nomorkk">Nomor Kartu Keluarga</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-nomorkk" name="nomorkk" class="form-control" required value="<?= htmlentities($row['nomorkk_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nama_kepala_keluarga">Nama Kepala Keluarga</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-nama_kepala_keluarga" name="namakepalakeluarga" class="form-control" required value="<?= htmlentities($row['namakepalakeluarga_asal']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="val-rtasal">RT Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-rtasal" class="form-control" required value="<?= htmlentities($row['rt_asal']); ?>" name="rtasal">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="val-rwasal">RW Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-rwasal" class="form-control" required value="<?= htmlentities($row['rw_asal']); ?>" name="rwasal">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="val-rttujuan">RT Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-rttujuan" class="form-control" required value="<?= htmlentities($row['rt_tujuan']); ?>" name="rttujuan">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="val-rwtujuan">RW Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-rwtujuan" class="form-control" required value="<?= htmlentities($row['rw_tujuan']); ?>" name="rwtujuan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-alamatasal">Alamat Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-alamatasal" name="alamatasal" class="form-control" required value="<?= htmlentities($row['alamat_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-alamattujuan">Alamat Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-alamattujuan" name="alamattujuan" class="form-control" required value="<?= htmlentities($row['alamat_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kelurahanasal">Desa / Kelurahan Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kelurahanasal" name="kelurahanasal" class="form-control" required value="<?= htmlentities($row['desa_kelurahan_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kelurahantujuan">Desa / Kelurahan Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kelurahantujuan" name="kelurahantujuan" class="form-control" required value="<?= htmlentities($row['desa_kelurahan_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kecamatanasal">Kecamatan Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kecamatanasal" name="kecamatanasal" class="form-control" required value="<?= htmlentities($row['kecamatan_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kecamatantujuan">Kecamatan Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kecamatantujuan" name="kecamatantujuan" class="form-control" required value="<?= htmlentities($row['kecamatan_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kabkotaasal">Kabupaten / Kota Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kabkotaasal" name="kotaasal" class="form-control" required value="<?= htmlentities($row['kabupaten_kota_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kabkotatujuan">Kabupaten / Kota Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-kabkotatujuan" name="kotatujuan" class="form-control" required value="<?= htmlentities($row['kabupaten_kota_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-provinsiasal">Provinsi Asal</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-provinsiasal" name="provinsiasal" class="form-control" required value="<?= htmlentities($row['provinsi_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-provinsitujuan">Provinsi Tujuan</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-provinsitujuan" name="provinsitujuan" class="form-control" required value="<?= htmlentities($row['provinsi_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-alasanpindah">Alasan Pindah</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-alasanpindah" name="alasanpindah" class="form-control" required value="<?= htmlentities($row['alasan_pindah']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-statuskk">Status KK</label>
                                    <input <?php if ($row['status'] != 0) echo "readonly"; ?> type="text" id="val-statuskk" name="statuskk" class="form-control" required value="<?= htmlentities($row['statuskk_pindah']); ?>">
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
                                    <label for="val-provinsitujuan">Foto KK</label>
                                    <a class="img-link img-link-zoom-in img-thumb img-lightbox" style="width: 100%;" href="" target="popup" onclick="window.open('../img/<?= htmlentities($row['foto_kk']); ?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                                        <img src="../img/<?= htmlentities($row['foto_kk']); ?>" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit -->
                    <div class="row mt-2">
                        <?php if ($row['status'] == 1) { ?>
                            <div class="col-12 col-md-2 mb-1">
                                <button type="submit" name="arsipterimapindah" class="btn btn-success full-button">Arsip</button>
                            </div>
                            <div class="col-12 col-md-2 mb-1">
                                <button type="submit" name="arsiptundapindah" class="btn btn-primary full-button">Pending</button>
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" name="hapusdatapindah" class="btn btn-danger full-button">Hapus</button>
                            </div>
                        <?php } else if ($row['status'] == 0) { ?>
                            <div class="col-12 col-md-2 mb-1">
                                <button type="submit" name="arsipterimapindah" class="btn btn-success full-button">Arsip</button>
                            </div>
                            <div class="col-12 col-md-2 mb-1">
                                <button type="submit" name="editdatapindah" class="btn btn-warning full-button">Edit</button>
                            </div>
                            <div class="col-12 col-md-2">
                                <button type="submit" name="hapusdatapindah" class="btn btn-danger full-button">Hapus</button>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- END Submit -->
                <?php } ?>
            </form>
        </div>
    </div>
</div>