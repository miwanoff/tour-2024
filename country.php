<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
$stars = $_GET["stars"];
$price = $_GET["price"];
include "header.php";

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
include "footer.php";