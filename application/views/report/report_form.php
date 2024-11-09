<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Form</title>
    <!-- CSS Frameworks seperti Bootstrap bisa digunakan jika perlu -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Laporan Kustomer</h1>

    <!-- Tombol Cetak Laporan -->
    <form action="<?php echo site_url('report1/kustomerlap'); ?>" method="POST">
        <button type="submit" class="btn btn-primary">Cetak Laporan</button>
    </form>
</div>

</body>
</html>
