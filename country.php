<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
include "header.php";

?>
<h2>Ви обрали:</h2>
<ul>
    <li><?=$country?></li>
    <li><?=$transport?></li>
</ul>
<?php
//echo "$country $transport" ;
include "footer.php";