<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
      .row{
        margin-left: 250px;
      }
    </style>
    <title></title>
  </head>
  <body>
    <h1 align="center">Penilaian Siswa</h1>
    <form action="latihan7b.php" method="POST" class="row gx-3 gy-2 align-items-center">
      <div class="col-sm-3">
        <label class="visually-hidden" for="inputUTS">Nilai UTS</label>
        <input min="0" max="100" required type="number" name="uts" class="form-control" id="inputUTS" placeholder="Nilai UTS">
      </div>

      <div class="col-sm-3">
        <label class="visually-hidden" for="inputUAS">Nilai UAS</label>
        <input min="0" max="100" required type="number" name="uas" class="form-control" id="inputUAS" placeholder="Nilai UAS">
      </div>

      <div class="col-sm-3">
        <label class="visually-hidden" for="inputTugas">Nilai Tugas</label>
        <input min="0" max="100" required type="number" name="tugas" class="form-control" id="inputTugas" placeholder="Nilai Tugas">
      </div>
      
      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Nilai Total</button>
      </div>
    </form>










































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>