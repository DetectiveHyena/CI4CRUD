<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4 ml-4 center">

            <h2 class="py-4 ml-4 center">
                <center>Data Warga Kampung ABC.</center>
            </h2>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Edit Data</th>
                        <th scope="col">Hapus Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($wargas as $tambah => $warga) : ?>
                        <tr>
                            <th scope="row"><?= $tambah + 1; ?></th>
                            <td><?= $warga['nama'] ?></td>
                            <td><?= $warga['alamat'] ?></td>
                            <td>Klik</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Update</button>
                            </td>
                            <td><button type="button" class="btn btn-outline-danger">Hapus</button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>