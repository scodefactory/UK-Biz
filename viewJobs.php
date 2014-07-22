<?php 
$title = "View Jobs";
include_once "header.php";
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
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Publish Date To</label>
                        <div class='input-group date' id='publishDateTo' data-date-format="DD MMM YYYY">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>

                 </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Expiry Date From</label>
                        
                        <div class='input-group date' id='expiryDateFrom' data-date-format="DD MMM YYYY">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Expiry Date To</label>
                        <div class='input-group date' id='expiryDateTo' data-date-format="DD MMM YYYY">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="col-lg-2">
            <div class="form-group">
                <label>Location</label>
                <input class="form-control" placeholder="Enter Location">
            </div>
            </div>
            <div class="col-lg-2">
            <div class="form-group">
                <label>Eligibility</label>
                 <input class="form-control" placeholder="Enter Eligibility">
            </div>
            </div>
            <div class="col-lg-2">
            <div class="form-group">
                <label>Experience</label>
                <input class="form-control" placeholder="Enter Experience Required">
            </div>
            </div>
            <div class="col-lg-2">
            <div class="form-group">
            <label>Job Type</label>
                <select class="form-control">
                    <option>All</option>
                    <option>Part Time</option>
                    <option>Full Time</option>
                </select>
            </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                         <label>Industry Type</label>
                        <select class="form-control">
                            <option>All</option>
                            <option>IT</option>
                            <option>Manufacturing</option>
                            <option>Hotels</option>
                            <option>Education</option>
                            <option>Marketting</option>
                            <option>HR</option>
                            <option>Sales</option>
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
                                        <tr class="odd gradeX">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Lead Software Eng</td>
                                            <td>5+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">15 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Tech Lead</td>
                                            <td>8+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Project Manager</td>
                                            <td>10+</td>
                                            <td>Good Communication Skills, Exp on handing more than 10 Projects</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Assosiate Softare Eng.</td>
                                            <td>0-1</td>
                                            <td>Should have good logical and analytical skills and knowledge of PHP</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Project Lead</td>
                                            <td>5+</td>
                                            <td>Should have good communication and Technical idea about PHP and HTML</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Android Software Eng.</td>
                                            <td>2+</td>
                                            <td>Should have good exp of Anroid SDK/NDK</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
                                            <td><a href="#">Active</a></td>
                                            <td><a href="#">Remove</a></td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Software Eng</td>
                                            <td>2+</td>
                                            <td>Candidate should have exp with PHP and CodeIgniter</td>
                                            <td class="center">14 Jun 2014</td>
                                            <td class="center">16 Jun 2014</td>
                                            <td><a href="#">Edit</a></td>
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