<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #51829B; 
        }
        
        .container {
            margin-top: 50px; 
        }
        
        form {
            background-color: #ffff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="proses.php" method="POST"> 
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="text1" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                    <input id="text2" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_0" type="radio" class="custom-control-input" value="LAKI-LAKI"> 
                        <label for="radio_0" class="custom-control-label">LAKI-LAKI</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_1" type="radio" class="custom-control-input" value="PEREMPUAN"> 
                        <label for="radio_1" class="custom-control-label">PEREMPUAN</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                    <select id="select" name="prodi" class="custom-select">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Programming</label> 
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="HTML"> 
                        <label for="checkbox_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="CSS"> 
                        <label for="checkbox_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="Javascript"> 
                        <label for="checkbox_2" class="custom-control-label">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="RWD Bootsrap"> 
                        <label for="checkbox_3" class="custom-control-label">RWD Bootsrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="PHP"> 
                        <label for="checkbox_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_5" type="checkbox" class="custom-control-input" value="Phyton"> 
                        <label for="checkbox_5" class="custom-control-label">Phyton</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="checkbox_6" type="checkbox" class="custom-control-input" value="Java"> 
                        <label for="checkbox_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                    <select id="select1" name="domisili" class="custom-select">
                        <option value="Bandung">Bandung</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text3" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                    <input id="text3" name="email" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>