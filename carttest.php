<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Shopping Cart Test</title>
</head>
<body>
  <h1>Items available</h1>
  <form action="carttest.php" method="post">
<table>
   <tr><th>Item</th><th>Price</th><th>Quantity</th></tr>
   <tr> <td> <img src="hammer.jpg" alt="Hammers" style="width:60px;height:30px;padding-right:20px;"> Hammers </td>
        <td style ="padding-left:10px";> $12.99 </td>
        <td> <input type="text" name="hammers" size="2"></td> </tr>
   
   <tr> <td> <img src="nails.jpg" alt="Nails" style="width:60px;height:30px;padding-right:20px;"> Nails</td>
        <td style ="padding-left:10px";> $0.59 </td>
        <td><input type="text" name="nails" size="2"></td></tr>

   <tr> <td> <img src="wood.png" alt="Wood" style="width:60px;height:30px;padding-right:20px;"> Wood</td>
        <td style ="padding-left:10px";> $4.99 </td>
        <td><input type="text" name="wood" size="2"></td></tr>
</table>
   <input type="submit" value="Click to add to cart">
</form>
  <br>
 <?php
   if (isset($_POST['hammers'])) {
     if (is_numeric($_POST['hammers'])) {
       $_SESSION['cart']['hammers'] = $_POST['hammers'];
     } 
     elseif ($_POST['hammers'] == "Remove") {
       unset($_SESSION['cart']['hammers']);
     }
  }

  if (isset($_POST['nails'])) {
   if (is_numeric($_POST['nails'])) {
     $_SESSION['cart']['nails'] = $_POST['nails'];
     } 
   elseif ($_POST['nails'] == "Remove") {
     unset($_SESSION['cart']['nails']);
     }
  }

  if (isset($_POST['wood'])) {
    if (is_numeric($_POST['wood'])) {
      $_SESSION['cart']['wood'] = $_POST['wood'];
      } 
    elseif ($_POST['wood'] == "Remove") {
      unset($_SESSION['cart']['wood']);
      }
   }
?>

   <fieldset style="width:300px">
   <legend>Your Shopping Cart</legend>
<?php
   $total;
   $cost = array(0 => 12.99, 1 => .59, 2=> 4.99);
   if (!isset($_SESSION['cart'])) {
     $_SESSION['cart'] = array(); 
     echo "Your shopping cart is empty\n";
     } 
   else {
     echo "<form action=\"carttest.php\" method=\"post\">\n";
     echo "<table>\n";
     echo "<tr><th>Item</th><th>Quantity</th><th/><th>Total Cost</th></tr>\n";
     $i = 0;
     foreach($_SESSION['cart'] as $key => $value) {
       echo "<tr><td>$key</td><td>$value</td>\n";
       if ($key == 'hammers')
       {
         $i = 0;
       }
       elseif ($key == 'nails')
       {
         $i = 1;
       }
       else {$i = 2;}
       $total = $total + ($value * $cost[$i]);
       echo "<td><input type=\"submit\" name=\"$key\" value=\"Remove\"></td>\n";
     }
   echo "<td>$total</td></tr>\n";
   echo "</table>\n";
   echo "</form>\n";
  }
  ?>
</fieldset>
</body>
</html>
