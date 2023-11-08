<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>

<body>
    <?php include "partials/navbar.php" ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid p-4">

                <!-- content  -->
                <h1>Edit Temuan</h1>

                <?php
                Flasher::Message();
                ?>

                <form action="<?= base_url . '/Editfuguai/update' ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['fuguai']['id'] ?>">
                    <input type="hidden" name="next" value="/<?= isset($data['next']) ? $data['next'] : 'Allfuguai'  ?>">
                    <div class="mb-3 col-md-1">
                        <label class="form-label" for="tgl">Tanggal</label>
                        <input class="form-control" name="tgl" type="date" id="tgl" autocomplete="off" value="<?= $data['fuguai']['tgl'] ?>">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label">Pelapor</label>
                        <select class="form-select" name="pelapor" type="text" autocomplete="off">
                            <option value=""> Pilih Nama </option>
                            <?php
                            foreach ($data['pelapors'] as $pelapor) {
                            ?>
                                <option value="<?= $pelapor['nama'] ?>" <?= $pelapor['nama'] == $data['fuguai']['pelapor'] ? 'selected' : '' ?>><?= $pelapor['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label class="form-label">Jenis Temuan</label>
                        <div>
                            <select class="form-select" name="fuguai_11" type="text" autocomplete="off">
                                <option value=""> Pilih Jenis Temuan </option>
                                <?php
                                foreach ($data['jenis_fuguais'] as $jenis_fuguai) {
                                ?>
                                    <option value="<?= $jenis_fuguai['jenis_fuguai'] ?>" <?= $jenis_fuguai['jenis_fuguai'] == $data['fuguai']['fuguai_11'] ? 'selected' : '' ?>><?= $jenis_fuguai['jenis_fuguai'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Temuan</label>
                        <textarea class="form-control bg-danger" name="fuguai" onkeyup="this.value = this.value.toUpperCase()" rows="2" s placeholder="Isi Detail Fuguai.."><?= $data['fuguai']['fuguai'] ?></textarea>
                    </div>


                    <div class="mb-3 col-md-4">
                        <label class="form-label">Area</label>
                        <select class="form-select" name="area">
                            <option value=""> Pilih Area </option>
                            <option value="INBOUND RM" <?= "INBOUND RM" == $data['fuguai']['area'] ? 'selected' : '' ?>>INBOUND RM</option>
                            <option value="INBOUND PM" <?= "INBOUND PM" == $data['fuguai']['area'] ? 'selected' : '' ?>>INBOUND PM</option>
                            <option value="INVENTORY RMPM" <?= "INVENTORY RMPM" == $data['fuguai']['area'] ? 'selected' : '' ?>>INVENTORY RMPM</option>
                            <option value="OUTBOUND RMPM" <?= "OUTBOUND RMPM" == $data['fuguai']['area'] ? 'selected' : '' ?>>OUTBOUND RMPM</option>
                            <option value="OTHER" <?= "OTHER" == $data['fuguai']['area'] ? 'selected' : '' ?>>OTHER</option>
                        </select>
                        <label class="form-label">No Proses</label>
                        <select class="form-select" name="no_proses">
                            <option value=""> Pilih No Proses Di Makigami </option>
                            <?php
                            foreach ($data['makigamis'] as $makigami) {
                            ?>
                                <option value="(<?= $makigami['no_proses'] ?>)<?= $makigami['detail'] ?>" <?= '(' . $makigami['no_proses'] . ')' . $makigami['detail'] == $data['fuguai']['no_proses'] ? 'selected' : '' ?>>(<?= $makigami['no_proses'] ?>)<?= $makigami['detail'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="kategori" type="text" onkeyup="this.value = this.value.toUpperCase()" placeholder="Pilih Kategori...">
                            <option value="">Pilih Kategori</option>
                            <option value="QUALITY" <?= "QUALITY" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>QUALITY</option>
                            <option value="COST" <?= "COST" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>COST</option>
                            <option value="DELIVERY" <?= "DELIVERY" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>DELIVERY</option>
                            <option value="SAFETY" <?= "SAFETY" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>SAFETY</option>
                            <option value="MORAL" <?= "MORAL" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>MORAL</option>
                            <option value="ACCURATION" <?= "ACCURATION" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>ACCURATION</option>
                            <option value="PRODUCTIVITY" <?= "PRODUCTIVITY" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>PRODUCTIVITY</option>
                            <option value="ENVIRONMENT" <?= "ENVIRONMENT" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>ENVIRONMENT</option>
                            <option value="OTHERS" <?= "OTHERS" == $data['fuguai']['kategori'] ? 'selected' : '' ?>>OTHERS</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Perbaikan</label>
                        <div><textarea class="form-control bg-sukses" name="korektif" onkeyup="this.value = this.value.toUpperCase()" cols="85%" rows="2" style="color:#FFF;background-color:#060;border-color:#F2F2F2" placeholder="Isi Korektif Aksi.."><?= $data['fuguai']['korektif'] ?></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-3 col-md-2">
                        <label class="form-label">PIC</label>
                        <select class="form-select" name="pic" type="text" style="border-color:#F2F2F2;" autocomplete="off">
                            <option value=""> Pilih PIC </option>
                            <?php
                            foreach ($data['pelapors'] as $pelapor) {
                            ?>
                                <option value="<?= $pelapor['nama'] ?>" <?= $pelapor['nama'] == $data['fuguai']['pic'] ? 'selected' : '' ?>><?= $pelapor['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mb-3     ">
                        <label class="form-label">Batas Tanggal Perbaikan</label>
                        <input name="do_date" class="form-control" type="date" style="border-color:#F2F2F2;" do_date" autocomplete="off" value="<?= $data['fuguai']['do_date'] ?>">
                    </div>

                    <div class="form-group col-md-5">
                        <label class="form-label">Tag</label>
                        <select name="tag" type="text" class="form-control" style="width:40%" autocomplete="off">
                            <option value="">Pilih TAG</option>
                            <option value="HIJAU" <?= "HIJAU" == $data['fuguai']['tag'] ? 'selected' : '' ?>>HIJAU</option>
                            <option value="KUNING" <?= "KUNING" == $data['fuguai']['tag'] ? 'selected' : '' ?>>KUNING</option>
                            <option value="MERAH" <?= "MERAH" == $data['fuguai']['tag'] ? 'selected' : '' ?>>MERAH</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Foto</label>
                        <input name="foto" type="file" class="form-control" autocomplete="off">
                    </div>

                    <div class="modal-footer">

                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>

                <!-- end content  -->

            </div>
        </main>
        <?php include "partials/footer.php" ?>
    </div>
    <?php include "partials/js.php" ?>
</body>

</html>