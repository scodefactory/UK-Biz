<?php 
$title = "View Jobs";
include_once "header.php";
?>
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Posted Jobs By Employer</h1>
            </div>
            <!-- /.col-lg-12 -->
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
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeC">
                                           <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
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