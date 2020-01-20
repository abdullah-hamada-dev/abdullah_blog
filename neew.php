// Start the session
session_start();

if($_SESSION['logged_in']){
    header('Location: index.php'); 
}
require_once('config.php'); 


// If form submitted, insert values into the database.
if (isset($_POST['username']) && isset($_POST['password'])){
	$sql = "SELECT * from users WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
	$result = new_php_db_query($sql);
	if ($result->num_rows > 0) {
	    $_SESSION['logged_in'] = ture;
	     header('Location: index.php'); 
	}

}
*/