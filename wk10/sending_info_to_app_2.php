<?php

$q= "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["q"])) {
    $q= "";
  } else {
    $q =strip_data ($_GET["q"]);
}
}

function strip_data($data){
$data= strip_tags($data);
return $data;

}




?>
<form method="get">
<input name="q" placeholder="Enter Text">
<br/>
<input type="submit" value="Go">
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $q;
?>