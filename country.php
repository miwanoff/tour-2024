<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
$stars = $_GET["stars"];
$price = $_GET["price"];
include "header.php";
include_once "db.php";

?>
<h2>Ви обрали:</h2>
<ul>
    <li><?=$country?></li>
    <li><?=$transport?></li>
    <li><?=$stars?></li>
    <li><?=$price?></li>
</ul>
<?php
//echo "$country $transport" ;
$tour_keys = [];
foreach ($tours as $key => $tour) {
    if ($tour['country'] == $country) {
        $tour_keys[] = $key;
    }
}
//print_r($tour_keys);
echo "<h2>Тури</h2>";
for ($i = 0; $i < count($tour_keys); $i++) {
    //print_r($tours[$tour_keys[$i]]);
    $n = $i+1;
    echo "<h3>".$n."</h3>";
    foreach ($tours[$tour_keys[$i]] as $key => $value) {
        echo "$key: $value <br>";
    }
}
include "footer.php";