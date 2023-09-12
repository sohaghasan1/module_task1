<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Caculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto">
                <h1 class="mb-5 text-center">Input your score and get result</h1>
                <form action="" method="POST">
                    <label for="">First Score</label> 
                    <input type="number" name="score1" required class="form-control mb-3">

                    <label for="">Second Score</label> 
                    <input type="number" name="score2" required class="form-control mb-3">

                    <label for="">Third Score</label> 
                    <input type="number" name="score3" required class="form-control mb-3">

                    <input type="submit" name="submit" value="Get Result" class="btn btn-success">
                </form>

                <?php 
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                      $score1 =   $_POST['score1'];
                      $score2 =   $_POST['score2'];
                      $score3 =   $_POST['score3'];

                      $average_score = ($score1 + $score2 + $score3) /3 ;

                    //   build funchtion for calculate grade 

                    function grade_calculate(){
                        global $average_score;
                        global  $score1;
                        global  $score3;
                        global  $score2;
                        if($average_score <= 100 AND $average_score >= 90){
                            echo "Your Score:- <br>";
                            echo  "Score One = " .$score1 . "<br>";
                            echo  "Score Two = " .$score2 . "<br>";
                            echo  "Score Three = " .$score3. "<br>";
                            echo "Grade: A"; 
                        }else if($average_score <= 89 AND $average_score >= 80){
                            echo "Your Score:- <br>";
                            echo  "Score One = " .$score1 . "<br>";
                            echo "Score Two = " . $score2 . "<br>";
                            echo "Score Three = " . $score3. "<br>";
                            echo "Grade: B"; 
                        }else if($average_score <= 79 AND $average_score >= 70){
                            echo "Your Score:- <br>";
                            echo "Score One = " . $score1 . "<br>";
                            echo "Score Two = " . $score2 . "<br>";
                            echo "Score Three = " . $score3. "<br>";
                            echo "Grade: C"; 
                        }else if($average_score <= 69 AND $average_score >= 60){
                            echo "Your Score:- <br>";
                            echo "Score One = " . $score1 . "<br>";
                            echo  "Score Two = " .$score2 . "<br>";
                            echo  "Score Three = " .$score3. "<br>";
                            echo "Grade: D"; 
                        }else{
                            echo "Your Score:- <br>";
                            echo "Score One = " . $score1 . "<br>";
                            echo "Score Two = " . $score2 . "<br>";
                            echo "Score Three = " . $score3. "<br>";
                            echo "Grade: F <br>";
                            echo "Your Avarage mark is bellow 60. Try to keep your average mark above 60";
                        }
              
                    }

                    echo "Average Mark : $average_score". "<br>";
                    grade_calculate();
                    }
                ?>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>