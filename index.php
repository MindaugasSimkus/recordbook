<?php
function get_records($array) {
	$i = 0;
	foreach ($array as $key => $value) {
		$i++;
		echo "Record number " . $i . ": " . $value . "<br/>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recordbook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Leave a record</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST">
						<div class="form-group">
							<label for="message">Message
							</label>
							<textarea class="form-control" name="message" id="message" rows="5" placeholder="Describe yourself here..."> </textarea>
						</div>
					<button class="btn btn-success" type="submit">Add</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
					<h3>Record log:<br/></h3>
					<?php 
					session_start();
					if (!isset($_SESSION['messages'])) {
						$_SESSION['messages'] = [];
						$_POST['message'] =[];
					} else if ($_POST['message'] == " ") {
						$_SESSION['messages'] = $_SESSION['messages'];
						$_POST['message'] = [];
						echo "<h4 style='color: red'>Warning!!! Blank records are not accepted<br/></h4>";
					} else {
						array_push($_SESSION['messages'], $_POST['message']);
					} 
					get_records($_SESSION['messages']); 
					?>
			</div>
		</div>
	</div>	
</body>
</html>