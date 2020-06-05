<?php
extract($_REQUEST);
if (isset($submit)) {
$num;
echo "<h3>Table of this $num number:</h3>";
for($i=1 ; $i<=10 ; $i++)
{
 echo $num. "*" .$i . "=" . $num*$i;
 echo "</br>";


}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Table of a Number</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
	<style>
        body{
        	font-family: 'Volkhov', serif;
        	font-size: 25px;
        }
		.container{
			width: 50%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			font-size: 20px;

		}
		input[type=submit]{
			background-color: #4caf50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			
		}
		.col-6{
			float: left;
			width: 25%;
			margin-top: 6px;
			align: right;
			
		}
		.row:after{
			content: " ";
			display: table;
			clear: both;
		}
		</style>
</head>
<body>
    <section>
    	<div class="container">
    		<form action="tableofnumber.php" method="POST">
    			<div class="row">
    				<label>Please enter Number here</label>
    			</div>
    			<div class="row">
    				<div class="col-6">
    					<input type="text" name="num" placeholder="Please enter number here" 
    					
    					id="number" autocomplete="off">
    				</div>
    				<div class="col-6">
    					<input type="submit" class="btn btn-success btn-lg" name="submit" value="Submit">
    				</div>
    			</div>
    		</form>
    	</div>
    </section>
</body>
</html>