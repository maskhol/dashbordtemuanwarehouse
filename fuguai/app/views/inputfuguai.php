<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>

<body>
    <?php include "partials/navbar.php" ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid p-4">

                <!-- content  -->
                <h1>INPUT TEMUAN WAREHOUSE</h1>

                <?php
                Flasher::Message();
                ?>

                <form action="<?= base_url . '/Inputfuguai/simpanFuguai' ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 col-md-1">
                        <label class="form-label" for="tgl">Tanggal</label>
                        <input class="form-control" name="tgl" type="date" id="tgl" autocomplete="off">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label">Pelapor</label>
                        <select class="form-select" name="pelapor" type="text" autocomplete="off">
                            <option value=""> Pilih Nama </option>
                            <?php
                            foreach ($data['pelapors'] as $pelapor) {
                            ?>
                                <option value="<?= $pelapor['nama'] ?>"><?= $pelapor['nama'] ?></option>
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
                                    <option value="<?= $jenis_fuguai['jenis_fuguai'] ?>"><?= $jenis_fuguai['jenis_fuguai'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Temuan</label>
                        <textarea class="form-control bg-danger" name="fuguai" onkeyup="this.value = this.value.toUpperCase()" rows="2" s placeholder="Isi Detail Temuan.."></textarea>
                    </div>


                    <div class="mb-3 col-md-4">
                        <label class="form-label">Area</label>
                        <select class="form-select" name="area">
                            <option value=""> Pilih Area </option>
                            <option value="INBOUND RM">INBOUND RM</option>
                            <option value="INBOUND PM">INBOUND PM</option>
                            <option value="INVENTORY RMPM">INVENTORY RMPM</option>
                            <option value="OUTBOUND RMPM">OUTBOUND RMPM</option>

                        </select>
                        <label class="form-label">No Proses</label>
                        <select class="form-select" name="no_proses">
                            <option value=""> Pilih No Proses Di Makigami </option>
                            <?php
                            foreach ($data['makigamis'] as $makigami) {
                            ?>
                                <option value="(<?= $makigami['no_proses'] ?>)<?= $makigami['detail'] ?>">(<?= $makigami['no_proses'] ?>)<?= $makigami['detail'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label">Kategori</label>
                        <select class="select-label" name="kategori" type="text" onkeyup="this.value = this.value.toUpperCase()" placeholder="Pilih Kategori...">
                            <option value="">Pilih Kategori</option>
                            <option value="QUALITY">QUALITY</option>
                            <option value="COST">COST</option>
                            <option value="DELIVERY">DELIVERY</option>
                            <option value="SAFETY">SAFETY</option>
                            <option value="MORAL">MORAL</option>
                            <option value="ACCURATION">ACCURATION</option>
                            <option value="PRODUCTIVITY">PRODUCTIVITY</option>
                            <option value="ENVIRONMENT">ENVIRONMENT</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Perbaikan</label>
                        <div><textarea class="form-control bg-sukses" name="korektif" onkeyup="this.value = this.value.toUpperCase()" cols="85%" rows="2" style="color:#FFF;background-color:#060;border-color:#F2F2F2" placeholder="Isi Korektif Aksi.."></textarea>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="form-label">PIC</label>
                        <select class="" name="pic" type="text" style="border-color:#F2F2F2;width:33%" autocomplete="off">
                            <option value=""> Pilih PIC </option>
                            <?php
                            foreach ($data['pelapors'] as $pelapor) {
                            ?>
                                <option value="<?= $pelapor['nama'] ?>"><?= $pelapor['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <label class="form-label">Batas tanggal</label>
                        <input name="do_date" type="date" style="border-color:#F2F2F2;width:50%" id="do_date" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Tag</label>
                        <select name="tag" type="text" class="form-control" style="width:40%" autocomplete="off">
                            <option value="">Pilih TAG HIJAU (AMAN) KUNING (SEDANG) MERAH(BAHAYA)</option>
                            <option value="HIJAU">HIJAU</option>
                            <option value="KUNING">KUNING</option>
                            <option value="MERAH">MERAH</option>
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