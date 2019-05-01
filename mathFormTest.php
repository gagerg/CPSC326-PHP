<!DOCTYPE html>
<html>
<head>
<title>PHP Form Test</title>
</head>
<body>
<h1>Form results:</h1>
<?php
$logInput = $_POST['logInput'];
$logResult = log($logInput);
$cosInput = $_POST['cosInput'];
$cosResult = cos($cosInput);
$hcosInput = $_POST['hcosInput'];
$hcosResult = cosh($hcosInput);


echo "Natural log result: $logResult <br />";
echo "Cosine result: $cosResult <br />";
echo "Hyperbolic cosine result: $hcosResult";

?>
</body>
</html>