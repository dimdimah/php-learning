<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SISTEM AKADEMIK SEDERHANA</title>
</head>

<body>
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="?page=homepage">Navbar</a>
            <a href="?page=form-data-mahasiswa" class="text-white load-content navbar-brand">Data Mahasiswa</a>
            <a href="?page=form-data-akademik" class="load-content text-white navbar-brand">Data Akademik</a>
        </div>
    </nav>
    <div id="main-content" class="mx-auto p-4">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'form-data-mahasiswa') {
                include 'formDataMhs.php';
            } elseif ($page == 'form-data-akademik') {
                include 'formAkademik.php';
            } elseif ($page == 'homepage') {
                echo '<h1>Welcome to Sistem Akademik Sederhana</h1>';
                echo '<p>segera isi data diri anda!!</p>';
            } else {
                echo '<h1>Page Not Found</h1>';
                echo '<p>The page you are looking for does not exist.</p>';
            }
        } else {
            echo '<h1>Welcome to Sistem Akademik Sederhana</h1>';
            echo '<p>segera isi data diri anda!!</p>';
        }
        ?>
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-body mx-2" href="#">Dimah Luthfi</a>
            <a class="text-body mx-2" href="#">Hadyan Saputra</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>