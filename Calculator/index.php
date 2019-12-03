 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<center>
			<div class="container" style="margin-top: 220px">
				<h1>Campeanu Vasile - Project 2</h1>
				<?php
					if(isset($_POST['submit']))
					{
						if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
						{
							if($_POST['operation'] == 'plus')
							{
								$total = $_POST['number1'] + $_POST['number2'];	
							}
							if($_POST['operation'] == 'minus')
							{
								$total = $_POST['number1'] - $_POST['number2'];	
							}
							if($_POST['operation'] == 'multiply')
							{
								$total = $_POST['number1'] * $_POST['number2'];	
							}
							if($_POST['operation'] == 'dividedby')
							{
								$total = $_POST['number1'] / $_POST['number2'];	
							}
							if($_POST['operation'] == 'operationx')
							{
								$total = $_POST['number1'] + $_POST['number2'];	
							}	
							if($_POST['operation'] == 'operationy')
							{
								$total = $_POST['number1'] + $_POST['number2'];	
							}	
							if($_POST['operation'] == 'operationz')
							{
								$total = $_POST['number1'] + $_POST['number2'];	
							}			
							echo "<h1 style='color:green; margin-top:20px;'>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
						} 
						else 
						{
							echo '<h3 style="color:red;"><b>Numeric values are required</b></h3>';
						}
					}
				?>
				<form method="post" action="index.php">
					<input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
					<select name="operation">
						<option value="plus">Plus</option>
						<option value="minus">Minus</option>
						<option value="multiply">Multiply</option>
						<option value="dividedby">Devide</option>
						<option value="operationx">OperationX</option>
						<option value="operationy">OPerationY</option>
						<option value="operationz">OPerationZ</option>
					</select>
					<input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
					<input name="submit"  type="submit" value="Calculate" class="btn btn-primary" />
				</form>
			</div>
		</center>
	</body>
</html>
