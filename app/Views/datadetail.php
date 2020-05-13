<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-12 py-4 ml-4 center">

            <h2 class="py-4 ml-4 center">
                <center>Info Lengkap Warga yang Bernama <strong> <?= $detailwarga['nama']; ?>.</strong></center>
            </h2>
            <Center>
                <div class="card" style="width: 300px;">
                    <img src="<?= base_url('assets/images/' . $detailwarga['gambar']); ?>" class="card-img-top pb-1" alt="<?= $detailwarga['nama']; ?>">
                    <div class="card-body text-center card text-white bg-success mb-4">
                        <h3 class="card-title"><?= $detailwarga['nama']; ?></h3>

                        <p class="card-text" style="padding-left: -90px !important; ">Alamat Rumah <strong><?= $detailwarga['alamat']; ?></strong> </p>

                        <p class="card-text" style="padding-left: -100px !important;">Handphone <strong><?= $detailwarga['notelp']; ?></strong></p>

                        <a href="<?= base_url('crudprint/edit/' . $detailwarga['id']); ?>" class="btn btn-primary mb-2">Update</a>

                        <a href="<?= base_url('/'); ?>" class="btn btn-danger">Return Back.</a>
                    </div>
                </div>
            </Center>
        </div>
    </div>
</div>