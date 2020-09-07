<?php
$nik_id = $_GET['nik'];
$id = $_GET['id'];
?>
<div class="modal-content">
    <div class="block block-themed block-transparent mb-0">
        <div class="block-header bg-primary-dark p-4">
            <h3 class="block-title text-center">Cetak Surat Pindah Nik <?= $nik_id; ?></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close" aria-hidden="true">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content block-content-full">
            <div class="col-lg-12">
                <!-- Form Horizontal - Default Style -->
                <form class="mb-5" method="POST">
                    <input type="hidden" name="id" value=<?= $id; ?>>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="nomorsurat">Nomor Surat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nomorsurat" name="nomorsurat" placeholder="Masukan Nomor Surat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 ml-auto">
                            <button type="submit" class="btn btn-primary" name="cetaksuratpindah">Cetak Surat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>