<?php include 'header.php' ?>
<div class="p-5 container-fluid">
        <div class="row">
            <h1 class="col-md-11 col-sm-12">Judul <span class="text-yellow">Service</span></h1>
            <div class="dropdown col-md-1 col-sm-12">
                <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="http://localhost/MA_BO/edit_service.php">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                    <li><a class="dropdown-item" href="http://localhost/MA_BO/list_service.php">Back</a></li>
                </ul>
            </div>
        </div>
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
                <div class="mt-1 ps-4">
                    <p>Berisi semua deskripsi service yang di lakukan secara detal dan menyeluruh</p>
                </div>
            </div>
</div>
<?php include 'footer.php' ?>