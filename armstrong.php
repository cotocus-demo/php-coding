<?php
if (condition) {
	# code...
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Armstrong number</title>
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400&display=swap" rel="stylesheet">
	<style>
	 body{
        	font-family: 'Comfortaa', cursive;
        	font-size: 25px;
        	background-color: #82CAFF
        }
		.container{
			width: 50%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 40px;
			font-size: 20px;

		}
		input[type=text]{
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
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
   	 <div class="container">
   	 	<h1>Please enter the number</h1>
   	 	<form action="" method="POST">
    			<div class="row">
    				<div class="col-6">
    					<input type="text" name="number" placeholder="Please enter number here" 
    					
    					id="number" autocomplete="off">
    				</div>
    				<div class="col-6">
    					<input type="submit" name="submit" value="Submit">
    				</div>
    			</div>
    		</form>
   	 </div>
</body>
</html>