<?php require_once("db.php"); ?>
<?php



function Login_Attempt($username,$password){
  global $connection;
  $sql = "SELECT * FROM users WHERE username=:username AND password=:password LIMIT 1";
  $stmt = $connection->prepare($sql);
  $stmt->bindValue(':username',$username);
  $stmt->bindValue(':password',$password);
  $stmt->execute();
  $result = $stmt->rowcount();
  if ($result==1) {
    return ("index.php");
  }else {
    return null;
}


function Confirm_Login(){
if (isset($_SESSION["id_user"])) {
  return true;
}  else {
  $_SESSION["ErrorMessage"]="Login Required !";
  Redirect_to("login_style.php");
}
}
?>