<?php include('includes/header.php'); ?>



<section style ="margin-top: 200px;" class="section-padding-12-9">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="card mb-5">

					<div class="card-header"><h5 class="heading-title text-center">Manage Users</h5></div>

					<div class="card-body">
						<table class="order table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Registration Date</th>
									<th>Names</th>
									<th>Email</th>
									<th>Phone Number</th>
									<th>Role</th>
									<!-- <th>Action</th> -->
								</tr>
							</thead>
										
							<tbody>
								<?php 

									$sql = ("SELECT *FROM users");

									$result = $conn->query($sql);

									// $no =1;
									if ($result->num_rows > 0) {
										$no = 1;
										while($row = $result->fetch_assoc()) {
											echo "<tr>
												<td>".$no."</td>
												<td>".$row['regdate']."</td>
												<td>".$row['names']."</td>
												<td>".$row['email']."</td>
												<td>".$row['phone']."</td>
												<td>".$row['role']."</td>
											</tr>";
											$no++;
										}

									}else{
										echo "No Data";
									}

								?>
							</tbody>
						</table>

						<a href="admin/index.php" class="btn btn-primary">Go Back To Dashboard</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('includes/footer.php'); ?>



