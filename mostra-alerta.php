<?php
function mostraAlerta($tipo){
	if(isset($_SESSION[$tipo])){
		echo "<p class='alert-".$tipo."'>".$_SESSION[$tipo]."</p>";
	}
	unset($_SESSION[$tipo]);
}