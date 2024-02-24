 <!---------------- Session starts form here ----------------------->
	<?php  
	session_start();
	if (!$_SESSION["LoginAdmin"])
	{
		header('location:../login/login.php');
	}
		require_once "../connection/connection.php";
	?>
<!---------------- Session Ends form here ------------------------>
<title>Admin - OKHK</title>
	<?php include('../common/common-header.php') ?>
	<?php include('../common/admin-sidebar.php') ?>  
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4>Admin Dashboard </h4>
			</div>
			<div class="row">
	
				<div class=" col-lg-6 col-md-12 col-sm-12">
					<div>
						<section class="mt-3">
							<div class="btn btn-block table-two text-light d-flex">
								<span class="font-weight-bold"><i class="fa fa-list-alt mr-2" aria-hidden="true"></i> Program List</span>
								<a href="" class="ml-auto" data-toggle="collapse" data-target="#collapsetwo"><i class="fa fa-plus text-light" aria-hidden="true"></i></a>
								
							</div>
							<div class="collapse show mt-2" id="collapsetwo">
								<table class="w-100 table-elements table-two-tr"cellpadding="2">
									<tr class="pt-5 table-two text-white" style="height: 32px;">
										<th>Course Code</th>
										<th>Course Name</th>
									</tr>
									<?php
										$query="select course_name,course_code from courses";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) { ?>
											<tr>
												<td><?php echo $row['course_code'] ?></td>
												<td><?php echo $row['course_name'] ?></td>
											</tr>
										<?php } 
									?>
								</table>
							</div>
						</section>
					</div>
				</div>
				<div class="col-md-12">
					<div>
						
					</div>				
				</div>
			</div>	
		</main>
	
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>