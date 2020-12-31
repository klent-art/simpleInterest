<html>
<title> Simple Interest Solver</title>
<style>
body { 
  font-size:20px; 
  font-family:arial;
  color:blue;
  } 
 label{
    display: table-cell;
    text-align: justify;
}
input {
  display: table-cell;
}
div.row{
    display:table-row;
}
h1, label{
	color: grey;
}
</style>
<?php
error_reporting(0);

$amount = $_POST['amount'];
$rate = $_POST['rate'];
$time    = $_POST['time'];

$amount2 = (float)$amount;
$rate2   = (float)$rate;


$Solve_Interest = ($amount2 * $rate2 * $time) / 100;
  
$Total_Amount = ($amount2 + $Solve_Interest);

if(isset($_POST['check'])) {

$title .= "RESULT" ."<BR><BR>";
$title .= "The computed interest is Php ".number_format($Solve_Interest,2,'.','').".<br><br>"; 
$title .= "The Total Amount to be paid is Php ".number_format($Total_Amount,2,'.','')."."; 
    
      	  
}
if(isset($_POST['clear'])) {
  $amount = " ";
  $rate = " ";
  $time = " ";
  $title= " ";
   
}
?>
<body style='background-color:black'>
<div style='width:800px;margin:auto'>
  <br> <h1 align="center"> Simple Interest Calculator</h2>
 <form action="" method="post"><div>
  <div class="row"><label> Enter Principal Amount : </label> <input type="text" name="amount" 
           value="<?php echo $amount; ?>" autofocus required size=10/><br> </div>
<div class="row"> <label> Enter Rate of Interest  : </label><input type="text" name="rate" 
           value="<?php echo $rate; ?>" required size=10/><br> </div>
<div class="row"> <label> Enter Period of Time    : </label> <input type="text" name="time" 
           value="<?php echo $time; ?>"  required size=10/>	</div>	</div>   
		   <br>
   <input type="submit" name="check" value="Compute Interest" 
  title="Click here to compute the Interest Amount."/>
  <input type="submit" name="clear" value="Clear" 
  title="Click here to clear text box and values on the screen"/>
</form>

<br> <br>

<?php 
echo $title;
 ?>

  </body>
</html>
