<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperature Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <div class="row  py-5">
            <div class="col-md-6">
                <h3>Celcius to Fahrenheit</h3>
                <form action="" method="POST" class="my-3">
                    <label for="">Temperature</label>
                    <input type="text" name="temp" class="form-control mb-3">
                    <input type="submit" name="fah" value="Convert to Fahrenheit" class="btn btn-success">
                </form>
                <?php 
                   if(isset($_POST['fah'])){
                    $temp = $_POST['temp'];
                    $convert = ($temp * 9/5) +32;
                    echo "$temp<sup>*</sup> Celcius is equal to $convert<sup>*</sup> Fahrenheight";
                   }
                ?>
            </div>
            <div class="col-md-6">
                <h3>Fahrenheit to Celcius</h3>
                <form action="" method="POST">
                    <label for="">Temperature</label>
                    <input type="text" name="temp" class="form-control mb-3">
                    <input type="submit" name="cel" value="Convert to Celcius" class="btn btn-warning">
                </form>
                <?php 
                 if(isset($_POST['cel'])){
                    $temp = $_POST['temp'];
                    $convert = ($temp - 32) * 5 /9;
                    echo "$temp<sup>*</sup> Fahrenheight  is equal to $convert<sup>*</sup> Celcius";
                   }
                ?>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>