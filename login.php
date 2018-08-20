<!DOCTYPE html>
<!--
This Work is Licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
Author: Muhammed Salman Shamsi
-->

<html>
    <head>
        <?php require_once 'header.php' ?>
        <title>Urban Mumbra Login</title>
    </head>
<body>
<div class="container">
<?php
if($_POST)
{
 if(!$loggedin)
 {

    $error=$user=$pass="";
  if (isset($_POST['username']))
  {
    connectdB();
    global $link;
    $user = sanitizeString($_POST['username']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        echo "<div class='row text-center' ><div class='alert alert-danger'>Not all fields were entered</div></div>";
    else
    {
      $s1="su*!#er";
      $s2="ts&a@s#";
      $token= hash('ripemd128', "$s1$pass$s2");

      $result = mysqli_query($link,"SELECT userid,grid FROM Access WHERE userid='$user' AND pass='$token'");
      $row = mysqli_fetch_array($result);

      if (!$row)
      {
        echo " <div class='row text-center' ><div class='alert alert-danger'>Check your username or password and try submitting again.</div></div>";
      }
      else
      {

        $_SESSION['user'] = $row['userid'];
        $_SESSION['grid'] = $row['grid'];
        $loggedin=TRUE;
        header("Refresh: 0; url=index.html");
        exit();
      }
    }
  }
 }
}

if(!$loggedin)
{

echo <<<_END

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center">UrbanMumbra</h1>
            <h1 class="text-center login-title">Sign in to continue to Urban Mumbra</h1>
            <div class="account-wall">
                <img class="profile-img" src="img/mumbra.jpg"
                    alt="">
                <form class="form-signin" action="login.php" method="post" >
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password"  name="pass" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="createuser.php" class="text-center new-account">Register for an Account </a>
        </div>
    <br><br>
    </div>

_END;

}
else {
         echo "<div class='alert alert-info'><h4>You are already logged In as ".$user.
          ". Please <a href='logout.php'>Log Out</a> to Sign In as different User </h4></div>";
          echo '</div>';
     header("Refresh: 1; url=index.php");
     //exit();
}


require_once 'footer.php';
?>
