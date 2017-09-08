<!DOCTYPE html>
<html lang='eng'>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>

	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!--Fontawesome-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- ******************************************** -->
<?php
	$people = array(
	   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com'),
	   array('id'=>6, 'first_name'=>'Mike', 'last_name'=>'Brisson', 'email'=>'mike@codecadaver.com')
	);
        
        
?>
<!-- ******************************************** -->
	<div class="container">
		<div class="jumbotron">
			<h1>People Table</h1>
			<h3>A Simple Employee Table <i class="fa fa-smile-o" aria-hidden="true"></i></h3>
		</div>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Contact</th>
			</thead>
			<tbody>
				<?php
    
		  		$keys = array_keys($people);
				for($i = 0; $i < count($people); $i++) {
					echo "<tr>";
		    			foreach($people[$keys[$i]] as $key => $value) {
		        		  echo "<td>".$value ."</td>";
		      			  $firstName = $people[$i]['first_name'];
		      			  $lastName = $people[$i]['last_name'];
                			  $email = $people[$i]['email'];
		    		}
                    
		    echo "<td><button class='btn btn-info' onclick='alert(\"$firstName $lastName: $email\")'>Contact</button></td>";
		    echo "</tr>";
		}
		?>
			</tbody>
		</table>
	</div>

<!-- jQuery -->
	<script
  	src="https://code.jquery.com/jquery-3.2.1.min.js"
  	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  	crossorigin="anonymous"></script>

	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
	</script>

	<!-- Custom Script -->
	<!-- <script type="text/javascript" src='table.js'></script> -->
</body>
</html>
