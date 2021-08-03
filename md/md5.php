<?
ini_set('memory_limit', '-1');
$hash = $_GET['hash'];
$pass = $_GET['pass'];

while (!$success) {
	$md5 = md5($pass);
	if ($hash == $md5) {
		$success = true;
		echo 'YES';
	} else {
		$success = true;
		echo 'NO';
	}
}