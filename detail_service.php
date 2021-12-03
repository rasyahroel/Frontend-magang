<?php include 'header.php' ?>
<div class="container-fluid d-flex">
    <?php include 'sidebar.php' ?>
    <div class="col-7 ms-5">
        <div>
            <h1 class="my-5">Judul <span class="text-yellow">Service</span></h1>
            <div>
                <div class="d-flex">
                    <p class="col-2">Judul</p><p>: Judul service</p>
                </div>
                <div class="d-flex">
                    <p class="col-2">Progres</p><p>: Progres service(progres/complete)</p>
                </div>
                <div class="d-flex">
                    <p class="col-2">Price</p><p>: Harga service</p>
                </div>
                <div class="d-flex">
                    <p class="col-2">Tanggal mulai</p><p>: Tanggal dimulai service(ex: 01 januari 2020)</p>
                </div>
                <div class="d-flex">
                    <p class="col-2">Tanggal selesai</p><p>: Tanggal selesai service jika sudah complete (ex: 10 januari 2020) jika masih progres beri tanda (-)</p>
                </div>
                <div class="mt-1 d-flex">
                    <h5 class="col-2">Deskripsi</h5><h5>:</h5>
                </div>
                <div class="pb-5 mb-5">
                    <p>Berisi semua deskripsi service yang di lakukan secara detal dan menyeluruh</p>
                </div>
            </div>
            <div class="pt-5 my-5 d-grid justify-content-md-end">
                <a href="http://localhost/MA_BO/list_service.php"><button class="btn btn-link bg-yellowalt text-dark" ><strong>Back</strong></button></a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>