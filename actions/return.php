<?php

if(isset($_POST['email'])) {
	$msg = get_password($_POST['email']);
	
	if($msg === TRUE) {
		$_SESSION['msg'] = "Новый пароль выслан Вам на почту";
		header("Location:login.php");
	}
	else {
		$_SESSION['msg'] = $msg;
		header("Location:".$_SERVER['PHP_SELF']);
	}
	exit();
}
$content = render(TEMPLATE."return.tpl",array("title"=>"hello"));
?>