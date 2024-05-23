<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data</title>
</head>
<body>
  <h1>Form Input Data</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="pesan">Pesan:</label>
    <textarea id="pesan" name="pesan" required></textarea><br><br>

    <input type="submit" value="Kirim">
  </form>

<?php
class DataMahasiswa295
{
  protected $nama;
  protected $email;
  protected $pesan;

  public function __construct($nama, $email, $pesan)
  {
    $this->nama = $nama;
    $this->email = $email;
    $this->pesan = $pesan;
  }

  public function getNama295()
  {
    return $this->nama;
  }

  public function getEmail295()
  {
    return $this->email;
  }

  public function getPesan295()
  {
    return $this->pesan;
  }
}

$data = []; // array kosong untuk menyimpan data

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $dataInput = new DataMahasiswa295($nama, $email, $pesan);

  // menyimpan data input ke dalam array kosong
  $data[] = $dataInput;

  // menampilkan data yang disimpan pada array
  echo "Data yang Disimpan:<br>";
  foreach ($data as $inputData) {
    echo "Nama: " . $inputData->getNama295() . "<br>";
    echo "Email: " . $inputData->getEmail295() . "<br>";
    echo "Pesan: " . $inputData->getPesan295() . "<br><br>";
  }
}

?>
</body>
</html>