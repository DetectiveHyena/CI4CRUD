<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4 ml-4 center">

            <?php if (session()->get('success')): ?>
                  <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                  </div>
           <?php endif; ?>

            <h2 class="py-4 ml-4 center">
                <center>Tambah Data Warga Kampung ABC.</center>
            </h2>
            <form action="/crudprint/create" method="POST" enctype="multipart/form-data">
            
                      <?php if (isset($validation)): ?>
                        <div class="col-12">
                          <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors() ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      
                <div class="form-group">
                    <label for="examplenama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="" aria-describedby="namaHelp">
                    <small id="namaHelp" class="form-text text-muted">Tulis Nama Anda.</small>
                </div>
                <div class="form-group">
                    <label for="examplealamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Alamat Anda Sekarang.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputnotelp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="notelp" id="notelp" value="" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Tulis Nomor Telepon.</small>
                </div>
                <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>
