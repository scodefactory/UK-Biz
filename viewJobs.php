<?php 
	$title = "View Jobs";
	include_once "header.php";
	if(isset($_GET["search"])){
		$search = $_GET["search"];
	}
	else{
		$search = array();
	}
?>
	<link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Jobs</h1>
			</div>
		<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<form role="form">
				<div class="col-lg-2">
					<div class="form-group">
						<label>Publish Date From</label>
						<div class='input-group date' id='publishDateFrom' data-date-format="DD MMM YYYY">
							<input type='text' class="form-control"  name="search[publish_date_from]" value="<?php echo paramExists($search, 'publish_date_from') ?  $search['publish_date_from'] : '' ; ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Publish Date To</label>
						<div class='input-group date' id='publishDateTo' data-date-format="DD MMM YYYY">
							<input type='text' class="form-control"  name="search[publish_date_to]"  value="<?php echo paramExists($search, 'publish_date_to') ?  $search['publish_date_to'] : '' ; ?>">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Expiry Date From</label>
						<div class='input-group date' id='expiryDateFrom' data-date-format="DD MMM YYYY">
							<input type='text' class="form-control"  name="search[expiry_date_from]"  value="<?php echo paramExists($search, 'expiry_date_from') ?  $search['expiry_date_from'] : '' ; ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Expiry Date To</label>
						<div class='input-group date' id='expiryDateTo' data-date-format="DD MMM YYYY">
							<input type='text' class="form-control"  name="search[expiry_date_to]"  value="<?php echo paramExists($search, 'expiry_date_to') ?  $search['expiry_date_to'] : '' ; ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-time"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Location</label>
						<input class="form-control" placeholder="Enter Location" name="search[location]"  value="<?php echo paramExists($search, 'location') ?  $search['location'] : '' ; ?>">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Eligibility</label>
						<input class="form-control" placeholder="Enter Eligibility" name="search[eligibility]"  value="<?php echo paramExists($search, 'eligibility') ?  $search['eligibility'] : '' ; ?>">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Experience</label>
						<input class="form-control" placeholder="Enter Experience Required" name="search[experience]"  value="<?php echo paramExists($search, 'experience') ?  $search['experience'] : '' ; ?>">
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Job Type</label>
						<select class="form-control" name="search[job_type]">
							<option value="All" <?php echo (paramExists($search, 'job_type') && $search['job_type'] == 'All') ?  'selected' : '' ; ?>>All</option>
							<option value="PART_TIME" <?php echo (paramExists($search, 'job_type') && $search['job_type'] == 'PART_TIME') ?  'selected' : '' ; ?>>Part Time</option>
							<option value="FULL_TIME" <?php echo (paramExists($search, 'job_type') && $search['job_type'] == 'FULL_TIME') ?  'selected' : '' ; ?>>Full Time</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Industry Type</label>
						<select class="form-control" name="search[industry_id]">
							<option value="All">All</option>
							<?php
	                                        	$industries = Industry::all();
	                                        	foreach($industries as $industry):
	                                    	?>
	                                        	<option value="<?php echo $industry->id; ?>"  <?php echo (paramExists($search, 'industry_id') && $search['industry_id'] == $industry->id) ?  'selected' : '' ; ?>><?php echo $industry->name; ?></option>
	                                    	<?php
	                                        	endforeach;
	                                    	?>
		                                </select>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label></label>
						<div class='input-group date'>
							<button type="submit" class="btn btn-default btn-success">Search</button>
						</div>
					</div>
				</div>
				<!-- /.col-lg-2 -->
			</form>
		</div>

		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						List of Jobs
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter" id="jobList">
								<thead>
									<tr>
										<th>Job Title</th>
										<th>Experience</th>
										<th>Job Description</th>
										<th>Publish Date</th>
										<th>Expiry Date</th>
										<th>Edit</th>
										<th>Status</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$conditions = array();
									if(isset($_GET["search"])){
										
										// echo "<pre>";
										// print_r($search);
										// exit;
										if(paramExists($search, "publish_date_from") || paramExists($search, "publish_date_to")){
											if(paramExists($search, "publish_date_from") && paramExists($search, "publish_date_to")){
												$publish_date_from = strtotime($search["publish_date_from"]);
                										$publish_date_from = date("Y-m-d", $publish_date_from);
                										$publish_date_to = strtotime($search["publish_date_to"]);
                										$publish_date_to = date("Y-m-d", $publish_date_to);
                										$conditions[] = "publish_date BETWEEN '$publish_date_from' AND '$publish_date_to'";
											}
											else{
												if(paramExists($search, "publish_date_from")){
													$publish_date_from = strtotime($search["publish_date_from"]);
                											$publish_date_from = date("Y-m-d", $publish_date_from);
                											$conditions[] = "publish_date = '$publish_date_from'";
												}
												else{
													$publish_date_to = strtotime($search["publish_date_to"]);
                											$publish_date_to = date("Y-m-d", $publish_date_to);
                											$conditions[] = "publish_date < '$publish_date_to'";
												}
											}
										}

										if(paramExists($search, "expiry_date_from") || paramExists($search, "expiry_date_to")){
											if(paramExists($search, "expiry_date_from") || paramExists($search, "expiry_date_to")){
												$expiry_date_from = strtotime($search["expiry_date_from"]);
                										$expiry_date_from = date("Y-m-d", $expiry_date_from);
                										$expiry_date_to = strtotime($search["expiry_date_to"]);
                										$expiry_date_to = date("Y-m-d", $expiry_date_to);
                										$conditions[] = "expiry_date BETWEEN '$expiry_date_from' AND '$expiry_date_to'";
											}
											else{
												if(paramExists($search, "expiry_date_from")){
													$expiry_date_from = strtotime($search["expiry_date_from"]);
                											$expiry_date_from = date("Y-m-d", $expiry_date_from);
                											$conditions[] = "expiry_date = '$expiry_date_from'";
												}
												else{
													$expiry_date_to = strtotime($search["expiry_date_to"]);
                											$expiry_date_to = date("Y-m-d", $expiry_date_to);
                											$conditions[] = "expiry_date < '$expiry_date_to'";
												}
											}
										}


										if(paramExists($search, "location")){
											$search_term = $search["location"];
											$conditions[] = "location LIKE '%{$search_term}%'";
										}
										if(paramExists($search, "eligibility")){
											$search_term = $search["eligibility"];
											$search_term = addcslashes($search_term, "%_");
											$conditions[] = "eligibility LIKE '%{$search_term}%'";
										}
										if(paramExists($search, "experience")){
											$search_term = $search["experience"];
											$search_term = (int)$search_term;
											$conditions[] = "CAST(SUBSTRING_INDEX(experience, '+', 1) AS UNSIGNED INTEGER) >= $search_term";
											// CAST(SUBSTRING_INDEX(experience, "+", 1) AS UNSIGNED INTEGER)
										}
										if(paramExists($search, "job_type")){
											if($search["job_type"] != "All"){
												$conditions[] = "job_type = '" . "{$search["job_type"]}" .  "'";
											}
										}

										if(paramExists($search, "industry_id")){
											if($search["industry_id"] != "All"){
												$conditions[] = "industry_id = '" . "{$search["industry_id"]}" .  "'";
											}
										}
									}
									
									if(Auth::user()->type == "ADMIN"){
										$conditions = implode(" AND ", $conditions);
										$jobs = Job::all(array("conditions" => $conditions));	
										//echo Job::connection()->last_query;
									}
									else{
										$conditions = array_merge($conditions, array("employer_id" => Auth::user()->id));

										$conditions = implode(" AND " , $conditions);
										$jobs = Job::all(array("conditions" => $conditions));
									}
									
									foreach($jobs as $job):
									?>
										<tr class="odd gradeX">
											<td><?php echo $job->title; ?></td>
											<td><?php echo $job->experience; ?></td>
											<td><?php echo $job->description; ?></td>
											<td class="center"><?php echo $job->publish_date; ?></td>
											<td class="center"><?php echo $job->expiry_date; ?></td>
											<?php 
												$editJobURL = BASE_PATH . "/editJob.php?id=" . $job->id;
												$changeJobStatusURL = BASE_PATH . "/changeJobStatus.php?id=" . $job->id;
												$deleteJobURL = BASE_PATH . "/deleteJob.php?id=" . $job->id;
											?>
											<td><a href="<?php echo $editJobURL; ?>">Edit</a></td>
											<td><a href="<?php echo $changeJobStatusURL; ?>"><?php echo $job->status == true ? "Active" : "Inactive"; ?></a></td>
											<td><a href="<?php echo $deleteJobURL; ?>">Remove</a></td>
										</tr>
									<?php
									endforeach;
									?>		
								</tbody>
							</table>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<?php 
include_once "footer.php";
?>

<!-- /#wrapper -->

   
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    
    <script>
    $(document).ready(function() {
        $('#jobList').dataTable();
    });
    </script>

    <script type="text/javascript">
    $(function () {
        $('#publishDateFrom').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
        $('#expiryDateFrom').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
         $('#publishDateTo').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
        $('#expiryDateTo').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
    });
</script>