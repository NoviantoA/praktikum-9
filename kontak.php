<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Formulir Peserta Didik</title>
    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- font awensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jquey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <style>
    /* import google font */
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,700;0,800;1,300;1,500;1,600&display=swap');

    .row .judul {
        text-align: center;
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 2rem;
        background: #28bfed;
        color: #fff;
        font-weight: 600;
    }

    .form-group .inputan {
        margin: auto;
    }

    .radio {
        margin-left: -2.6rem;
    }

    button {
        margin-left: 12rem;
    }
    </style>

    <div class="container">
        <div class="col-md-6" style="margin:auto;">
            <div class="row">
                <form method="POST" action="simpan_contact.php">
                    <div class="panel-heading judul">
                        Contact Form
                    </div>
                    <div class="panel-body">
                        <br>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label" style="font-size: 16px;">Nama</label>
                            <div class="col-sm-8 inputan">
                                <input type="text" class="form-control" id="nis" name="nama"
                                    placeholder="masukan nama anda">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="jenisKelamin" class="col-sm-4 col-form-label" style="font-size: 16px;">Jenis
                                Kelamin</label>
                            <div class="col-sm-8 radio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jkel" id="inlineRadio1"
                                        value="Ya">
                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jkel" id="inlineRadio2"
                                        value="Tidak">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                                <label for="staticEmail" class="col-sm-2 col-form-label"> &nbsp;</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label" style="font-size: 16px;">Email</label>
                            <div class="col-sm-8 inputan">
                                <input type="text" class="form-control" id="nis" name="email" placeholder="email">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label" style="font-size: 16px;">Alamat</label>
                            <div class="col-sm-8 inputan">
                                <input type="text" class="form-control" id="nis" name="alamat"
                                    placeholder="masukan alamat anda">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label" style="font-size: 16px;">Kota</label>
                            <div class="col-sm-8 inputan">
                                <input type="text" class="form-control" id="nis" name="kota"
                                    placeholder="masukan asal kota anda">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="pesan" class="col-sm-2 col-form-label" style="font-size: 16px;">Pesan</label>
                            <div class="col-sm-8 inputan">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    name="pesan"></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary col-md-4 kirim">Submit
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>