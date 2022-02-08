<?php include('includes/header.php'); ?>

<title>Add Category:- CITIZEN CENTRIC MONITORING & EVALUATION SYSTEM (CCMES)</title>

<style>

.custom {
    width: 300px !important;
    justify-content: center;
    align-items: center;
}

</style>


<section style="margin-top: 100px; margin-bottom: 5px;" class="section-padding-12-9">

	<div class="container">

			<?php 

				if (isset($_POST['addCategory'])) {
					// $bookauthor = $_POST['bookauthor'];
					$category = $_POST['category'];
					$dateadded = date('Y-m-d H:i:s');

					// $data = array('names'=>$names, 'email'=>$email, 'phone'=>$phone, 'username'=>$username, 'password'=>password_hash($password, PASSWORD_DEFAULT));

					$sql = ("SELECT *FROM categories WHERE categoryname='$category' ");

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<div class='alert alert-danger text-center'>The Category already Exists</div>";
					    header('Location'. $_SERVER["HTTP_REFERER"]);
					}else{
						$insert = "INSERT INTO categories(categoryname, dateadded) VALUES('$category',  '$dateadded')";

						if ($conn->query($insert) === TRUE) {
							echo "<div class='alert alert-success text-center'>Category Successfully Added.</div>";
						    // header("location:$base_url"."addpublication.php");
						    header("Refresh:2; url=addcategory.php");
						} else {
						    echo "<div class='alert alert-danger text-center'>Error: ".$insert." <br> ".$conn->error."</div>";
						    header("location:$base_url"."addcategory.php");
						}
					}

				}
			?>

		<div class="row">

			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="card mb-4">

					<div class="card-header"><h5 class="heading-title text-center">Add Category</h5></div>

					<div class="card-body">

						<div>
							<form method="post" action="">

								<div class="form-group">
									<label>Enter Category Name:</label>
									<input type="text" name="category" class="form-control" required>
								</div>

								<div class="row mt-3">
									<div class="col-md-6">
										<button type="submit" name="addCategory" class="btn btn-primary custom">Add</button>
									</div>

									<div class="col-md-6">
										<a href="admin/index.php" class="btn btn-primary custom">Go Back To Dashboard</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<section style ="margin-top: 10px;" class="section-padding-12-9">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="card mb-5">

					<div class="card-header"><h5 class="heading-title text-center">Categories</h5></div>

					<div class="card-body">
						<table class="order table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Category ID</th>
									<th>Category</th>
									<th>Date Added</th>
			
									<!-- <th>Action</th> -->
								</tr>
							</thead>
										
							<tbody>
								<?php 

									$sql = ("SELECT *FROM categories");

									$result = $conn->query($sql);

									// $no =1;
									if ($result->num_rows > 0) {
										$no = 1;
										while($row = $result->fetch_assoc()) {
											echo "<tr>
												<td>".$no."</td>
												<td>".$row['categoryid']."</td>
												<td>".$row['categoryname']."</td>
												<td>".$row['dateadded']."</td>
								
											</tr>";
											$no++;
										}

									}else{
										echo "No Data";
									}

								?>
							</tbody>
						</table>

						<!-- <a href="admin/index.php" class="btn btn-primary">Go Back Home</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php include('includes/footer.php'); ?>