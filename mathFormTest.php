<!DOCTYPE html>
<html>
<head>
<title>PHP Form Test</title>
</head>
<body>
<h1>Form results:</h1>
<?php
$lInput = $_POST['lInput'];
$tInput = $_POST['tInput'];
$hInput = $_POST['hInput'];

if (isset($_POST['lfunction'])) 
{
	$lfunction = $_POST['lfunction'];
	if ($lfunction == "exp")
	{
		$lResult = exp($lInput);
	} 
	else if ($lfunction == "expm1")
	{
		$lResult = expm1($lInput);
	} 
	else if ($lfunction == "log10")
	{
		$lResult = log10($lInput);
	}
	else if ($lfunction == "log")
	{
		$lResult = log($lInput);
	}
}
else 
{
	$lfunction = "not specified";
}

if (isset($_POST['tfunction'])) 
{
	$tfunction = $_POST['tfunction'];
	if ($tfunction == "acos")
	{
		$tResult = acos($tInput);
	} 
	else if ($tfunction == "asin")
	{
		$tResult = asin($tInput);
	} 
	else if ($tfunction == "atan")
	{
		$tResult = atan($tInput);
	}
	else if ($tfunction == "cos")
	{
		$tResult = cos($tInput);
	}
	else if ($tfunction == "deg2rad")
	{
		$tResult = deg2rad($tInput);
	} 
	else if ($tfunction == "rad2deg")
	{
		$tResult = rad2deg($tInput);
	}
	else if ($tfunction == "sin")
	{
		$tResult = sin($tInput);
	}
	else if ($tfunction == "tan")
	{
		$tResult = tan($tInput);
	}
}
else 
{
	$tfunction = "not specified";
}

if (isset($_POST['hfunction'])) 
{
	$hfunction = $_POST['hfunction'];
	if ($hfunction == "acosh")
	{
		$hResult = acosh($hInput);
	} 
	else if ($hfunction == "asinh")
	{
		$hResult = asinh($hInput);
	} 
	else if ($hfunction == "atanh")
	{
		$hResult = atanh($hInput);
	}
	else if ($hfunction == "cosh")
	{
		$hResult = cosh($hInput);
	}
	else if ($hfunction == "sinh")
	{
		$hResult = sinh($hInput);
	} 
	else if ($hfunction == "tanh")
	{
		$hResult = hypot($hInput);
	}
}
else 
{
	$hfunction = "not specified";
}

echo "$lfunction($lInput) = $lResult<br />";
echo "$tfunction($tInput) = $tResult<br />";
echo "$hfunction($hInput) = $hResult<br />";

?>
</body>
</html>
