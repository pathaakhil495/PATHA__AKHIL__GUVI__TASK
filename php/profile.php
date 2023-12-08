<?php
$mongo= new MongoClient();
$db=$mongo->local;
$collection=$db->help;
if($_POST)
{
$insert= array(
	'mobile' => $_POST['mobile'],
	'city' => $_POST['city'],
	'dob' => $_POST['dob']
);
	if($collection->insert($insert))
		{
		echo "WELCOME!";
		}
	else {
		echo "oops! sorry";
	}
}
else {
	echo "No data to saved  ";
	}

?>

<?php
  session_start();
  if (!isset($_SESSION['username']) || time() > $_SESSION['expires']) {

    header('Location: /login.php');
    exit;
  }







  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->set('profile:' . $_SESSION['username'], json_encode($_POST));
    header('Location: /dashboard.php');
    exit;
  }
?>
