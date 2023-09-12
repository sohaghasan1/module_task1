
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container">
        <div class="row text-center py-5">
            <div class="col-md-6 m-auto">
                <h3>Weather Update</h3>
                <form action="" method="POST" class="my-3">
                    <label for="">Temperature</label>
                    <input type="text" name="num" class="form-control mb-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                </form>
                <?php 
                   if(isset($_POST['submit'])){
                    $num = $_POST['num'];
                    
                    if($num >= 25){?>
                        <div class="my-3 text-center">
                            <img src="img/91062192606fcb310487ce08953bb6dc.png" width="100px" alt="">
                            <h3>It's Hot</h3>
                        </div>
                  <?php  }else if($num <= 24 AND $num >= 18){ ?>
                    <div class="my-3 text-center">
                            <img src="img/i.webp" width="100px" alt="">
                            <h3>It's Warm</h3>
                        </div>
                <?php    }else if($num <= 17){ ?>
                  
                    <div class="my-3 text-center">
                            <img src="img/4826070.webp" width="100px" alt="">
                            <h3>It's Cool</h3>
                        </div>
                  <?php  }
                    
                   }
                ?>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

