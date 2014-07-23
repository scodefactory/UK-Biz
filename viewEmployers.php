<?php 
$title = "View Candidates";
include_once "header.php";
?>
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">View Employers</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
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
                                            <th>Employer Name</th>
                                            <th>Contact Person</th>
                                            <th>Industry Type</th>
                                            <th>See Jobs</th>
                                            <th>Update</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $employers = Employer::all();
                                            foreach($employers as $employer):
                                        ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $employer->user->name; ?></td>
                                                <td><?php echo $employer->contact_person; ?></td>
                                                <td><?php echo $employer->industry->name; ?></td>
                                                <td><a href="employerPostedJobs.php?employer_id=<?php echo $employer->id; ?>" >Posted Jobs</a></td>
                                                <td><a href="#">Edit</a></td>
                                                <td><a href="#">Active</a></td>
                                                <td><a href="#">Remove</a></td>
                                            </tr>
                                        <?php
                                            endforeach;
                                        ?>
                                        <!-- <tr class="odd gradeX">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>XYZ PVT. LTD</td>
                                            <td>Mike C 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Anchor PVT. LTD</td>
                                            <td>Mr. Tejpal</td>
                                            <td>Production</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Uttrakhand Bizz</td>
                                            <td>Mr. OWner</td>
                                            <td>Marketting</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>HLL</td>
                                            <td>Mr. Patwal</td>
                                            <td>Manufacturing</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Orange Inc</td>
                                            <td>Naresh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Haridwar Packaging</td>
                                            <td>Mr. Malhotra</td>
                                            <td>Packing</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>IT</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>IT</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>ABC PVT. LTD</td>
                                            <td>Rupesh Kumar 1</td>
                                            <td>HR</td>
                                            <td><a href="employerPostedJobs.php">Posted Jobs</a></td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
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