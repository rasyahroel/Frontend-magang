<?php include 'Header_admin.php' ?>
  <div class="container-fluid">
  <div class="m-5 row">
      <div class="p-0 m-0 mt-1 col-md-9 col-sm-12 d-flex">
        <h2 class="p-0 m-0 col-md-3 col-sm-12">Data <span class="text-yellow">Member</span></h2>
        <a class="p-0 ms-5 col-md-9 col-sm-12" href="http://localhost/MA_BO/create_member.php"><button class="text-light btn bg-dark" type="submit">Add new</button></a>
      </div>
      <form class="p-0 m-0 mt-1 d-flex justify-content-end col-md-3 col-sm-12">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="text-light btn bg-dark" type="submit">Search</button>
      </form>
    </div>
    <div class="m-5">
      <table class="table table-striped">
        <thead class="text-dark bg-yellowalt">
          <tr>
            <th scope="col">Id_admin</th>
            <th scope="col">Nama</th>
            <th scope="col">TTL</th>
            <th scope="col">Jekel</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">No.HP</th>
            <th scope="col">Level</th>
            <th scope="col">Service</th>
            <th scope="col">Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Jogja, 01 Januari 2000</td>
            <td>Laki-laki</td>
            <td>Jogja</td>
            <td>mark@gmail.com</td>
            <td>081209009000</td>
            <td>Admin</td>
            <td><a class="text-dark" href="http://localhost/MA_BO/Read_Service.php">Klik here</a></td>
            <td class="d-flex">
              <a class="mx-2 text-dark" href="http://localhost/MA_BO/edit_member.php">Edit</a>
              <a class="mx-2 text-dark" href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td>Jogja, 01 Januari 2000</td>
            <td>Laki-laki</td>
            <td>Jogja</td>
            <td>mark@gmail.com</td>
            <td>081209009000</td>
            <td>Member</td>
            <td><a class="text-dark" href="http://localhost/MA_BO/Read_Service.php">Klik here</a></td>
            <td class="d-flex">
              <a class="m-2 text-dark" href="http://localhost/MA_BO/edit_member.php">Edit</a>
              <a class="m-2 text-dark" href="#">Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Mark</td>
            <td>Jogja, 01 Januari 2000</td>
            <td>Laki-laki</td>
            <td>Jogja</td>
            <td>mark@gmail.com</td>
            <td>081209009000</td>
            <td>Member</td>
            <td><a class="text-dark" href="http://localhost/MA_BO/Read_Service.php">Klik here</a></td>
            <td class="d-flex">
              <a class="m-2 text-dark" href="http://localhost/MA_BO/edit_member.php">Edit</a>
              <a class="m-2 text-dark" href="#">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>