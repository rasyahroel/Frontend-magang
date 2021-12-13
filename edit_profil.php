<?php include 'header.php' ?>
    <div class="container-fluid">
        <h1 class="m-5">Edit <span class="text-yellow">Profile</span></h1>
        <div class="ms-5">
            <div class="d-flex col-12">
               <label for="name" class="col-3">Name </label>
               <input type="text" placeholder="Yourname" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="nameHelp"/>
            </div>
            <div class="d-flex col-12">
               <label for="place" class="col-3">Tempat Lahir</label>
               <input type="place" placeholder="Place of birth" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="placeHelp"/>
            </div>
            <div class="d-flex col-12">
               <label for="date" class="col-3">Tanggal Lahir</label>
               <input type="date" id="date" placeholder="Date of birth" class="px-3 mx-3 me-5 ms-5 form-control form-date">
            </div>
            <div class="d-flex col-12">
               <label for="select" class="col-3">Jenis Kelamin</label>
               <select id="select" class="px-3 mx-3 ms-5 me-5 form-control form-select">
                    <option value="">Gender...</option>
                    <option value="">Laki-laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div>
            <div class="d-flex col-12">
               <label for="address" class="col-3">Alamat</label>
               <input type="address" placeholder="Your Address" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="addressHelp"/>
            </div>
            <div class="d-flex col-12">
               <label for="email" class="col-3">Email</label>
               <input type="email" placeholder="Email" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="emailHelp"/>
            </div>
            <div class="d-flex col-12">
               <label for="tel" class="col-3">No.HP</label>
               <input type="tel" id="tel" placeholder="Yournumberphone" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="telHelp"/>
            </div>
            <div class="pt-5 my-5 me-5 d-grid justify-content-md-end">
                <a href="http://localhost/MA_BO/profil.php"><button class="btn btn-link bg-yellowalt text-dark" ><strong>Save</strong></button></a>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>