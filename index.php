<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/caf2387f51.js" crossorigin="anonymous"></script>

</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-home"></i> Home</a>
        </div>
    </nav>

    <div class="container">
        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <strong>Update!</strong> Data Virus Corona di Indonesia
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fas fa-lungs-virus "></i> Positif</h4>
                        <p class="card-text text-center"><?= $data[0]['positif']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-warning p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fas fa-bed"></i> Dirawat</h4>
                        <p class="card-text text-center"><?= $data[0]['dirawat']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-success p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fas fa-smile"></i> Sembuh</h4>
                        <p class="card-text text-center"><?= $data[0]['sembuh']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-danger p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center"><i class="fas fa-frown-open "></i> Meninggal</h4>
                        <p class="card-text text-center"><?= $data[0]['meninggal']?></p>
                    </div>
                </div>
            </div>
            <div class="card" style="border:none;">
                <div class="card-body">
                    <h5 class="card-title">Cek Lokasi Vaksin Terdekat</h5>
                    <a href="https://www.google.com/search?q=lokasi+vaksin+covid-19+terdekat&sxsrf=AOaemvKkQt-nvifFok0eQ3nUravafLO4SQ%3A1634350619656&ei=GzZqYb6oJ4TGrQHX2KzgCA&oq=lokasi+vaksin+covid-19+terdekat&gs_lcp=Cgdnd3Mtd2l6EAMYADILCAAQgAQQsQMQgwEyBQgAEIAEMgUIABCABDIFCAAQgAQyCwguEIAEEMcBEK8BMggIABCABBDJAzIFCAAQgAQyCwguEIAEEMcBEK8BMgUIABCABDIFCAAQgAQ6DggAEIAEELEDEIMBELADOggIABCABBCwAzoOCC4QgAQQxwEQrwEQsANKBAhBGAFQ2IsCWNiLAmCEmQJoA3AAeACAAaIBiAGiAZIBAzAuMZgBAKABAcgBCsABAQ&sclient=gws-wiz" target="_blank" class="btn btn-primary">Go Vaksin</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

