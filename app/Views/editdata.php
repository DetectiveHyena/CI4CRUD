<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4 ml-4 center">

            <h2 class="py-4 ml-4 center">
                <center>Update Data Warga yang Bernama <strong> <?= $editwarga['nama']; ?>.</strong></center>
            </h2>

            <?php if (isset($validation)) : ?>
                <div class="alert alert-warning alert-dismissible fade show">
                    <strong> <?= $validation->listErrors(); ?> </strong>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php endif; ?>

            <form action="/crudprint/updates/<?= $editwarga['id']; ?>" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="examplenama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $editwarga['nama']; ?>" aria-describedby="namaHelp">
                    <small id="namaHelp" class="form-text text-muted">Tulis Nama Anda.</small>
                </div>


                <div class="form-group">
                    <label for="examplealamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $editwarga['alamat']; ?>" aria-describedby="emailHelp" autofocus required>
                    <small id="emailHelp" class="form-text text-muted">Alamat Anda Sekarang.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputnotelp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="notelp" id="notelp" value="<?= $editwarga['notelp']; ?>" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">Tulis Nomor Telepon.</small>
                </div>

                <center>
                    <div class="card" style="width: 92px;">
                        <img src="<?= base_url('assets/images/' . $editwarga['gambar']); ?>" class="card-img-top pb-1" alt="<?= $editwarga['nama']; ?>">
                    </div>
                </center>


                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile02" value="<?= $editwarga['gambar']; ?>" required>
                        <label class="custom-file-label" for="inputGroupFile02">Choose File</label>
                    </div>

                    <script>
                        $('#inputGroupFile02').on('change', function() {
                            //get the file name
                            var fileName = $(this).val().replace('C:\\fakepath\\', " ");
                            //replace the "Choose a file" label
                            $(this).next('.custom-file-label').html(fileName);
                        })
                    </script>

                </div>

                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                <a href="<?= base_url('/'); ?>" class="btn btn-danger">Return Back.</a>
            </form>
        </div>
    </div>
</div>