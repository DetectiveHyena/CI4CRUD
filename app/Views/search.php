<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4 ml-4 center">

            <h2 class="py-4 ml-4 center">
                <center>Data Warga Kampung ABC.</center>
            </h2>

            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-4">
                    <a href="<?= site_url('crudprint/createform') ?>"><button type="button" class="btn btn-primary btn-lg">Tambah Data Warga</button></a>
                </div>
            </div><br>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <form action="/crudprint/caridata" method="post">
                        <div class="input-group mb-3 ">
                            <input type="text" class="form-control" name="cari" id="cari" autocomplete="off" autofocus placeholder="Isi NAMA/ALAMAT disini...">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" name="submit">Cari Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Edit Data</th>
                        <th scope="col">Hapus Data</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (empty($hasilcari)) : ?>
                        <tr>
                            <td colspan="7">
                                <div class="alert alert-warning">
                                    <strong> DATA TIDAK ADA!!!.</strong> Coba cari yang lain.
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php $start = 0;
                    foreach ($hasilcari as $hasil) : ?>
                        <tr>
                            <th scope="row"> <?= ++$start; ?></th>
                            <td>

                                <?= '<strong>' . $hasil['nama'] . "</strong>" ?>
                            </td>
                            <td>
                                <?= '<strong>' . $hasil['alamat'] . '</strong>' ?>
                            </td>
                            <td><a href="<?= base_url('crudprint/datadetail/' . $hasil['id']); ?>">Go to</a></td>
                            <td>
                                <a href="<?= base_url('crudprint/edit/' . $hasil['id']); ?>" type="button" class="btn btn-outline-warning">Update</a>
                            </td>
                            <td><a href="<?= base_url('crudprint/deletedata/' . $hasil['id']); ?>" type="button" class="btn btn-outline-danger" onclick="return confirm('Yakin mau Dihapus ?');">Hapus</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</div>