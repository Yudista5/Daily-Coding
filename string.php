<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <h1> Berlatih String PHP </h1>
    <?php
        echo "<h3> Soal No 1 </h3>";
        $first_sentence = "Hello Wormies!";
        echo "Kalimat pertama : ". $first_sentence . "<br>";
        echo "Panjang string : " . strlen($first_sentence) . "<br>";
        echo "Jumlah Kata : " . str_word_count($first_sentence). "<br><br>";

        $second_sentence = "I'm ready for the writing challenges";
        echo "Kalimat kedua : ". $second_sentence . "<br";
        echo "Panjang string : ". strlen($second_sentence). "<br><br>";
        echo "Jumlah Kata : " . str_word_count($second_sentence). "<br><br>";



        echo "<h3> Soal No 2</h3>";
        $string2 = "I love Books";
        echo "<label> String: </label> \"$string2\" <br>";
        echo "Kata Pertama : " . substr($string2,0,1) . "<br>";
        echo "Kata Kedua : " . substr($string2,2,4) . "<br>";
        echo "Kata Ketiga : " . substr($string2,7,5) . "<br>";

        echo "<h3> Soal No 3 </h3>";
        $string3 = "Knowledge is everything";
        echo "String: \"$string3\" <br>";
        echo "Ganti Kalimat : " . str_replace("everything","important",$string3);
  ?>
</body>
</html>