<?php

# data bas som används
$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbdatabase = "shop1";

$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbdatabase);



# används i profile.php i userinfo och  adress formuläret.
function getUserInfo($username) {
  global $conn;
  $selectQry = 'select * from users where username = ?';
  $selectStatement = mysqli_prepare($conn, $selectQry);
  mysqli_stmt_bind_param($selectStatement,'s', $username);
  mysqli_stmt_execute($selectStatement);

  $result = mysqli_stmt_get_result($selectStatement);
  $userInfo = mysqli_fetch_assoc($result);
  return $userInfo;
}


# föra in ny produkt i cart tabell men inte köpt än..
function showPlan($workoutname,$Setsnumber,$Repsnumber,$planname,$image) {
  global $conn;
  Addworkout($workoutname,$Setsnumber,$Repsnumber,$planname,$image);
  return mysqli_affected_rows($conn);
}

function Addworkout($workoutname,$Setsnumber,$Repsnumber,$planname,$image) {
  global $conn;
  $insertQry = 'insert into training (username,name_of_workout, Setsnumber,Repsnumber,plan_name,image) values (?,?,?,?,?,?)';
  $insertStatement = mysqli_prepare($conn,$insertQry);
  mysqli_stmt_bind_param($insertStatement,'ssiiss',$_SESSION['username'],$workoutname,$Setsnumber,$Repsnumber,$planname,$image);
  mysqli_stmt_execute($insertStatement);
  return mysqli_insert_id($conn);
}

# för att visa planen i sidan
function show_saved_workout($planname) {
  global $conn;
  $selectQry = '
  select name_of_workout, Repsnumber ,Setsnumber,plan_name,image from training
   where training.username = ? AND training.plan_name =?';
  $selectStatement = mysqli_prepare($conn, $selectQry);
  mysqli_stmt_bind_param($selectStatement,'ss',$_SESSION['username'],$planname);
  mysqli_stmt_execute($selectStatement);

  $result = mysqli_stmt_get_result($selectStatement);
  $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $products;
}
