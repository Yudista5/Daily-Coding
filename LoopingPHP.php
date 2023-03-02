<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Berlatih Looping PHP</h1>
    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    echo "<h5> Looping 1</h5>";
    for($i=2; $i<=20; $i+=2){
        echo $i . " - I Love Books <br>";

    }

    echo "<h5> Looping 2</h5>";
    for($a=20; $a>=2; $a-=2){
        echo $a . " - I love reading and writing <br>";
    }

    echo "<h3>Soal No 2 Looping Array Module </h3>";
    $number = [18, 45, 29, 61, 47, 34];
    echo "array number: ";
    print_r($number);
    echo "<br><br>";
    echo "Hasil sisa dari Array number : ";
    foreach($number as $value){
      $rest[] = $value %= 5;
    }
    print_r($rest);
    echo "<br>";
   
    echo "<h3> Soal No 3 Looping Assosiative Array</h3>";
    $bio = [
        ["001" , "The Chronicles of Narnia" , "441000" , " Buku fantasi anak-anak klasik" , "narnia.jpeg"],
        ["002" , "Pasta Kacang Merah" , "80000" , " Buku slice of life yang heartwarming" , "pasta.jpeg"],
        ["003" , "ABC Murder" , "50000" , " Buku fiksi kriminal" , "murder.jpeg"],
        ["004" , "Emma" , "128000" , " Buku romansa klasik" , "emma.jpeg"],
    ];

    foreach($bio as $key => $value){
        $item = array(
            'id' => $value[0],
            'name' => $value[1],
            'price' => $value[2],
            'description' => $value[3],
            'source' => $value[4]
        );
        print_r($item);
        echo "<br><br>";
    }

    echo "<h3>Soal No 4 Asterix </h3>";
    for($j=1; $j<=5; $j++){
        for($b=1; $b<=$j; $b++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<h5>Asterix</h5>";
    echo "<br>";


    ?>
</body>
</html>