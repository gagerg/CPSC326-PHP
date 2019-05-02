<!DOCTYPE html>
<html>
<head>
<title>PHP Form Test</title>
<style>
 input, textarea {
 margin: 5px;
 }
</style>
</head>
<body>
<h1>Choose some fun ole math calculations!!</h1>
<form action="mathFormtest.php" method="post">
<fieldset>
<legend>My Math Form</legend>
<fieldset>
<legend>Select a logarithmic function:</legend>
<input type="radio" name="lfunction" value="exp">exponent of e<br>
<input type="radio" name="lfunction" value="expm1">exponent of e - 1<br>
<input type="radio" name="lfunction" value="log10">log base 10<br>
<input type="radio" name="lfunction" value="log">natural logarithm<br>
<label> Value for logarithmic calculation: </label>
<input type=double name="lInput" size="40"><br>
</fieldset>
<fieldset>
<legend>Select a trigonometric function:</legend>
<input type="radio" name="tfunction" value="acos">arc cosine<br>
<input type="radio" name="tfunction" value="asin">arc sine<br>
<input type="radio" name="tfunction" value="atan">arc tangent<br>
<input type="radio" name="tfunction" value="cos">cosine<br>
<input type="radio" name="tfunction" value="deg2rad">degrees to radians<br>
<input type="radio" name="tfunction" value="rad2deg">radians to degrees<br>
<input type="radio" name="tfunction" value="sin">sine<br>
<input type="radio" name="tfunction" value="tan">tangent<br>
<label> Value for trigonometric calculation: </label>
<input type=double name="tInput" size="40"><br>
</fieldset>
<fieldset>
<legend>Select a hyperbolic function:</legend>
<input type="radio" name="hfunction" value="acosh">inverse hyperbolic cosine<br>
<input type="radio" name="hfunction" value="asinh">inverse hyperbolic sine<br>
<input type="radio" name="hfunction" value="atanh">inverse hyperbolic tangent<br>
<input type="radio" name="hfunction" value="cosh">hyperbolic cosine<br>
<input type="radio" name="hfunction" value="sinh">hyperbolic sine<br>
<input type="radio" name="hfunction" value="tanh">hyperbolic tangent<br>
<label> Value for hyperbolic calculation: </label>
<input type=double name="hInput" size="40"><br>
</fieldset>
<input type="submit" value="Submit your form">
</fieldset>
</body>
</html>
