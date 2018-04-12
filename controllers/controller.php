<?php 

class controller {
	public static function CreateView($viewname){
		require_once("./views/$viewname.php");
	}
}

?>