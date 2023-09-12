<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 m-auto">
                <h2 class="text-center mb-5">Simple Calculator</h2>
                <form action="" method="POST">
                    <input type="text" name="num1" placeholder="First Number" class="form-control mb-3">
                    <input type="text" name="num2" placeholder="Second Number" class="form-control mb-3">
                  
                    <select name="operation" id="" class="form-control mb-3">
                        <option value="add">Addition</option>
                        <option value="sub">Substruction</option>
                        <option value="mul">Multiplication</option>
                        <option value="div">Division</option>
                        <option value="bin">Binary</option>
                        <option value="oct">Octal</option>
                        <option value="hex">Hexadecimal</option>
                    </select>

                    <input type="submit" value="Get Result" name="submit" class="btn btn-info">
                </form>

                <div class="">
                    <?php 
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                         $num1 =  $_POST['num1'];
                         $num2 =  $_POST['num2'];
                         $operation =  $_POST['operation'];

                         switch($operation){
                            case 'add':
                                $sum = $num1 + $num2;
                                echo $sum;
                                break;
                            case 'sub':
                                $sum = $num1 - $num2;
                                echo $sum;
                                break;
                            case 'mul':
                                $sum = $num1 * $num2;
                                echo $sum;
                                break;
    
                            case 'div':
                                if($num2 != 0){
                                    $sum = $num1 / $num2;
                                    echo $sum;
                                }else{
                                    echo "Invalid Input two";
                                }
                                break;
                         }

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>