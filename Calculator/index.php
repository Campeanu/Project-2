 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<style>
		body { 
			background: url(http://imgint.112.agency/original/2019/07/11/284545.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.container {
			background: rgba(255, 255, 255, 0.7)    /*  10% opaque green */ ;
			padding:10px;
		}
	</style>
	<body>
		<center>
			<div class="container" style="margin-top: 220px;">
				<h1> <b>Campeanu Vasile</b> - Project 2</h1>
				<h2>Rezistenta: <span style="color: red; font-weight:bold;">R = u / i</span><h2>
				<h2>Tensiunea: <span style="color: red; font-weight:bold;">U = i * r</span></h2>
				<h2>Intensitatea: <span style="color: red; font-weight:bold;">I = U / r</span></h2>
				<?php
					if(isset($_POST['submit']))
					{
						if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
						{
							if($_POST['operation'] == 'plus')
							{
								$total = $_POST['number1'] + $_POST['number2'];	
								// header("Location: index.php");
							}
							if($_POST['operation'] == 'minus')
							{
								$total = $_POST['number1'] - $_POST['number2'];	
								// header("Location: index.php");
							}
							if($_POST['operation'] == 'multiply')
							{
								$total = $_POST['number1'] * $_POST['number2'];	
								// header("Location: index.php");
							}
							if($_POST['operation'] == 'dividedby')
							{
								$total = $_POST['number1'] / $_POST['number2'];	
								// header("Location: index.php");
							}
							if($_POST['operation'] == 'intensity')
							{
								$total = $_POST['number1'] / $_POST['number2'];	
								// header("Location: index.php");
							}	
							if($_POST['operation'] == 'voltage')
							{
								$total = $_POST['number1'] * $_POST['number2'];	
								// header("Location: index.php");
							}	
							if($_POST['operation'] == 'resistance')
							{
								$total = $_POST['number1'] / $_POST['number2'];	
								// header("Location: index.php");
							}			
							
							if($_POST['operation'] == "intensity")
								echo "<h1 style='color:green; margin-top:20px;'> Intensitatea este egala cu: {$total} </h1>";
							else if($_POST['operation'] == "voltage")
								echo "<h1 style='color:green; margin-top:20px;'> Tensiunea este egala cu: {$total} </h1>";
							else if($_POST['operation'] == "resistance")
								echo "<h1 style='color:green; margin-top:20px;'> Rezistnta este egala cu: {$total} </h1>";
							else
								echo "<h1 style='color:green; margin-top:20px;'> {$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total} </h1>";
						} 
						else 
						{
							echo '<h3 style="color:red;"><b>Numeric values are required</b></h3>';
						}
					}
				?>
				<form method="post" action="index.php">
					<input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
					<input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
					<select name="operation" class="form-control" style="width: 150px; display: inline">
						<option value="intensity">Intensity</option>
						<option value="voltage">Voltage</option>
						<option value="resistance">Resistance</option>
						<option value="plus">Plus</option>
						<option value="minus">Minus</option>
						<option value="multiply">Multiply</option>
						<option value="dividedby">Devide</option>
					</select>
					<input name="submit"  type="submit" value="Calculate" class="btn btn-primary" />
				</form>
			</div>
		</center>
	</body>
</html>
