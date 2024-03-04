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
        <h1>Form Belanja Online</h1>
        <form action="proses.php" method="POST"> 
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                    <input id="text2" name="cus" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk </label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                        <label for="radio_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="radio_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jeniskelamin" id="radio_1" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="radio_1" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="text2" name="jumlah" type="text" class="form-control">
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
