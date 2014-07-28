<?php 
	$title = "View Candidates";
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
                <h1 class="page-header">View Candidates</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <form role="form">
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Experience</label>
                        <input class="form-control"  id="" placeholder="" autofocus type="text" name="search[experience]" value="<?php echo paramExists($search, 'experience') ?  $search['experience'] : '' ; ?>">
                </div>
            </div>
            <!-- <div class="col-lg-2">
                <div class="form-group">
                        <label>Skill Set</label>
                        <input class="form-control" id="" placeholder=""  type="text" name="search[skill_set]">

                 </div>
            </div> -->
            <!--<div class="col-lg-2">
                <div class="form-group">
                        <label>Current Location</label>
                        <input class="form-control" name="" id="employerName" placeholder=""  type="text">
                </div>
            </div>-->
            <div class="col-lg-2">
                	<div class="form-group">
                        <label>Preferred Location</label>
                        <input class="form-control" id="" placeholder=""  type="text" name="search[prefered_location]" value="<?php echo paramExists($search, 'prefered_location') ?  $search['prefered_location'] : '' ; ?>">
                  	</div>
            </div>
            <!-- <div class="col-lg-2">
                	<div class="form-group">
                        <label>Qualification</label>
                        <input class="form-control" placeholder=""  type="text" name="qualification">
                  	</div>
            </div> -->
		<div class="col-lg-2">
			<div class="form-group">
				<label>Expected Salary</label>
				<input class="form-control"  placeholder=""  type="text" name="search[expected_salary]"   value="<?php echo paramExists($search, 'expected_salary') ?  $search['expected_salary'] : '' ; ?>">
			</div>
		</div>
            <div class="col-lg-2">
			<div class="form-group">
				<label>Industry Type</label>
				<?php $industries = Industry::all(); ?>
				<select class="form-control" name="search[industry_id]">
					<option value="All">All</option>	
					<?php foreach($industries as $industry): ?>					
						<option value="<?php echo $industry->id; ?>" <?php echo (paramExists($search, 'industry_id') && $search['industry_id'] == $industry->id) ?  'selected' : '' ; ?>><?php echo $industry->name; ?></option>
					<?php endforeach; ?>
				</select>
                	</div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label></label>
                    <div class='input-group date' id='expiryDateTo' data-date-format="DD MMM YYYY">
                    <button type="submit" class="btn btn-default btn-success">Search</button>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-2 -->

            </form>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Candidates
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped tablesorter" id="jobList">
                                    <thead>
                                        <tr>
                                            <th>Candidate Name</th>
                                            <th>Experience</th>
                                            <th>Preferred Location</th>
                                            <th>Expected Salary</th>
                                            <th>Industry Type</th>
                                        </tr>
                                    </thead>
                                      <tbody>
	                                      <?php
								$conditions = array();
								if(isset($_GET["search"])){
									if(paramExists($search, "experience")){
										$search_term = $search["experience"];
										$search_term = (int)$search_term;
										$conditions[] = "CAST(SUBSTRING_INDEX(experience, '+', 1) AS UNSIGNED INTEGER) = $search_term";
										// CAST(SUBSTRING_INDEX(experience, "+", 1) AS UNSIGNED INTEGER)
									}

									if(paramExists($search, "prefered_location")){
										$search_term = $search["prefered_location"];
										$conditions[] = "prefered_location LIKE '%{$search_term}%'";
									}

									if(paramExists($search, "expected_salary")){
										$conditions[] = "expected_salary = " . $search['expected_salary'];
									}

									if(paramExists($search, "industry_id")){
										if($search["industry_id"] != "All"){
											$conditions[] = "industry_id = '" . "{$search["industry_id"]}" .  "'";
										}
									}
								}
							?>
                                        	<?php
                                        		$conditions = implode(" AND ", $conditions);
	                                        	$candidates = Candidate::all(array("conditions" => $conditions));
	                                            foreach($candidates as $candidate):
                                        	?>
	                                      		<tr>
	                                      			<td><?php echo $candidate->name; ?></td>
			                                            <td><?php echo $candidate->experience; ?></td>
			                                            <td><?php echo $candidate->prefered_location; ?></td>
			                                            <td class="center"><?php echo $candidate->expected_salary; ?></td>
			                                            <td class="center"><?php echo $candidate->industry->name; ?></td>
	                                      		</tr>
                                        	<?php
	                                            endforeach; 
                                        	?>
                                        <!-- <tr class="odd gradeX">
                                            <td>Rupesh Kumar 1</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Rupesh Kumar 2</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Rupesh Kumar 3</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Rupesh Kumar 4</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Rupesh Kumar 5</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Rupesh Kumar 6</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 7</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 8</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 9</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 10</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 11</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 12</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 13</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 14</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 15</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 16</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 17</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 18</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 19</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 20</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 21</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 22</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 23</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 24</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 25</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 26</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 27</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 28</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 29</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 30</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 31</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 32</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 33</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 34</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 35</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 36</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 37</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 38</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 39</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 40</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 41</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 42</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 43</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Rupesh Kumar 44</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 45</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 46</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Rupesh Kumar 47</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Rupesh Kumar 48</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Rupesh Kumar 49</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 50</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Rupesh Kumar 51</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Rupesh Kumar 52</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Rupesh Kumar 53</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Rupesh Kumar 54</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Rupesh Kumar 55</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Rupesh Kumar 56</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Rupesh Kumar 57</td>
                                            <td>8.0</td>
                                            <td>Haridwar</td>
                                            <td class="center">6K</td>
                                            <td class="center">IT</td>
                                        </tr> -->
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