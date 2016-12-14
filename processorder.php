<html>
<head>
  <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?php 
  $tyreqty=$_POST['tyreqty'];
  $oilqty=$_POST['oilqty'];
  $sparkqty=$_POST['sparkqty'];
  echo "<p>Order processed at "; // Start printing order 

  echo date("H:i, jS F");
  echo "<br>";
  echo "<p>Your order is as follows:";
  echo "<br>";
  echo $tyreqty." tyres<br>";
  echo $oilqty." bottles of oil<br>";
  echo $sparkqty." spark plugs<br>";

  $totalqty = 0;
  $totalamount = 0.00;
 
  define("TYREPRICE", 100);
  define("OILPRICE", 10);
  define("SPARKPRICE", 4);

  $totalqty = $tyreqty + $oilqty + $sparkqty;
  $totalamount =  $tyreqty * TYREPRICE
                + $oilqty * OILPRICE
                + $sparkqty * SPARKPRICE;
  $totalamount = number_format($totalamount, 2);

  echo "<br>\n";
  echo "Items ordered:       ".$totalqty."<br>\n";
  echo "Subtotal:            $".$totalamount."<br>\n";

  $taxrate = 0.10;  // local sales tax is 10%
  $totalamount = $totalamount * (1 + $taxrate);
  
  $totalamount = number_format($totalamount, 2);

  echo "Total including tax: $".$totalamount."<br>\n";
  
 
?>
</body>
</html>
