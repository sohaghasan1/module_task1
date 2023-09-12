<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even Or Odd Number Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  

  <div class="container">
        <div class="row text-center py-5">
            <div class="col-md-6 m-auto">
                <h3>Even number and Odd number checker</h3>
                <form action="" method="POST" class="my-3">
                    <label for="">Number</label>
                    <input type="text" name="num" class="form-control mb-3">
                    <input type="submit" name="submit" value="Convert" class="btn btn-success">
                </form>
                <?php 
                   if(isset($_POST['submit'])){
                    $num = $_POST['num'];
                    
                    if($num % 2 == 0){
                        echo $num . " is an even number";
                    }else{
                        echo $num . " is an odd number";
                    }

                   }
                ?>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>