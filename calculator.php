<html>
    <head>
    	<title>Lab 7 - Calculator</title>
    	<link href="StyleSheet.css" rel="StyleSheet">
    </head>
    
    <body>
    		<div id="container">
        		<div id="header">
        			<?php include_once 'headers.php';?>
        		</div>
    		</div>
    		
       		<div id="menu">
        		<?php include_once 'Menu.php';?>
         	</div>
    		
    		<div id="calculator.php">
    			<form method=GET action="calculator.php">
   			        <center><input type="number" name="number1" />
   			        <select name="option">
   			        	<option>+</option>
   			        	<option>-</option>
   			        	<option>x</option>
   			        	<option>/</option>
   			        	<option>exp</option>
   			        </select>
   			        <input type="number" name="number2" />
   			        <input type="submit" value="="/></center>
    			</form>
    			<?php
    			if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["option"])){
    			    $i = $_GET["number1"];
    			    $j = $_GET["number2"];
    			    $index = 2;
    			    $k = 0;
    			    $prime = true;
    			    if ($_GET["option"] == "+"){
    			        $k = $i + $j;
    			    }else if ($_GET["option"] == "-"){
    			        $k = $i - $j;
    			    }else if ($_GET["option"] == "x"){
    			        $k = $i * $j;
    			    }else if ($_GET["option"] == "/"){
    			        $k = bcdiv($i, $j);
    			    }else if ($_GET["option"] == "exp"){
    			        $k = pow($i, $j);
    			    }
    			    
    			    while (($index*$index)<=$k && $prime == true){
    			        if (($k % $index) == 0){
    			            $prime = false;
    			        }
    			        $index = $index + 1;
    			    }
    			    $orNot = ["is a prime number", "is NOT a prime number", "is an even number", "is an odd number"];
    			    if ($prime == true){
    			        echo "<center>$k $orNot[0]</center>";
    			    }else{
    			        echo "<center>$k $orNot[1]</center>";
    			    }
    			    
    			    if (($k % 2) == 0){
    			        echo "<center>$k $orNot[2]</center>";
    			    }else {
    			        echo "<center>$k $orNot[3]</center>";
    			    }
    			}
                ?>
    		</div>
    		
    		<div id="footer">
    			<?php include_once 'Footer.php';?>
    		</div>
    </body>
</html>