<?php
		
		
		?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>CRUD</title>
				<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
					<script type="text/javascript" src="../assets/js/jquery3.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
			</head>
			<body>
			<div class="container">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4" style="margin-top: 10%;">
							<span class="badge badge-info">EDIT</span>

						<?php
						//database connection
							include '../database/config.php';
							//getting the id from index.php for fetching the data from database that depends on the id selected
								$id = $_POST['idHolder'];
								//setting up the query
								$query = "SELECT * FROM tblmovie WHERE id = '$id'";
								//getting all the result of the query.
								$get = $conn->query($query);

								//now, we used loop to get all the values needed
								//once the button is clicked, it eill redirect to update.php
								while ($row = $get->fetch_assoc()) {
									echo " <form method='POST' action='update.php'>
						 	<div class='form-group'>
						 	<input type='hidden' value='".$row['id']."' name='idHolder'>
						 		<input required='' type='text' placeholder='Title' value='".$row['title']."' name='title' class='form-control'>
						 	</div>
						 	<div class='form-group'>
						 		<textarea required='' value='' name='remarks' class='form-control' style='resize: none;' placeholder='Remarks'>".$row['remarks']."</textarea>
						 	</div>
						 	<div class='form-group'>
						 		<input type='submit' class='btn btn-warning text-white' style='width: 100%;'  value='Update'>
						 	</div>
						 </form>";
								}
							?>
					</div>
					<div class="col-sm-4"></div>

					</div>
				</div>
			</body>
			</html>
		<?php
				include '../footer.php';

