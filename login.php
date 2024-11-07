<?php $title= "Login"; require('include/header.php');?>
<?php
# gå till index om användaren är loggad och om inte visa fel password eller username.
if($_SESSION) header("location: ../Welcome/welcome.php");?>

<?php if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $form_password = mysqli_real_escape_string($conn, $_POST['password']);
  //ok
  session_start();

// Set a session variable to indicate that this is the entry point

  $userInfo = getUserInfo($username);
  if($userInfo) 
  {
    if(password_verify($form_password, $userInfo['password'])) 
    {
      $_SESSION['username'] = $userInfo['username'];
      $_SESSION['is_admin'] = $userInfo['is_admin'];
      $_SESSION['logged_in'] = true;
      $_SESSION['entry_point'] = true;
      header("location: ../Welcome/welcome.php");
    }
    ?>
    Wrong password..
    <?php
  } 
  else {?>
    echo "Username not found", <?php }
} else {?>
<div class="form">
<b class="title"><?php echo $title;?></b>
<div class="element-with-shadow"></div>
<form action="login.php" method="post">
  Username
  <input type="text" name="username" required />
  Password
  <input type="password" name="password" required />
  <input type="submit" name="login" value="Login">
</form>
</div>
<?php }?>
<?php require('include/footer.php');?>
