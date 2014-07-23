<?php
include_once "header.php";

if(Auth::check()){
    if(Auth::user()->type == "ADMIN"){
        $url = BASE_PATH . '/viewEmployers.php';
    }
    else{
        $url = BASE_PATH . '/viewJobs.php';
    }
    exit(header("Location: $url"));
}
if(isset($_POST['submit'])) {
      $user_name = $_POST["userName"];
      $password = $_POST["password"];
      $user_type = $_POST["userType"];
      if(Auth::authenticate($user_name, $password, $user_type)){
          if(Auth::user()->type == "ADMIN"){
              $url = BASE_PATH . '/viewEmployers.php';
          }
          else{
              $url = BASE_PATH . '/viewJobs.php';
          }
          
          exit(header("Location: $url"));
      }
      else{
          $message = Auth::getMessage();
     }
    
}
if(isset($_REQUEST['signup'])) {
    $_SESSION['userType'] = "";
    $url = BASE_PATH . '/signUp.php';
    exit(header("Location: $url"));
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php if(isset($message) && $message): ?>
                            <div class="alert alert-danger">
                                <?php echo $message; ?>
                            </div>
                        <?php endif;  ?>
                        <form role="form" action="login.php" method="POST" id="login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="userName" type="text" autofocus value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="userType" id="userType">
                                        <option value="EMPLOYER">Employer</option>
                                        <option  value="ADMIN">Admin</option>
                                    </select>
                                </div>
                                <!--<div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="submit" id="submit"/>

                                <input type="submit" class="btn btn-lg btn-success btn-block" name="signup" id="signup" value="Sign Up"/>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include_once "footer.php"; ?>