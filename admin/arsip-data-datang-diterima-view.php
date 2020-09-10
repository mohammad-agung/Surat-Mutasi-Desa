<?php
session_start();
include '../controller/config.php';
$nik_id = $_GET['nik'];
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT tbl_arsip_datang.nomor_surat,tbl_arsip_datang.nama_pemohon,tbl_arsip_datang.tanggal_arsip,tbl_arsip_datang.status,tbl_arsip_datang.alamat_asal,tbl_arsip_datang.alamat_tujuan,tbl_arsip_datang.kelurahan_asal,tbl_arsip_datang.kelurahan_tujuan,tbl_arsip_datang.kecamatan_asal,tbl_arsip_datang.kecamatan_tujuan,tbl_arsip_datang.kota_asal,tbl_arsip_datang.kota_tujuan,tbl_arsip_datang.provinsi_asal,tbl_arsip_datang.provinsi_tujuan,tbl_admin.nama_user,tbl_datadatang.nik_pemohon,tbl_datadatang.id_datadatang FROM tbl_arsip_datang JOIN tbl_admin ON tbl_arsip_datang.id_petugas = tbl_admin.id_user JOIN tbl_datadatang ON tbl_arsip_datang.id_pemohon = tbl_datadatang.id_datadatang WHERE tbl_arsip_datang.id_arsip_datang = '$id'");
?>
<div class="modal-content">
    <div class="block block-themed block-transparent mb-0">
        <div class="block-header bg-primary-dark p-4">
            <h3 class="block-title text-center">View Data Nik <?= $nik_id; ?></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="col-lg-12">
                <!-- Form Horizontal - Default Style -->
                <?php while ($row = mysqli_fetch_array($query)) { ?>
                    <form class="mb-5" method="POST">
                        <input type="hidden" name="id" value=<?= $id; ?>>
                        <input type="hidden" name="id_petugas" value="<?= $_SESSION['id']; ?>">
                        <input type="hidden" name="id_pemohon" value="<?= $row['id_datadatang']; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="val-nomorsuratpindah">Nomor Surat Pindah</label>
                                    <input readonly <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-nomorsuratpindah" name="nomorsuratpindah" class="form-control" required value="<?= htmlspecialchars($row['nomor_surat']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nikpemohon">NIK Pemohon</label>
                                    <input readonly <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-nikpemohon" name="nikpemohon" class="form-control" required value="<?= $nik_id; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-nama_pemohon">Nama Pemohon</label>
                                    <input readonly <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-nama_pemohon" name="namapemohon" class="form-control" required value="<?= htmlentities($row['nama_pemohon']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-alamatasal">Alamat Asal</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-alamatasal" name="alamatasal" class="form-control" required value="<?= htmlentities($row['alamat_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-alamattujuan">Alamat Tujuan</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-alamattujuan" name="alamattujuan" class="form-control" required value="<?= htmlentities($row['alamat_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kelurahanasal">Desa / Kelurahan Asal</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kelurahanasal" name="kelurahanasal" class="form-control" required value="<?= htmlentities($row['kelurahan_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kelurahantujuan">Desa / Kelurahan Tujuan</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kelurahantujuan" name="kelurahantujuan" class="form-control" required value="<?= htmlentities($row['kelurahan_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kecamatanasal">Kecamatan Asal</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kecamatanasal" name="kecamatanasal" class="form-control" required value="<?= htmlentities($row['kecamatan_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kecamatantujuan">Kecamatan Tujuan</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kecamatantujuan" name="kecamatantujuan" class="form-control" required value="<?= htmlentities($row['kecamatan_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kabkotaasal">Kabupaten / Kota Asal</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kabkotaasal" name="kotaasal" class="form-control" required value="<?= htmlentities($row['kota_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-kabkotatujuan">Kabupaten / Kota Tujuan</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-kabkotatujuan" name="kotatujuan" class="form-control" required value="<?= htmlentities($row['kota_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-provinsiasal">Provinsi Asal</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-provinsiasal" name="provinsiasal" class="form-control" required value="<?= htmlentities($row['provinsi_asal']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="val-provinsitujuan">Provinsi Tujuan</label>
                                    <input <?php if ($row['status'] == 2) echo "readonly"; ?> type="text" id="val-provinsitujuan" name="provinsitujuan" class="form-control" required value="<?= htmlentities($row['provinsi_tujuan']); ?>">
                                </div>
                            </div>
                        </div>
                        <!-- Submit -->
                        <div class="row mt-2">
                            <?php if ($row['status'] == 1) { ?>
                                <div class="col-12 col-md-4">
                                    <button type="submit" name="arsipubahdatang" class="btn btn-primary full-button">Ubah Data</button>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- END Submit -->
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>