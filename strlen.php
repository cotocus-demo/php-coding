<?php
$message = '';
$message1 = '';
if (isset($_POST['text'])) {
	if (!empty($_POST['text'])) {
	$text = $_POST['text'];
	$length = strlen($text);
	$message =$text;
	$message1 = $length;
        }else{
	echo "No text has been ebtered";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>How to count the length of string</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<style>
	  body{
	      font-size: 25px;
	      color: black;
          font-family: 'Satisfy', cursive;
          background-color: #82CAFF;
          }
       .container{
			width: 50%;
			margin: 0 auto;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		input[type=text], textarea{
			width: 150%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			resize: vertical;
		}
		input[type=submit]{
			background-color: #4caf50;
			color: white;
			padding: 15px 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}
		label{
			color: red;
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
      	<?php
    		if (!empty($message)) {
    		?>
    		<div class="row">
    			<h3>String is: <?php echo $message; ?></h3> 
    		</div>
    		<div class="row">
    			<h3>Length of this string: <?php echo $message1; ?></h3> 
    		</div>
    	<?php 
    	 } ?>
      	<form action="strlen.php" method="POST">
      		<div>
      			<label>Please write something what you want to count :</label>
      		</div>
      		<div class="row">
    				<div class="col-6">
    					<textarea name="text" rows="5" cols="40"></textarea>
    				</div>
    				<div class="col-6">
    					<input type="submit" name="submit" value="Submit">
    				</div>
    			</div>
      	</form>
      </div>
</body>
</html>