<?php
    class cookies {
	function set_cookie() {
		setcookie("name",$_POST['name']);
		setcookie("textcolor",$_POST['textcolor'])
	}
}
?>
