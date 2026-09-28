<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Form</title>
</head>

<body>
  <h2>Hasil Inputan Data</h2>
  <h3>Selamat Datang, <?php echo $_POST['nama'] ?? ''; ?></h3>
  <h4>Hobi kamu adalah <?php echo $_POST['hobi'] ?? ''; ?> </h4>
</body>

</html>