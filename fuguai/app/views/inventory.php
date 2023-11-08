<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>

<body>
    <?php include "partials/navbar.php" ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid p-4">

                <!-- content  -->

                <h1>Inventory RMPM</h1>

                <?php
                Flasher::Message();
                ?>

                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Edit</th>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Pelapor</th>
                                    <th>Temuan</th>
                                    <th>Jenis Temuan</th>
                                    <th>Area Temuan</th>
                                    <th>Urutan Proses</th>
                                    <th>Kategori</th>
                                    <th>Perbaikan</th>
                                    <th>PIC</th>
                                    <th>Batas Tanggal</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['fuguai'] as $row) : ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url; ?>/Inventory/edit/<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                        <td><?= $no ?></td>
                                        <td><?= $row['tgl'] ?></td>
                                        <td><?= $row['pelapor'] ?></td>
                                        <td><?= $row['fuguai'] ?></td>
                                        <td><?= $row['fuguai_11'] ?></td>
                                        <td><?= $row['area'] ?></td>
                                        <td><?= $row['no_proses'] ?></td>
                                        <td><?= $row['kategori'] ?></td>
                                        <td><?= $row['korektif'] ?></td>
                                        <td><?= $row['pic'] ?></td>
                                        <td><?= $row['do_date'] ?></td>
                                        <td><?= $row['tag'] ?></td>
                                        <td>
                                            <a href="<?= base_url; ?>/Inventory/updatestatus/<?= $row['id'] ?>" class="btn btn-sm btn-success"><?= $row['status'] ?></a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="submit" name="cetak" class="btn btn-primary btn-sm" onClick="window.print();"><i class=" fa fa-print"></i> Cetak</button>
                        </div>
                    </div>
                </div>

                <!-- end content  -->

            </div>
        </main>
        <?php include "partials/footer.php" ?>
    </div>
    <?php include "partials/js.php" ?>
</body>

</html>