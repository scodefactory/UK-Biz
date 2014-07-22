<?php 
$title = "Add Job";
include_once "header.php";
?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add Job</h1>
            </div>
            
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-6">
                <form role="form">
                    <div class="form-group">
                        <label>Job Title</label>
                        <input class="form-control" placeholder="Enter Job Title">
                    </div>
                    <div class="form-group">
                        <label>Job Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                         <input class="form-control" placeholder="Enter Location">
                    </div>
                    <div class="form-group">
                        <label>Eligibility</label>
                         <input class="form-control" placeholder="Enter Eligibility">
                    </div>
                    <div class="form-group">
                        <label>Experience</label>
                        <input class="form-control" placeholder="Enter Experience Required">
                    </div>
                    <div class="form-group">
                    <label>Job Type</label>
                        <select class="form-control">
                            <option>Part Time</option>
                            <option>Full Time</option>
                        </select>
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
                    </div>
                    <button type="submit" class="btn btn-default btn-success">Save Job</button>
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
<script type="text/javascript">
    $(function () {
        $('#publishDate').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
        $('#expiryDate').datetimepicker({
            pickTime: false,
            showToday: true,
            useCurrent: true,
        });
    });
</script>