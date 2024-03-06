x`	<?php 
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jeniskelamin = isset($_POST['jeniskelamin']) ? $_POST['jeniskelamin'] : '';
$prodi = isset($_POST['prodi']) ? $_POST['prodi'] : '';
$skill = isset($_POST['skill']) ? implode(', ', $_POST['skill']) : ''; 
$domisili = isset($_POST['domisili']) ? $_POST['domisili'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi - Terima Kasih</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h1>Terimakasih telah mendaftarkan di IT Club</h1>
        <h5>NIM : <?php echo htmlspecialchars($nim) ?></h5>
        <h5>Nama Lengkap : <?php echo htmlspecialchars($nama) ?></h5>
        <h5>Jenis Kelamin : <?php echo htmlspecialchars($jeniskelamin) ?></h5>
        <h5>Program Studi : <?php echo htmlspecialchars($prodi) ?></h5>
        <h5>Skill Web dan Programming : <?php echo htmlspecialchars($skill) ?></h5>
        <h5>Tempat Domisili : <?php echo htmlspecialchars($domisili) ?></h5>
        <h5>Email : <?php echo htmlspecialchars($email) ?></h5>
    </div>
</body>
</html>