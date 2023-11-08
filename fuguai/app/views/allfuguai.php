<!DOCTYPE html>
<html lang="en">
<?php include "partials/header.php" ?>

<body>
    <?php include "partials/navbar.php" ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid p-4">

                <!-- content  -->

                <h1>All Temuan Closed</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Pelapor</th>
                                    <th>Fuguai</th>
                                    <th>Jenis</th>
                                    <th>Area</th>
                                    <th>No Proses</th>
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
                                        <td><?= $row['status'] ?></td>
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