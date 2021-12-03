<?php include 'header_admin.php' ?>
<div class="d-flex">
        <h1 class="m-5 col-11">Edit <span class="text-yellow">Data</span></h1>
        <div class="ms-5 col-11">
            <div class="d-flex col-10">
               <label for="name" class="col-3">Name </label>
               <input type="text" placeholder="Yourname" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="nameHelp"/>
            </div>
            <div class="d-flex col-10">
               <label for="place" class="col-3">Tempat Lahir</label>
               <input type="place" placeholder="Place of birth" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="placeHelp"/>
            </div>
            <div class="d-flex col-10">
               <label for="date" class="col-3">Tanggal Lahir</label>
               <input type="date" id="date" placeholder="Date of birth" class="px-3 mx-3 me-5 ms-5 form-control form-date">
            </div>
            <div class="d-flex col-10">
               <label for="select" class="col-3">Jenis Kelamin</label>
               <select id="select" class="px-3 mx-3 ms-5 me-5 form-control form-select">
                    <option value="">Gender...</option>
                    <option value="">Laki-laki</option>
                    <option value="">Perempuan</option>
                </select>
            </div>
            <div class="d-flex col-10">
               <label for="address" class="col-3">Alamat</label>
               <input type="address" placeholder="Your Address" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="addressHelp"/>
            </div>
            <div class="d-flex col-10">
               <label for="email" class="col-3">Email</label>
               <input type="email" placeholder="Email" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="emailHelp"/>
            </div>
            <div class="d-flex col-10">
               <label for="tel" class="col-3">No.HP</label>
               <input type="tel" id="tel" placeholder="Yournumberphone" class="px-3 mx-3 me-5 ms-5 form-control form-text" aria-describedby="telHelp"/>
            </div>
            <div class="mt-5 justify-content-md-end d-grid col-10">
               <button type="submit" class=" btn bg-yellowalt me-5" ><a class="text-dark" href="http://localhost/MA_BO/read_member.php">Simpan</a></button>
            </div>
        </div>
</div>
<?php include 'footer.php' ?>