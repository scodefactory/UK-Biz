<?php 
$title = "View Candidates";
include_once "header.php";
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
                        <input class="form-control" name="employerName" id="employerName" placeholder="" autofocus type="text">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Skill Set</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder=""  type="text">

                 </div>
            </div>
            <!--<div class="col-lg-2">
                <div class="form-group">
                        <label>Current Location</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder=""  type="text">
                </div>
            </div>-->
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Preferred Location</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder=""  type="text">
                    </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Qualification</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder=""  type="text">
                    </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                        <label>Expected Salary</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder=""  type="text">
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
                                        <tr class="odd gradeX">
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