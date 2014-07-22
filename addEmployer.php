<?php 
$title = "Add Employer";
include_once "header.php";
?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Employer</h1>
            </div>
            
        </div>
        <!-- /.row -->
       <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-6">
                <form role="form">
                    <div class="form-group">
                        <label>Employer Name</label>
                        <input class="form-control" name="employerName" id="employerName" placeholder="Enter Employer Name" autofocus type="text">
                    </div>
                    <div class="form-group">
                        <label>Contact Person Name</label>
                        <input class="form-control" name="contactPersonName" id="contactPersonName" placeholder="Enter Contact Person Name" autofocus>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="3" name="employerAddress" id="employerAddress"></textarea>
                    </div>
                    <div class="form-group">
                    <label>Industry Type</label>
                        <select class="form-control">
                            <option>IT</option>
                            <option>Manufacturing</option>
                            <option>Hotels</option>
                            <option>Education</option>
                            <option>Marketting</option>
                            <option>HR</option>
                            <option>Sales</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" placeholder="E-mail" name="email" type="email"  value="">
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" placeholder="User Name" name="userName" type="text"  value="">
                    </div>
                    <div class="form-group">
                         <label>Password</label>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                         <label>Confirm Password</label>
                        <input class="form-control" placeholder="Confirm Password" name="confirmPassword" type="password" value="">
                    </div>
                    <!--<div class="form-group">
                        <label>Publish Date</label>
                        <div class='input-group date' id='publishDate' data-date-format="DD MMM YYYY">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Expiry Date</label>
                        <div class='input-group date' id='expiryDate' data-date-format="DD MMM YYYY">
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-default btn-success">Sign Up</button>
                </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php 
include_once "footer.php";
?>
