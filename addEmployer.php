<?php 
    $title = "Add Employer";
    include_once "header.php";
?>

<?php
    if(isset($_POST['submit'])){
        $user = new User(
            $_POST["user"]
        );
        $employer = new Employer(
            $_POST["employer"]
        );
        $user->password_confirmation = $_POST["confirmPassword"];
        $user->type = "EMPLOYER";
        $user_valid = $user->is_valid();
        $employer_valid = $employer->is_valid();
        if($user_valid && $employer_valid){
            $user->save();
            $user = User::find_by_email($_POST["user"]["email"]);
            $employer->user_id = $user->id;
            $employer->save();
            $url = BASE_PATH . "/viewEmployers.php";
            exit(header("Location: $url"));
        }
    }
    else{
        $user = new User();
        $employer = new Employer();
    }
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
                <form role="form" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Employer Name</label>
                                <input value="<?php echo $user->name; ?>" class="form-control" name="user[name]" id="employerName" placeholder="Enter Employer Name" autofocus type="text">
                            </div>    
                        </div>
                        <?php if($user->errors && $user->errors->on('name')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php
                                        echo Helper::getErrorMessages($user->errors->on('name')); 
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Contact Person Name</label>
                                <input value="<?php echo $employer->contact_person; ?>" class="form-control" name="employer[contact_person]" id="contactPersonName" placeholder="Enter Contact Person Name" autofocus>
                            </div>    
                        </div>
                        <?php if($employer->errors && $employer->errors->on('contact_person')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($employer->errors->on('contact_person')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="employer[address]" id="employerAddress"><?php echo $employer->address; ?></textarea>
                            </div>    
                        </div>
                        <?php if($employer->errors && $employer->errors->on('address')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($employer->errors->on('address')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Industry Type</label>
                                <select class="form-control" name="employer[industry_id]">
                                    <option value="1" <?php echo $employer->industry_id == 1 ? "selected" : ""; ?>>IT</option>
                                    <option value="2" <?php echo $employer->industry_id == 2 ? "selected" : ""; ?>>Manufacturing</option>
                                    <option value="3" <?php echo $employer->industry_id == 3 ? "selected" : ""; ?>>Hotels</option>
                                    <option value="4" <?php echo $employer->industry_id == 4 ? "selected" : ""; ?>>Education</option>
                                    <option value="5" <?php echo $employer->industry_id == 5 ? "selected" : ""; ?>>Marketting</option>
                                    <option value="6" <?php echo $employer->industry_id == 6 ? "selected" : ""; ?>>HR</option>
                                    <option value="7" <?php echo $employer->industry_id == 7 ? "selected" : ""; ?>>Sales</option>
                                </select>
                            </div>    
                        </div>
                        <?php if($employer->errors && $employer->errors->on('industry_id')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($employer->errors->on('industry_id')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Email</label>
                                <input value="<?php echo $user->email; ?>" class="form-control" placeholder="E-mail" name="user[email]" type="email"  value="">
                            </div>    
                        </div>
                        <?php if($user->errors && $user->errors->on('email')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($user->errors->on('email')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>User Name</label>
                                <input value="<?php echo $user->user_name; ?>" class="form-control" placeholder="User Name" name="user[user_name]" type="text"  value="">
                            </div>    
                        </div>
                        <?php if($user->errors && $user->errors->on('user_name')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($user->errors->on('user_name')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Password</label>
                                <input class="form-control" placeholder="Password" name="user[password]" type="password" value="">
                            </div>    
                        </div>
                        <?php if($user->errors && $user->errors->on('password')): ?>
                            <div class="row">
                                <div class="col-sm-12 text-danger">
                                    <?php echo Helper::getErrorMessages($user->errors->on('password')); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Confirm Password</label>
                                <input class="form-control" placeholder="Confirm Password" name="confirmPassword" type="password" value="">
                        </div>
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
                     <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                            <button type="submit" class="btn btn-default btn-success" name="submit">Sign Up</button>
                        </div>
                    </div>
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
