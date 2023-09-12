
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comparison Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container">
        <div class="row py-5">
            <div class="col-md-6 m-auto">
                <h3 class="text-center">Comparison Tool</h3>
                <form action="" method="POST" class="my-3">
                    <label for="">Number One</label>
                    <input type="text" name="num1" class="form-control mb-3">
                    <label for="">Number Two</label>
                    <input type="text" name="num2" class="form-control mb-3">
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
                </form>
                <?php 
                   if(isset($_POST['submit'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    $result = ($num1 > $num2) ? "$num1 is greater than $num2" : "$num1 is lees than $num2";
                        
                    echo $result;
                    
                   }
                ?>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

