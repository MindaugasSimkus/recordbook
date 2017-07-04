<?php

//sesijos kintamieji

session_start();

$_POST['empty'] =[];

if (!isset($_SESSION['messages'])) {
	$_SESSION['messages'] = [];
	$_POST['message'] =[];
} else if ($_POST['message'] === []) {
	$_SESSION['messages'] = $_SESSION['messages'];
	$_POST['message'] = [];
} else {
	array_push($_SESSION['messages'], $_POST['message']);
} 






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
							<textarea class="form-control" name="message" id="message" rows="5">
							</textarea>
						</div>
					<button class="btn" type="submit">Add</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
					<?php get_records($_SESSION['messages']); ?>
			</div>
		</div>
	</div>
		
			<?php
				print_r($_POST['message']);


				print_r($_SESSION['messages']);

				echo "size of empty: " . sizeof($_POST['empty']);
				echo "size of message: " . sizeof($_POST['message']);


				if ($_POST['message'] == $_POST['empty']) {
					echo "zero";
				} else {
					print_r ($_POST['message']);
				}

				?>
		
</body>
</html>