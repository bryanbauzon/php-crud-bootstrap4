<!-- By design, the POST request method requests that a web server accepts the data enclosed in the body of the request message, most likely for storing it. It is often used when uploading a file or when submitting a completed web form. In contrast, the HTTP GET request method retrieves information from the server. -->

<?php include 'header.php';?>
		<section >
			<div class="container">
				<div class="row">
					<div class="col-sm-4" style="margin-top: 10%;">
						<span class="badge badge-warning">CRUD</span>
						<hr>
						 <form method="POST" action="process/add.php">
						 	<div class="form-group">
						 		<input required="" type="text" placeholder="Title" name="title" class="form-control">
						 	</div>
						 	<div class="form-group">
						 		<textarea required="" name="remarks" class="form-control" style="resize: none;" placeholder="Remarks"></textarea>
						 	</div>
						 	<div class="form-group">
						 		<input type="submit" class="btn btn-warning text-white" style="width: 100%;" name="" value="Add">
						 	</div>
						 </form>
					</div>
					<div class="col-sm-8" style="margin-top: 5%;">
						<div class="table">
							<span class="badge badge-info">DATA</span>
							<table class="table table-striped">
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Remarks</th>
									<th>Action</th>
								</tr>
							
									<?php
										//calling the file of database
										include 'database/config.php';
										//selecting all the data from the speccific table
										$query = "SELECT * FROM tblmovie";
										//getting the result by the use of oop-concept
										$get = $conn->query($query);
										//test if data is > 0
										$data = mysqli_num_rows($get);
										if($data > 0){
											//while loop to get all the data
											while ($row = $get->fetch_assoc()) {
												echo "<form method='POST' action='process/edit.php'>
												<input type='hidden' name='idHolder' value='".$row['id']."'>
															<tr><td>".$row['id']."</td>
												<td>".$row['title']."</td>
												<td>".$row['remarks']."</td>
												<td><input type='submit' class='btn btn-info btn-sm' value='Edit'>&nbsp;&nbsp;<a href='process/delete.php?id=".$row['id']."' class='btn btn-danger		 btn-sm text-white'>Delete</a></td>
												</tr>
												</form>
												";
											}

										}else{
											//if there is no data found. this will be executed
											echo "<tr>
												<td colspan=4>NO DATA FOUND.</td>
											</tr>";
										}
									?>
								
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php include 'footer.php';?>
