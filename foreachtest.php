<!DOCTYPE html>
<html>
<head>
<title>PHP foreach Test</title>
</head>
<body>
<h1>My favorites</h1>
<?php
$favs = array("fruit"=>"banana","veggie"=>"carrot","meat"
    =>"roast beef");
foreach($favs as $food => $type) {
    echo "$food - $type<br>\n";
}
?>
</body>
</html>