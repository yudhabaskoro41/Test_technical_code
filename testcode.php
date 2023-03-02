<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="input"><br><br>
        <button type="submit" name="gs">Generate Segitiga</button>
        <button type="submit" name="gbg">Generate Bilangan Ganjil</button>
        <button type="submit" name="gbp">Generate Bilangan Prima</button>
    </form>
    <h1>Result:</h1>
    <?php
    if(isset($_POST["gbg"])){
        $input = $_POST["input"];
        for ($x=0; $x <= $input; $x++){ 
            if ( $x % 2 == 1 ){ 
                echo $x; 
            }
        }
    }
    if(isset($_POST["gbp"])){
        $input = $_POST["input"];
        for($i = 1; $i<=$input; $i++){
            $a = 0;
            for($j = 1; $j <= $i; $j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
             echo $i.' ';
            }
        }
    }
    ?>
</body>
</html>