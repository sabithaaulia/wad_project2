<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Sabitha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <h1><center>Temperatur<center></h1>
    <div class="card">
  <div class="card-body">
  <form action = "latihan3.php" method = "get">
  <div class="mb-3">
    <label class="form-label">Input Suhu: </label>
    <input type = "number" name = "input_suhu" class="form-control" >
    <div id="emailHelp" class="form-text">Inputkan suhu yang Anda inginkan</div>
  </div>
  <div class="form-group">
                <label for="operasi">Pilihan:</label>
                <select class="form-control" required>
                    <option>Celcius</option>
                    <option>Fahrenheit</option>
                    <option>Reamur</option>
                    <option>Kelvin</option>
                </select>
            </div>
  <button type="submit" class="btn btn-primary">Hitung</button>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e7008a" fill-opacity="1" d="M0,32L48,69.3C96,107,192,181,288,181.3C384,181,480,107,576,101.3C672,96,768,160,864,192C960,224,1056,224,1152,197.3C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</form>
  </div>
</div>
</body>
</html>