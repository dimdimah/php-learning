<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center">Form Data Mahasiswa</h2>
        <form action="<?php echo '?page=form-data-mahasiswa' ?>" method="post" class="mx-auto mt-4" style="max-width: 500px;">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama295" name="nama295" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nim295" class="form-label">NIM:</label>
                <input type="text" id="nim295" name="nim295" class="form-control" required></i>
            </div>
            <div class="mb-3">
                <label for="email295" class="form-label">Email:</label>
                <input type="email" id="email295" name="email295" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gender295" class="form-label">Jenis Kelamin:</label>
                <input type="text" id="gender295" name="gender295" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat295" class="form-label">Asal Kota:</label>
                <input type="text" id="alamat295" name="alamat295" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            class DataMahasiswa295
            {
                protected $nama;
                protected $email;
                protected $nim;

                public function __construct($nama, $email, $nim)
                {
                    $this->nama = $nama;
                    $this->email = $email;
                    $this->nim = $nim;
                }

                public function getNama295()
                {
                    return $this->nama;
                }

                public function getEmail295()
                {
                    return $this->email;
                }

                public function getNim295()
                {
                    return $this->nim;
                }
            }

            class DetailMahasiswa295 extends DataMahasiswa295
            {
                protected $gender;
                protected $alamat;

                public function __construct($nama, $email, $nim, $gender, $alamat)
                {
                    parent::__construct($nama, $email, $nim);
                    $this->gender = $gender;
                    $this->alamat = $alamat;
                }

                public function geGender295()
                {
                    return $this->gender;
                }

                public function getAlamat295()
                {
                    return $this->alamat;
                }
            }

            // Get the form data
            $nama = isset($_POST['nama295']) ? trim($_POST['nama295']) : '';
            $email = isset($_POST['email295']) ? trim($_POST['email295']) : '';
            $nim = isset($_POST['nim295']) ? trim($_POST['nim295']) : '';
            $gender = isset($_POST['gender295']) ? trim($_POST['gender295']) : '';
            $alamat = isset($_POST['alamat295']) ? trim($_POST['alamat295']) : '';

            // Create a new DetailMahasiswa295 object
            $detailMahasiswa = new DetailMahasiswa295($nama, $email, $nim, $gender,$alamat);
        ?>
        <div class="mt-5">
            <h3 class="text-center">Data Mahasiswa</h3>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>NIM</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($detailMahasiswa->getNama295()); ?></td>
                        <td><?php echo htmlspecialchars($detailMahasiswa->getEmail295()); ?></td>
                        <td><?php echo htmlspecialchars($detailMahasiswa->getNim295()); ?></td>
                        <td><?php echo htmlspecialchars($detailMahasiswa->geGender295()); ?></td>
                        <td><?php echo htmlspecialchars($detailMahasiswa->getAlamat295()); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
        }
        ?>
    </div>

</body>
</html>