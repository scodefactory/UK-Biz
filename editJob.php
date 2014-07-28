<?php 
$title = "Add Job";
include_once "header.php";
?>

<?php
    if(isset($_POST['submit'])){

        $job = Job::find($_GET["id"]);
        $job->update_attributes($_POST["job"]);
        $job_valid = $job->is_valid();
        if($job_valid){
           if(!$job->save()){
           		if($job->publish_date){
	                $publish_dt = strtotime($job->publish_date);
	                $publish_dt = date("d M Y", $publish_dt);
	                $job->publish_date = $publish_dt;
	            }
	            else{
	                $publish_dt = "";
	            }
	            if($job->expiry_date){
	                $expiry_dt = strtotime($job->expiry_date);
	                $expiry_dt = date("d M Y", $expiry_dt);
	                $job->expiry_date = $expiry_dt;
	            }
	            else{
	                $expiry_dt = "";
	            }
           }
           else{
           		$url = BASE_PATH . "/viewJobs.php";
            	exit(header("Location: $url"));
           }
        }
        else{
            if($job->publish_date){
                $publish_dt = strtotime($job->publish_date);
                $publish_dt = date("d M Y", $publish_dt);
                $job->publish_date = $publish_dt;
            }
            else{
                $publish_dt = "";
            }
            if($job->expiry_date){
                $expiry_dt = strtotime($job->expiry_date);
                $expiry_dt = date("d M Y", $expiry_dt);
                $job->expiry_date = $expiry_dt;
            }
            else{
                $expiry_dt = "";
            }
        }
    }
    else{
        $job = Job::find($_GET["id"]);
        if($job->publish_date){
            $publish_dt = strtotime($job->publish_date);
            $publish_dt = date("d M Y", $publish_dt);
            $job->publish_date = $publish_dt;
        }
        else{
            $publish_dt = "";
        }
        if($job->expiry_date){
            $expiry_dt = strtotime($job->expiry_date);
            $expiry_dt = date("d M Y", $expiry_dt);
            $job->expiry_date = $expiry_dt;
        }
        else{
            $expiry_dt = "";
        }
    }
?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Job</h1>
            </div>
            
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
               <div class="col-lg-6">
                <form role="form" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Job Title</label>
                                <input class="form-control" placeholder="Enter Job Title" name="job[title]" value="<?php echo $job->title; ?>">
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('title')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('title')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Job Description</label>
                                <textarea class="form-control" rows="3" name="job[description]"><?php echo $job->description; ?></textarea>
                        </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('description')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('description')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Location</label>
                                 <input class="form-control" placeholder="Enter Location" name="job[location]" value="<?php echo $job->location; ?>">
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('location')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('location')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Eligibility</label>
                                <input class="form-control" placeholder="Enter Eligibility" name="job[eligibility]" value="<?php echo $job->eligibility; ?>">
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('eligibility')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('eligibility')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Experience</label>
                                <input class="form-control" placeholder="Enter Experience Required" name="job[experience]" value="<?php echo $job->experience; ?>">
                        </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('experience')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('experience')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Job Type</label>
                                <select class="form-control" name="job[job_type]">
                                    <option value="PART_TIME" <?php echo $job->job_type == "PART_TIME" ? "selected" : ""; ?> >Part Time</option>
                                    <option value="FULL_TIME" <?php echo $job->job_type == "FULL_TIME" ? "selected" : ""; ?> >Full Time</option>
                                </select>
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('job_type')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('job_type')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Industry Type</label>
                                <select class="form-control" name="job[industry_id]">
                                    <?php
                                        $industries = Industry::all();
                                        foreach($industries as $industry):
                                    ?>
                                        <option value="<?php echo $industry->id; ?>" <?php echo $job->industry_id == $industry->id ? "selected" : ""; ?>><?php echo $industry->name; ?></option>
                                    <?php
                                        endforeach;
                                    ?>
                                </select>
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('industry_id')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('industry_id')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Publish Date</label>
                                <div class='input-group date' id='publishDate' data-date-format="DD MMM YYYY">
                                    <input type='text' class="form-control"  name="job[publish_date]" value="<?php echo $publish_dt; ?>"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('publish_date')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('publish_date')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Expiry Date</label>
                                <div class='input-group date' id='expiryDate' data-date-format="DD MMM YYYY">
                                    <input type='text' class="form-control" name="job[expiry_date]"  value="<?php echo $expiry_dt; ?>"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>    
                        </div>
                        <?php if($job->errors && $job->errors->on('expiry_date')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($job->errors->on('expiry_date')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default btn-success">Save Job</button>
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