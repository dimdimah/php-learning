<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Form Akademik Mahasiswa</h1>
    <form action="<?php echo '?page=form-data-akademik' ?>" method="post" class="mx-auto mt-4" style="max-width: 500px;">
      <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi </label>
        <input type="text" class="form-control" id="prodi" name="prodi296" required>
      </div>

      <div class="mb-3">
        <label for="dospem" class="form-label">Dosen Pembimbing </label>
        <input type="text" class="form-control" id="dospem" name="dospem296" required>
      </div>

      <div class="mb-3">
        <label for="kelas" class="form-label">Kurikulum Kelas </label>
        <select class="form-control" id="kelas" name="kelas296" required>
          <option value="Reguler">Reguler</option>
          <option value="Non-Reguler">Non-Reguler</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="angkatan" class="form-label">Angkatan </label>
        <input type="text" class="form-control" id="angkatan" name="angkatan296" required>
      </div>
      
      <div class="mb-3">
        <label for="semester" class="form-label">Semester </label>
        <input type="text" class="form-control" id="semester" name="semester296" required>
      </div>
      
      <div class="mb-3">
        <label for="jumlah_mk" class="form-label">Jumlah Mata Kuliah yang Diambil </label>
        <input type="text" class="form-control" id="jumlah_mk" name="jumlah_mk296" required>
      </div>
      
      <div class="mb-3">
        <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK) </label>
        <input type="text" class="form-control" id="ipk" name="ipk296" required>
      </div>
      
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

    <?php
    class akademikMahasiswa296
    {
      protected $prodi;
      protected $angkatan;
      protected $semester;
      protected $jumlah_mk;
      protected $ipk;

      public function __construct($prodi, $angkatan, $semester, $jumlah_mk, $ipk)
      {
        $this->prodi = $prodi;
        $this->angkatan = $angkatan;
        $this->semester = $semester;
        $this->jumlah_mk = $jumlah_mk;
        $this->ipk = $ipk;
      }

      public function getProdi296()
      {
        return $this->prodi;
      }

      public function getAngkatan296()
      {
        return $this->angkatan;
      }

      public function getSemester296()
      {
        return $this->semester;
      }

      public function getJumlahMk296()
      {
        return $this->jumlah_mk;
      }

      public function getIpk296()
      {
        return $this->ipk;
      }
    }

    class detailAkademik296 extends akademikMahasiswa296
    {
      protected $kelas;
      protected $dospem;

      public function __construct($prodi, $angkatan, $semester, $jumlah_mk, $ipk, $kelas, $dospem)
      {
        parent::__construct($prodi, $angkatan, $semester, $jumlah_mk, $ipk);
        $this->kelas = $kelas;
        $this->dospem = $dospem;
      }

      public function getKelas296()
      {
        return $this->kelas;
      }

      public function getDospem296()
      {
        return $this->dospem;
      }

    }

    $data = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $prodi = $_POST['prodi296'];
      $angkatan = $_POST['angkatan296'];
      $semester = $_POST['semester296'];
      $jumlah_mk = $_POST['jumlah_mk296'];
      $ipk = $_POST['ipk296'];
      $kelas = $_POST['kelas296'];
      $dospem = $_POST['dospem296'];

      $dataInput = new detailAkademik296($prodi, $angkatan, $semester, $jumlah_mk, $ipk, $kelas, $dospem);

      $data[] = $dataInput;

      echo "<h2 class='mt-5 text-center'>Data Akademik</h2>";
      echo "<table class='table table-striped mt-3'>";
      echo "<thead class='thead-dark text-center'>";
      echo "<tr><th>Program Studi</th><th>Dospem</th><th>Kelas</th><th>Angkatan</th><th>Semester</th><th>Jumlah Mata Kuliah</th><th>IPK</th></tr>";
      echo "</thead><tbody>";
      foreach ($data as $inputData) {
        echo "<tr>";
        echo "<td class='text-center'>" . $inputData->getProdi296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getDospem296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getKelas296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getAngkatan296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getSemester296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getJumlahMk296() . "</td>";
        echo "<td class='text-center'>" . $inputData->getIpk296() . "</td>";
        echo "</tr>";
      }
      echo "</tbody></table>";
    }
    ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
