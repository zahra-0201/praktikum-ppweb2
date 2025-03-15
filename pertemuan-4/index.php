<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <h2>Selamat Datang di Perpustakaan STT-NF</h2>
        <p>Silakan isi Buku Tamu di bawah ini</p>
        <hr>
        
        <form method="post" action="kunjungan.php">
        <div class="form-group row">
            <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="fullname" name="fullname" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="message" class="col-4 col-form-label">Keperluan</label> 
            <div class="col-8">
            <textarea id="message" name="message" cols="40" rows="5" class="form-control" required="required"></textarea>
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