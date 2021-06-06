<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container" style="margin-top: 100px;">

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h5>Edit Mahasiswa</h5>
                <hr>
                <div>
                    <div class="modal-body">
                        <form method="POST" action="/update/<?= $mahasiswa['id']; ?>">
                            <div class="form-group">
                                <label for="nim" class="col-form-label">NIM</label>
                                <input type="text" class="form-control" name="nim" id="nim" value="<?= $mahasiswa['nim'];?>">
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-form-label">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama_mahasiswa'];?>">
                            </div>

                            <label class="col-form-label" for="program-studi">Program Studi</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="program-studi" name="program-studi">
                                    <option selected>Pilih Prodi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Kimia">Teknik Kimia</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknologi Pangan">Teknologi Pangan</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                                <a href="/" class="btn btn-secondary">Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>