<div class="container ">
  <div class="row justify-content-center">
    <div class="col-md-12 py-4 ml-4 center">

      <h2 class="py-4 ml-4 center">
        <center>Formulir Tambah Data Warga Kampung ABC.</center>
      </h2>
      <form action="/crudprint/create" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="examplenama">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" value="" aria-describedby="namaHelp">
          <small id="namaHelp" class="form-text text-muted">Tulis Nama Anda.</small>
        </div>
        <?php if (isset($validation)) : ?>
          <div class="p-3 mb-2 bg-danger text-white" role="alert">
            <?= $validation->getError('nama'); ?>
          </div>
        <?php endif; ?>

        <div class="form-group">
          <label for="examplealamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat" value="" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Alamat Anda Sekarang.</small>
        </div>
        <?php if (isset($validation)) : ?>
          <div class="p-3 mb-2 bg-danger text-white" role="alert">
            <?= $validation->getError('alamat'); ?>
          </div>
        <?php endif; ?>

        <div class="form-group">
          <label for="exampleInputnotelp">Nomor Telepon</label>
          <input type="text" class="form-control" name="notelp" id="notelp" value="" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Tulis Nomor Telepon.</small>
        </div>
        <?php if (isset($validation)) : ?>
          <div class="p-3 mb-2 bg-danger text-white" role="alert">
            <?= $validation->getError('notelp'); ?>
          </div>
        <?php endif; ?>

        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
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

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
</div>